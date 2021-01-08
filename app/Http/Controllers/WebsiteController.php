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
        return view('website.pastries.index');
    }

    public function cakes()
    {
        return view('website.cakes.index');
    }

    public function about()
    {
        return view('website.about.index');
    }

    public function pizza()
    {
        return view('website.pizza.index');
    }

    public function gallery()
    {
        return view('website.gallery.index');
    }

    public function contact()
    {
        return view('website.contact.index');
    }

    // 0px 25px 45px 0px rgba(0, 0, 0, 0.15)

    public function itemDetail()
    {
        return view('website.item');
    }

    public function cart()
    {
        return view('website.cart.index');
    }
}
