<?php

namespace App\Http\Controllers;

use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function create()
    {
        return view('mediplus.index');
    }

    public function store()
    {
        $appointment = new Appointment;
        $appointment->name = request('name');
        $appointment->email = request('email');
        $appointment->phone = request('phone');
        $appointment->doctor = request('doctor');
        $appointment->date = request('date');
        $appointment->save();

        return redirect()->route('mediplus.index')->with('status', 'Appointment created successfully!');
    }
}
