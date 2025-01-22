<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string',
            'year' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
        ]);

        // Simpan gambar ke storage/public
        $path = $request->file('image')->store('images', 'public');

        // Simpan data ke database
        Item::create([
            'name' => $request->name,
            'category' => $request->category,
            'year' => $request->year,
            'image' => $path, // Simpan path gambar
        ]);

        return redirect()->route('dashboard')->with('success', 'Album added successfully!');
    }
}
