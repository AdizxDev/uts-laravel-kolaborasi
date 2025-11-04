<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $nim = "2301010016"; // NIM home page

        $places = [
            ['img' => 'acropolis.jpg', 'name' => 'Acropolis, Yunani'],
            ['img' => 'shibuya.jpg', 'name' => 'Shibuya, Jepang'],
            ['img' => 'cappadocia.webp', 'name' => 'Cappadocia, Turki'],
            ['img' => 'giza.webp', 'name' => 'Giza, Mesir'],
            ['img' => 'garuda.jpg', 'name' => 'Garuda Wisnu Kencana, Bali'],
            ['img' => 'huayana.jpg', 'name' => 'Huayana, Peru'],
            ['img' => 'jumeirah.jpg', 'name' => 'Jumeirah, Abu Dhabi'],
            ['img' => 'newyork.jpg', 'name' => 'New York, Amerika'],
            ['img' => 'niagara.jpg', 'name' => 'Niagara, Kanada'],
        ];

        return view('home', compact('nim', 'places'));
    }
}
