<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function showBlog()
    {
        return DB::table('blogs')->where('active', '1')->get();
    }
}
