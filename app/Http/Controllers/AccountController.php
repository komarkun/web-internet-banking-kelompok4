<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function viewAccounts()
{
    $accounts = Account::all();
    return view('accounts.index', ['accounts' => $accounts]);
}

}




