<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage()
    {
        return view('frontend.homepage');
    }
}
