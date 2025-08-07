<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('pages.about'); // Adjust the path if your Blade file is elsewhere
    }
    public function whatWeDo()
{
    return view('about.what-we-do'); // adjust view path if needed
}

}
