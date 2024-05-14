<?php

namespace App\Http\Controllers;
use App\Models\Data;

use Illuminate\Http\Request;

class SliderController extends Controller
{
        public function show($id)
    {
        $slider = Data::find($id);

        return view('show', compact('slider'));
    }

}
