<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    //
    public function index()
    {
        return view('main_page.main');
    }
    public function about()
    {
        return view('about_page.about');
    }
}
