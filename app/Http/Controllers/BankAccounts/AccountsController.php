<?php

namespace App\Http\Controllers\BankAccounts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountsController extends Controller
{
    public function findAccounts() {
        return "Find all accounts";
    }

    public function getAccountByActNumber($actnum) {
        // return "Fetch An Accounts by account number " . $actnum;

        // This is just to test the connectivity with the DB
        $query = "select * from accounts where accountnumber = '" . $actnum . "'";
        $data = DB::connection('pgsql')->select($query);
        return $data;
    }
}
