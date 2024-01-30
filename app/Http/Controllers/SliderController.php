<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    public function showSlider()
    {
        return DB::table('sliders')->get();
    }
}
