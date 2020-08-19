<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('inventory_add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_name' => ['required', 'string', 'min:3', 'max:255'],
            'price' => ['required', 'string', 'min:1', 'max:255'],
            'quantity' => ['required', 'string', 'max:255'],
        ]);
        $inv = \App\Inventory::create($validatedData);

        return view('inventory_add_success')->with('id', $inv->id);
    }

    public function showInventory() 
    {
        $data = DB::table('inventory')->paginate(10);
        return view('showInventory', ['data' => $data]);
    } 
}
