<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontend extends Controller
{
  public function  index()
  {
    return view('frontend.index');
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
