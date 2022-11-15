<?php

namespace App\Http\Controllers;

use App\Models\UserHasAccount;
use Illuminate\Http\Request;

class UserHasAccountController extends Controller
{
    public static function get(){
        return UserHasAccount::where("user_id", auth()->user()->id)
        ->get();
        
    }
}
