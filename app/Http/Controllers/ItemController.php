<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function createItemPost(Request $request)
    {
        $request->validate([
            'itemName' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);

        Item::create([
            'itemName' => $request->itemName,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);

        return redirect('/admin/stock-barang');
    }

    public function deleteItem($id)
    {
        Item::destroy($id);
        return redirect('/admin/stock-barang');
    }
}
