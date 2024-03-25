<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Item;

class AdminController extends Controller
{
    public function createOperatorPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'Operator',
        ]);

        return redirect('/admin/account-operator');
    }

    public function createItemPost(Request $request)
    {
        $request->validate([
            'itemName' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);

        $price = str_replace(["Rp. ", "."], "", $request->price);
        $price = intval($price);
        
        Item::create([
            'itemName' => $request->itemName,
            'quantity' => $request->quantity,
            'price' => $price,
        ]);


        return redirect('/admin/stock-barang');
    }

    public function deleteItem($id)
    {
        Item::destroy($id);
        return redirect('/admin/stock-barang');
    }

    public function deleteOperator($id)
    {
        User::destroy($id);
        return redirect('/admin/account-operator');
    }
}
