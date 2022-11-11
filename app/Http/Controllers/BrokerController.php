<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Broker;
use App\Models\Account;

class BrokerController extends Controller
{
    public function handleCreateBroker(Request $request){
        $broker = new Broker();
        $broker->name = $request->name;
        $broker->account_id = $request->account_id;

        $account = new Account();
        $account->name = Auth::user()->id;

        $broker->save();

        return redirect()->back()->with('message', 'Broker created successfully');
    }
}
