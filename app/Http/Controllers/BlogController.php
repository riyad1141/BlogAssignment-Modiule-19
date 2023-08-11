<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    function Page () {
        return view('pages.Home');
    }

    function heroData () {
        return DB::table('heros')->get();
    }
}
