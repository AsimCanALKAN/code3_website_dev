<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Account;



class UserController extends Controller
{


    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return view('home.profile', [
            'user' => User::findOrFail($id)
        ]);
    }

    public function update(Request $request): View
    {
        Auth::user()->name = $request->name;
        Auth::user()->email = $request->email;

        if (auth()->user()->can('edit-passwords')) {
            Auth::user()->password = $request->password;
        }

        Auth::user()->save();

        return view('users.show')->with([
            'user' => Auth::user(),
        ]);
    }

    public function delete(Request $request): View
    {
        Auth::user()->name = $request->name;
        Auth::user()->email = $request->email;

        if (auth()->user()->can('edit-passwords')) {
            Auth::user()->password = $request->password;
        }

        Auth::user()->save();

        return view('users.show')->with([
            'user' => Auth::user(),
        ]);
    }

    public function add(Request $request)
    {
        if (auth()->user()->can('edit_profile_page')) {
            $user =  User::create([
                'name' => $request["name"],
                'email' => $request["email"],
                'password' => Hash::make($request["password"],),
            ])->assignRole($input['role'] ?? "Moderator");
            $user->save();
        }
        return response()->json(['error' => 'false', 'state' => 'OK']);
    }

    private function getData()
    {
        $userid = Auth::user()->id;
        // check if data is cached
        $this->data = $this->fetchDataFromDb();
        return $this->data;
    }


    private function fetchDataFromDb(){
        $data = [
            'brokers' => $this->getBrokerDetails()
        ];

        return $data;
    }

    private function getBrokerDetails(){
        $accountBrokerPairs = Account::where('user_id', Auth::user()->id)
        ->join('brokers', 'accounts.broker_id', '=', 'brokers.id')
        ->get();
        // dd($accountBrokerPairs);
        return $accountBrokerPairs;
    }
}
