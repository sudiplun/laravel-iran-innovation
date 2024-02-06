<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function create()
    {
        return view('mediplus.index');
    }

    public function store(Request $request)
    {
        $request->all();
    }
}
