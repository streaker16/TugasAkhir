<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $gallerys = \DB::table('gallerys')->orderBy('id', 'desc')->paginate(8);
        $provinsis = \DB::table('provinsis')->orderby('nama', 'asc')->get();
        $kabupatens = \DB::table('kabupatens')->get();
        $kecamatans = \DB::table('kecamatans')->get();
        $desas = \DB::table('desas')->get();
        $kelompoks = \DB::table('kelompoks')
        ->select('kecamatans.nama AS nama_kecamatan', 'desas.nama AS nama_desa', 'kelompoks.id AS id_kelompok', 'kelompoks.nama_kelompok')
        ->join('desas', 'desas.id', '=', 'kelompoks.id_desa')
        ->join('kecamatans', 'kecamatans.id', '=', 'desas.id_kecamatan')
        ->orderby('nama_kelompok', 'asc')
        ->get();

        return view('user/gallery', [
            'gallerys' => $gallerys,
            'provinsis' => $provinsis,
            'kabupatens' => $kabupatens,
            'kecamatans' => $kecamatans,
            'desas'=> $desas,
            'kelompoks' => $kelompoks
            ]);
=======
        $gallerys = \DB::table('gallerys')->get();

        return view('user/gallery', ['gallerys' => $gallerys]);
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
