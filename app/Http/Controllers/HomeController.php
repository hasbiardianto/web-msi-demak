<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $sliders = Data::all();
        $pengurus = Pengurus::all();

        return view('home.index', compact('sliders','pengurus'));        
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function tentangKamiDemak()
    {
        $sliders = Pengurus::all();
        return view('home.tentangKamiDemak', compact('sliders'));
    }
    public function berita()
    {
        $sliders = Data::all();
        return view('home.berita', compact('sliders'));
    }
    public function detail(Data $data)
    {
        return view('home.detail', compact('data'));
    }
}