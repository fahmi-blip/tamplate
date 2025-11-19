<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display dashboard page
     */
    public function dashboard()
    {
        return view('pages.dashboard');
    }
    
    /**
     * Display blank page
     */
    public function blankPage()
    {
        return view('pages.blank');
    }
}