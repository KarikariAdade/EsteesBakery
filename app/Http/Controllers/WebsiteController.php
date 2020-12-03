<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
    	return view('website.index');
    }

    public function pastries()
    {
        return view('website.pastries');
    }

    public function cakes()
    {
        return view('website.cakes');
    }

    public function about()
    {
        return view('website.about');
    }

    public function pizza()
    {
        return view('website.pizza');
    }
}
