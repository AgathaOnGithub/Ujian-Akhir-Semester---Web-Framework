<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    public function run()
    {
        $items = [
            
            ['name' => 'The Stone Roses - The Stone Roses', 'category' => 'Vinyl', 'image' => 'vinyl/stone_roses.jpg', 'year' => 1989],
            ['name' => 'Frank Ocean - Blonde', 'category' => 'Vinyl', 'image' => 'vinyl/blonde.jpg', 'year' => 2017],
            ['name' => 'Madvillain - Madvillainy', 'category' => 'Vinyl', 'image' => 'vinyl/madvillainy.jpg', 'year' => 2004],
            ['name' => 'Death Grips - The Money Store', 'category' => 'Vinyl', 'image' => 'vinyl/money_store.jpg', 'year' => 2012],
            ['name' => 'Kanye West - Graduation', 'category' => 'Vinyl', 'image' => 'vinyl/graduation.jpg', 'year' => 2007],
            ['name' => 'Nothing but Thieves - Broken Machine', 'category' => 'Vinyl', 'image' => 'vinyl/broken_machine.jpg', 'year' => 2017],
            ['name' => 'Charli XCX - Brat', 'category' => 'Vinyl', 'image' => 'vinyl/brat.jpg', 'year' => 2024],
            ['name' => 'Travis Scott - Days Before Rodeo (Reissue)', 'category' => 'Vinyl', 'image' => 'vinyl/days_before_rodeo.jpg', 'year' => 2024],


            ['name' => 'Blur - Leisure', 'category' => 'CD', 'image' => 'cd/leisure.jpg', 'year' => 1991],
            ['name' => 'Eir Aoi - Blau', 'category' => 'CD', 'image' => 'cd/blau.jpg', 'year' => 2013],
            ['name' => 'Soundgarden - Badmotorfinger', 'category' => 'CD', 'image' => 'cd/badmotorfinger.jpg', 'year' => 1991],
            ['name' => 'Ride - Nowhere', 'category' => 'CD', 'image' => 'cd/nowhere.jpg', 'year' => 1991],
            ['name' => 'My Bloody Valentine - Loveless', 'category' => 'CD', 'image' => 'cd/loveless.jpg', 'year' => 1991],

            
            ['name' => 'Nirvana - Nevermind', 'category' => 'CD', 'image' => 'cd/nevermind.jpg', 'year' => 1991],
            ['name' => 'Arctic Monkeys - AM', 'category' => 'CD', 'image' => 'cd/am.jpg', 'year' => 2015],
            ['name' => 'Tyler, The Creator - CHROMAKOPIA', 'category' => 'CD', 'image' => 'cd/chromakopia.jpg', 'year' => 2024],

            
            ['name' => 'Coolio - Gangsta Paradise', 'category' => 'Cassette', 'image' => 'cassette/gangsta_paradise.jpg', 'year' => 1995],
            ['name' => 'Utada Hikaru - First Love', 'category' => 'Cassette', 'image' => 'cassette/first_love.jpg', 'year' => 1999],
            ['name' => 'Dewa - Bintang Lima', 'category' => 'Cassette', 'image' => 'cassette/bintang_lima.jpg', 'year' => 2000],
            ['name' => 'Outkast - Stankonia', 'category' => 'Cassette', 'image' => 'cassette/stankonia.jpg', 'year' => 2000],
            ['name' => 'Radiohead - Ok Computer', 'category' => 'Cassette', 'image' => 'cassette/ok_computer.jpg', 'year' => 1997],

            
            ['name' => 'Beastie Boys - Check Your Head', 'category' => 'Cassette', 'image' => 'cassette/check_your_head.jpg', 'year' => 1992],
            ['name' => 'Sheila on 7 - 07 Des', 'category' => 'Cassette', 'image' => 'cassette/07_des.jpg', 'year' => 2002],
            ['name' => 'Sade - Love Deluxe', 'category' => 'Cassette', 'image' => 'cassette/love_deluxe.jpg', 'year' => 1992],
        ];

        foreach ($items as $item) {
            Item::create($item);
        }
    }
}
