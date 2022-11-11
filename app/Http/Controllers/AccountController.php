<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public static function getById(int $id)
    {
        return Account::find($id);
    }
}
