<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class AdminProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            $produks = \DB::table('produks')->orderBy('id','desc')->paginate(4);
        }else{
            $produks = \DB::table('produks')->where('user_id',\Session::get('id'))->orderBy('id','desc')->paginate(4);
        }

        return view('admin/produk', ['produks' => $produks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/produktambah');
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
        $file->move('img/produk',time().'_'.$file->getClientOriginalName());

        $gambar = time().'_'.$file->getClientOriginalName();
        $nama = $request->nama;
        $deskripsi = $request->deskripsi;
        $id = \Session::get('id');

        Produk::create([
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'gambar' => $gambar,
            'user_id' => $id,
        ]);

        return redirect('admin/produk')->with('sukses','Data Berhasil Dibuat!');
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
        $produks = Produk::find($id);

        return view('admin/produkedit', ['produks' => $produks]);
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
        $this->validate($request, [
            'file' => 'file|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $file = $request->file('file');
        //check, apakah file terisi?
        if (!empty($file)) {
            //apabila file terisi maka lakukan pemrosesan sesuai syntax dibawah, jika tidak lewati. Dan file lokal akan dikirim ke server (move)
            $file->move('img/produk',time().'_'.$file->getClientOriginalName());
            $gambar = time().'_'.$file->getClientOriginalName();
        }
        $nama = $request->nama;
        $deskripsi = $request->deskripsi;

        $produks = Produk::find($id);
        $produks->nama = $nama;
        $produks->deskripsi = $deskripsi;
        //Check, apakah file terisi?
        if (!empty($file)) {
            //apabila file terisi, maka lakukan update file, dari yang lama ke yang baru. Jika kosong lewati
            $produks->gambar = $gambar;
        }
        $produks->save();

        return redirect('admin/produk')->with('sukses','Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);
        unlink('img/produk/'.$produk->gambar);
        $produk->delete();

        return redirect('admin/produk')->with('sukses','Data Berhasil Dihapus!');
    }
}
