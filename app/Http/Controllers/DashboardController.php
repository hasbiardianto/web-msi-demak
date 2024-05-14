<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Data;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function Dashboard()
    {
        $sliders = Kontak::all();
        $data = Data::all();
        $pengurus = Pengurus::all();
        return view('dashboard', compact('sliders','data','pengurus'));
    }
    //
}
