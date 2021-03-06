<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gallery;

class AdminGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // supaya tidak bisa diakses tanpa login
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
            $gallerys = \DB::table('gallerys')->orderBy('id','desc')->paginate(7);
        }else {
            $gallerys = \DB::table('gallerys')->where('user_id',\Session::get('id'))->orderBy('id','desc')->paginate(5);
        }
        return view('admin/gallery', ['gallerys' => $gallerys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/gallerytambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);


        $file = $request->file('file');
        $gallery = 'img/gallery_gambar';
        $id = \Session::get('id');

        $file->move($gallery,time().'_'.$file->getClientOriginalName());
        $nama_file = time().'_'.$file->getClientOriginalName();

        Gallery::create([
            'gambar' => $nama_file,
            'user_id' => $id,
        ]);

        return redirect('admin/gallery')->with('sukses','Data Berhasil Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        unlink('img/gallery_gambar/'.$gallery->gambar);
        $gallery->delete();

        return redirect('admin/gallery')->with('sukses','Data Berhasil Dihapus!');
    }
}
