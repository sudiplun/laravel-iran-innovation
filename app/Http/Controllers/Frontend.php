<?php

namespace App\Http\Controllers;

class Frontend extends Controller
{
    public function index(SliderController $sliderController)
    {
        $sliders = $sliderController->showSlider();
        return view('frontend.index', compact('sliders'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function blog()
    {
        return view('frontend.blog-single');
    }
}
