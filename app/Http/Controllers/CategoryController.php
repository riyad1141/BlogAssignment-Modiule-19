<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function Page () {
        return view('pages.Categories');
    }
}
