<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = \DB::table('produks')->limit(4)->orderBy('id', 'desc')->get();
        $newproduks = \DB::table('produks')->orderBy('id', 'desc')->get();
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

        return view('user/produk', [
            'produks' => $produks,
            'newproduks' => $newproduks,
            'provinsis' => $provinsis,
            'kabupatens' => $kabupatens,
            'kecamatans' => $kecamatans,
            'desas'=> $desas,
            'kelompoks' => $kelompoks
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filter($id)
    {
        $provinsis = \DB::table('provinsis')->orderby('nama', 'asc')->get();
        $kabupatens = \DB::table('kabupatens')->get();
        $kecamatans = \DB::table('kecamatans')->get();
        $desas = \DB::table('desas')->get();
        $produks = \DB::table('produks')
        ->select('produks.nama','produks.gambar','produks.deskripsi','produks.id')
        ->join('users', 'users.id', '=', 'produks.user_id')
        ->join('kelompoks', 'kelompoks.id', '=', 'users.id_kelompok')
        ->join('desas', 'desas.id', '=', 'kelompoks.id_desa')
        ->join('kecamatans', 'kecamatans.id', '=', 'desas.id_kecamatan')
        ->join('kabupatens', 'kabupatens.id', '=', 'kecamatans.id_kabupaten')
        ->limit(4)
        ->orderBy('produks.id', 'desc')
        ->where('id_provinsi', $id)->get();
        $newproduks = \DB::table('produks')->orderBy('id', 'desc')->get();
        $kelompoks = \DB::table('kelompoks')
        ->select('kecamatans.nama AS nama_kecamatan', 'desas.nama AS nama_desa', 'kelompoks.id AS id_kelompok', 'kelompoks.nama_kelompok')
        ->join('desas', 'desas.id', '=', 'kelompoks.id_desa')
        ->join('kecamatans', 'kecamatans.id', '=', 'desas.id_kecamatan')
        ->orderby('nama_kelompok', 'asc')
        ->get();

        return view('user/produk', [
            'produks' => $produks,
            'newproduks' => $newproduks,
            'provinsis' => $provinsis,
            'kabupatens' => $kabupatens,
            'kecamatans' => $kecamatans,
            'desas'=> $desas,
            'kelompoks' => $kelompoks
            ]);
    }

    public function filterLainnya($id)
    {
        $provinsis = \DB::table('provinsis')->orderby('nama', 'asc')->get();
        $kabupatens = \DB::table('kabupatens')->get();
        $kecamatans = \DB::table('kecamatans')->get();
        $desas = \DB::table('desas')->get();
        $produks = \DB::table('produks')
        ->select('produks.nama','produks.gambar','produks.deskripsi','produks.id')
        ->join('users', 'users.id', '=', 'produks.user_id')
        ->join('kelompoks', 'kelompoks.id', '=', 'users.id_kelompok')
        ->join('desas', 'desas.id', '=', 'kelompoks.id_desa')
        ->join('kecamatans', 'kecamatans.id', '=', 'desas.id_kecamatan')
        ->join('kabupatens', 'kabupatens.id', '=', 'kecamatans.id_kabupaten')
        ->orderBy('produks.id', 'desc')
        ->where('id_provinsi', $id)
        ->paginate(8);
        $kelompoks = \DB::table('kelompoks')
        ->select('kecamatans.nama AS nama_kecamatan', 'desas.nama AS nama_desa', 'kelompoks.id AS id_kelompok', 'kelompoks.nama_kelompok')
        ->join('desas', 'desas.id', '=', 'kelompoks.id_desa')
        ->join('kecamatans', 'kecamatans.id', '=', 'desas.id_kecamatan')
        ->orderby('nama_kelompok', 'asc')
        ->get();

        return view('user/produklainnya', [
            'produks' => $produks,
            'provinsis' => $provinsis,
            'kabupatens' => $kabupatens,
            'kecamatans' => $kecamatans,
            'desas'=> $desas,
            'kelompoks' => $kelompoks
            ]);
    }

    public function lainnya()
    {
        $produks = \DB::table('produks')->orderBy('id', 'desc')->paginate(8);
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

        return view('user/produklainnya', [
            'produks' => $produks,
            'provinsis' => $provinsis,
            'kabupatens' => $kabupatens,
            'kecamatans' => $kecamatans,
            'desas'=> $desas,
            'kelompoks' => $kelompoks
        ]);
    }

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
        $produks = \DB::table('produks')
        ->select('produks.*', 'provinsis.id AS id_provinsi')
        ->join('users', 'users.id', '=', 'produks.user_id')
        ->join('kelompoks', 'kelompoks.id', '=', 'users.id_kelompok')
        ->join('desas', 'desas.id', '=', 'kelompoks.id_desa')
        ->join('kecamatans', 'kecamatans.id', '=', 'desas.id_kecamatan')
        ->join('kabupatens', 'kabupatens.id', '=', 'kecamatans.id_kabupaten')
        ->join('provinsis', 'provinsis.id', '=', 'kabupatens.id_provinsi')
        ->where('produks.id', $id)
        ->first();
        $produklainnya = \DB::table('produks')
        ->select('gambar', 'produks.nama AS produk_nama', 'produks.id AS produk_id', 'provinsis.nama AS provinsi_nama')
        ->join('users', 'users.id', '=', 'produks.user_id')
        ->join('kelompoks', 'kelompoks.id', '=', 'users.id_kelompok')
        ->join('desas', 'desas.id', '=', 'kelompoks.id_desa')
        ->join('kecamatans', 'kecamatans.id', '=', 'desas.id_kecamatan')
        ->join('kabupatens', 'kabupatens.id', '=', 'kecamatans.id_kabupaten')
        ->join('provinsis', 'provinsis.id', '=', 'kabupatens.id_provinsi')
        ->where('produks.id', '!=', $id)
        ->where('provinsis.id', '=', $produks->id_provinsi)
        ->limit(4)
        ->get();
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

        if($produks == null)
            abort(404);

        return view('user/detailproduk', [
            'produks' => $produks,
            'produklainnya' => $produklainnya,
            'provinsis' => $provinsis,
            'kabupatens' => $kabupatens,
            'kecamatans' => $kecamatans,
            'desas'=> $desas,
            'kelompoks' => $kelompoks
            ]);
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
