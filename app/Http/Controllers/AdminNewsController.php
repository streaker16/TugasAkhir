<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;

class AdminNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = \DB::table('news')->get();

        return view('admin/news', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/newstambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('file');

        $news = 'img/news_gambar';

        $file->move($news,time().'_'.$file->getClientOriginalName());

        $gambar = time().'_'.$file->getClientOriginalName();
        $judul_berita = $request->judul_berita;
        $deskripsi = $request->deskripsi;

        News::create([
            'judul_berita' => $judul_berita,
            'deskripsi' => $deskripsi,
            'gambar' => $gambar,
            'user_id' => 1,
        ]);

        return redirect('admin/news')->with('sukses','Data Berhasul Dibuat!');
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
        $news = News::find($id);
        $news->delete();
        return redirect('admin/news')->with('sukses','Data Berhasil Dihapus!');
    }
}
