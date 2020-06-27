<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function about()
    {
        return view('user/about');
    }

    public function contact()
    {
        return view('user.contact');
    }

}
