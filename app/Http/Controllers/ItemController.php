<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::latest()->get();
        $lowStock = Item::where('quantity', '<=', 5)->count();
        return view('items.index', compact('items', 'lowStock'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'           => 'required|min:2',
            'category'       => 'required',
            'purchase_price' => 'required|numeric|min:0',
            'selling_price'  => 'required|numeric|min:0',
            'quantity'       => 'required|integer|min:0',
        ]);

        $data = $request->all();
        $data['status'] = $request->quantity > 0 ? 'in_stock' : 'out_of_stock';

        Item::create($data);
        return redirect()->route('items.index')
                         ->with('success', 'Item added successfully!');
    }

    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name'           => 'required|min:2',
            'category'       => 'required',
            'purchase_price' => 'required|numeric|min:0',
            'selling_price'  => 'required|numeric|min:0',
            'quantity'       => 'required|integer|min:0',
        ]);

        $data = $request->all();
        $data['status'] = $request->quantity > 0 ? 'in_stock' : 'out_of_stock';

        $item->update($data);
        return redirect()->route('items.index')
                         ->with('success', 'Item updated successfully!');
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index')
                         ->with('success', 'Item deleted successfully!');
    }
}