<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

use App\Models\Account;


class ProfileController extends Controller
{
    public function __construct(){

    }

    public function render(Request $request){
        return view('home.profile', ['pagetitle' => 'Profile', 'data' => $this->getData()]);
    }

    private function getData(){
        $userid = Auth::user()->id;
        // check if data is cached
        if(Cache::has($userid . '_profiledata')){
            return Cache::get($userid . '_profile_data');
        }
        else {
            $this->data = $this->fetchDataFromDb();
            Cache::put($userid . '_profile_data', $this->data, 60);
            return $this->data;
        }
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
