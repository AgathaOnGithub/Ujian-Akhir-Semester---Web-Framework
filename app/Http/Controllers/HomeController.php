<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil semua item
        $items = Item::all();

        // Mengambil item terbaik
        $bestSellers = Item::whereIn('name', [
            'Nothing but Thieves - Broken Machine',
            'Charli XCX - Brat',
            'Nirvana - Nevermind',
            'Arctic Monkeys - AM'
        ])->get();

        return view('home', compact('items', 'bestSellers'));
    }
}
