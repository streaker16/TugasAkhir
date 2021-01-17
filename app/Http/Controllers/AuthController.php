<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        # code...
    }

    public function postlogin(Request $request)
    {
        dd($request->all());
    }
}
