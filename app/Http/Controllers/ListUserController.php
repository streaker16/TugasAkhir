<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ListUserController extends Controller
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
        $id = \Session::get('id');
        $list_user = \DB::table('users')->orderBy('id','desc')->where('users.id', '!=', $id)->paginate(5);

        return view('admin/list_user', ['list_user' => $list_user]);
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
        $list_user = User::find($id);
        $kelompoks = \DB::table('kelompoks')->where('id', $list_user->id_kelompok)->first();
        $desas = \DB::table('desas')->where('id', $kelompoks->id_desa)->first();
        $kecamatans = \DB::table('kecamatans')->where('id', $desas->id_kecamatan)->first();
        $kabupatens = \DB::table('kabupatens')->where('id', $kecamatans->id_kabupaten)->first();
        $provinsis = \DB::table('provinsis')->where('id', $kabupatens->id_provinsi)->first();

        return view ('admin/edit_list_user', [
            'list_user' => $list_user,
            'kelompok' => $kelompoks,
            'desa' => $desas,
            'kecamatan' => $kecamatans,
            'kabupaten' => $kabupatens,
            'provinsi' => $provinsis
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $list_user = User::find($id);
        $list_user->status = 'sudah-aktif';
        $list_user->save();

        return redirect('admin/list_user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $list_user = User::find($id);
        $list_user->delete();
        return redirect('admin/list_user')->with('sukses','Data Berhasil Dihapus!');
    }
}
