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
<<<<<<< HEAD
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
            $news = \DB::table('news')->orderBy('id','desc')->paginate(3);
        }else{
            $news = \DB::table('news')->where('user_id',\Session::get('id'))->orderBy('id','desc')->paginate(3);
        }
=======
    public function index()
    {
        $news = \DB::table('news')->get();
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4

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
<<<<<<< HEAD
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $file = $request->file('file');
        $news = 'img/news_gambar';
        $file->move($news,time().'_'.$file->getClientOriginalName());
        $id = \Session::get('id');
=======
        $file = $request->file('file');

        $news = 'img/news_gambar';

        $file->move($news,time().'_'.$file->getClientOriginalName());
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4

        $gambar = time().'_'.$file->getClientOriginalName();
        $judul_berita = $request->judul_berita;
        $deskripsi = $request->deskripsi;

        News::create([
            'judul_berita' => $judul_berita,
            'deskripsi' => $deskripsi,
            'gambar' => $gambar,
<<<<<<< HEAD
            'user_id' => $id,
=======
            'user_id' => 1,
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
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
<<<<<<< HEAD
        $news = News::find($id);

        return view('admin/newsedit',['news' => $news]);
=======
        //
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
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
<<<<<<< HEAD
        $this->validate($request, [
            'file' => 'file|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $file = $request->file('file');
        //check apakah filenya terisi?
        if (!empty($file)) { //fungsi if bertujuan untuk melewati pemrosesan data, apabila datanya kosong
            //Apabila file terisi maka lakukan pemindahan file lokal ke server (move)
            $news = 'img/news_gambar';
            $file->move($news,time().'_'.$file->getClientOriginalName());
            $gambar = time().'_'.$file->getClientOriginalName();
        }
        $judul_berita = $request->judul_berita;
        $deskripsi = $request->deskripsi;

        $news = News::find($id);
        $news->judul_berita = $judul_berita;
        //Check apakah file terisi?
        if (!empty($file)) {
            //Apabila file terisi maka lakukan update file, dari yang lama ke yang baru
            $news->gambar = $gambar;
        }
        $news->deskripsi = $deskripsi;
        $news->save();

        return redirect('admin/news')->with('sukses','Data Berhasil Diupdate!');
=======
        //
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
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
<<<<<<< HEAD
        unlink('img/news_gambar/'.$news->gambar);
        $news->delete();

=======
        $news->delete();
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
        return redirect('admin/news')->with('sukses','Data Berhasil Dihapus!');
    }
}
