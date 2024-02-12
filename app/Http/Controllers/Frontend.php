<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Frontend extends Controller
{
    //home page
    // public function index(SliderController $sliderController, CardviewController $cardviewController)
    // {
    //     $sliders = $sliderController->showSlider();
    //     $cards = $cardviewController->showCard();
    //
    //     return view('frontend.index', compact(['sliders', 'cards']));
    // }

    public function index()
    {
        $sliders = $this->showSlider(); // Call the showSlider function within the same controller
        $cards = $this->showCard(); // Call the showCard function within the same controller
        $whoWeAres = $this->whoWeAre();
        $services = $this->Service();
        $pricings = $this->pricing();

        return view('frontend.index', compact(['sliders', 'cards', 'whoWeAres', 'services', 'pricings']));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function blog(BlogController $blogController)
    {
        $blogs = $blogController->showBlog();

        return view('frontend.blog-single', compact('blogs'));
    }

    //sliders controller
    public function showSlider()
    {
        return DB::table('sliders')->get();
    }

    //Card controller
    public function showCard()
    {
        return DB::table('card_views')->get();
    }

    public function whoWeAre()
    {
        return DB::table('who_we_ares')->get();
    }

    public function Service()
    {
        return DB::table('services')->get();
    }

    public function pricing()
    {
        return DB::table('pricings')->get();
    }
}
