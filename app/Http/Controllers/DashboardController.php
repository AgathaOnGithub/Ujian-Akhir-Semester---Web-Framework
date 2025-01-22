<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $items = Item::paginate(10);
        return view('dashboard', compact('items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'year' => 'required|integer',
        ]);

        Item::create($validated);
        return redirect()->route('dashboard')->with('success', 'Item created successfully!');
    }

    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, Item $item)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'year' => 'required|integer',
        ]);

        $item->update($validated);
        return redirect()->route('dashboard')->with('success', 'Item updated successfully!');
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('dashboard')->with('success', 'Item deleted successfully!');
    }
}
