<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
Use App\News;
Use App\Produk;
Use App\Gallery;
Use App\Document;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            $uInfo = \Session::get('id');
            if(!isset($uInfo) && empty($uInfo)){
                return redirect('/');
            }
            return $next($request);
            });
    }

    public function index()
    {
        if (\Session::get('role') == 'admin') {
            $user = User::count();
            $news = News::count();
            $produks = Produk::count();
            $documents = Document::count();
            $gallerys = Gallery::count();
        }else{
            $user = User::where('id',\Session::get('id'))->count();
            $news = News::where('user_id',\Session::get('id'))->count();
            $produks = Produk::where('user_id',\Session::get('id'))->count();
            $documents = Document::where('user_id',\Session::get('id'))->count();
            $gallerys = Gallery::where('user_id',\Session::get('id'))->count();
        }

        return view('admin/dashboard', [
            'users' => $user,
            'news' => $news,
            'produks' => $produks,
            'documents' => $documents,
            'gallerys' => $gallerys
        ]);
    }
}
