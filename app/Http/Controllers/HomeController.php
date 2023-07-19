<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Your logic for the home page goes here
        // For example, you can return a view or perform some other actions.
        return view('pages.home.index'); // Replace 'welcome' with the actual view you want to display.
    }
}
