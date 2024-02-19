<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function admin()
    {
        return view('AdminPage.dashboard');
    }

    public function accountOperator()
    {
        $accountOperator = User::where('role', 'Operator')->paginate(5);
        return view('AdminPage.accountOperator', compact('accountOperator'));
    }
    
    public function createAccount()
    {
        return view('AdminPage.createOperator');
    }
    
    public function operator()
    {
        return view('OperatorPage.dashboard');
    }

    public function stockBarang()
    {
        $stockBarang = Item::all();
        return view('AdminPage.stockBarang');
    }

    public function pendataanBarang()
    {
        return view('OperatorPage.pendataanBarang');
    }

    public function stockBarangOperator()
    {
        return view('OperatorPage.stockBarang');
    }


}
