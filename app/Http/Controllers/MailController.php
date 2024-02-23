<?php

namespace App\Http\Controllers;

use App\Mail\AppointmentMail;
use Exception;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        // $data = [
        //     'subject' => 'testing head',
        //     'body' => 'testing body..!',
        // ];
        $name = 'sudip';
        try {
            Mail::to('sudiplun@gmail.com')->send(new AppointmentMail($name));

            return response()->json(['great check your mail']);
        } catch (Exception) {

            return response()->json(['sorry something went wrong']);
        }
    }
}
