<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinglePostController extends Controller
{
    function Page () {
        return view('pages.Single');
    }
}
