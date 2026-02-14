<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about-us');
    }

    public function cloudsolution()
    {
        return view('pages.cloud-solution');
    }

    public function cybersecurity()
    {
        return view('pages.cyber-security');
    }

    public function datacenter()
    {
        return view('pages.data-center');
    }

    public function infrastructure()
    {
        return view('pages.infrastructure');
    }

    public function contact()
    {
        return view('pages.contact-us');
    }
}
