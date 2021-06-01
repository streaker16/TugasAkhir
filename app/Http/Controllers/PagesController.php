<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function about()
    {
<<<<<<< HEAD
        $kelompoks = \DB::table('kelompoks')
        ->select('kecamatans.nama AS nama_kecamatan', 'desas.nama AS nama_desa', 'kelompoks.id AS id_kelompok', 'kelompoks.nama_kelompok')
        ->join('desas', 'desas.id', '=', 'kelompoks.id_desa')
        ->join('kecamatans', 'kecamatans.id', '=', 'desas.id_kecamatan')
        ->orderby('nama_kelompok', 'asc')
        ->get();
        $provinsis = \DB::table('provinsis')->orderby('nama', 'asc')->get();
        $kabupatens = \DB::table('kabupatens')->get();
        $kecamatans = \DB::table('kecamatans')->get();
        $desas = \DB::table('desas')->get();

        return view('user/about', [
            'provinsis' => $provinsis,
            'kabupatens' => $kabupatens,
            'kecamatans' => $kecamatans,
            'desas'=> $desas,
            'kelompoks' => $kelompoks
        ]) ;
=======
        return view('user/about');
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
    }

    public function contact()
    {
<<<<<<< HEAD
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

        return view('user.contact',[
            'provinsis' => $provinsis,
            'kabupatens' => $kabupatens,
            'kecamatans' => $kecamatans,
            'desas'=> $desas,
            'kelompoks' => $kelompoks
        ]);
=======
        return view('user.contact');
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
    }

}
