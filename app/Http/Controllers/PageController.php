<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        $title = 'Home';

        return view('index', compact('title'));
    }

    public function home()
    {
        $title = 'Home';

        return view('home', compact('title'));
    }

    public function about()
    {
        $title = 'About';

        return view('about', compact('title'));
    }

    public function service()
    {
        $title = 'Service';

        return view('service', compact('title'));
    }

    public function contact()
    {
        $title = 'Contact';

        return view('contact', compact('title'));
    }

    public function partner()
    {
        $title = 'Partner';

        return view('partner', compact('title'));
    }

    public function sample()
    {
        $title = 'Sample';

        return view('sample', compact('title'));
    }
}