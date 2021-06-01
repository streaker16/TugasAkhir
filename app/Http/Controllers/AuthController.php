<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        # code...
    }

    public function postlogin(Request $request)
    {
        $check = User::where('email',$request->email)->first();
        if($check){
            if ($check->status == 'belum-aktif') {
                \Session::flash('alert-class', 'alert-danger');
                \Session::flash('message', 'Maaf Akun Anda Belum sudah-aktif.<br> Harap Menunggu 1x24 Jam Lagi.');
                //apabila Akun Belum Diaktifkan Admin
                return redirect()->back();
            }
            //Apabila email sudah ditemukan
            if (Hash::check($request->password, $check->password))
            {
                $request->session()->put('nama', $check->nama);
                $request->session()->put('id', $check->id);
                $request->session()->put('role', $check->role);
                //apabila email dan passwrodnya benar
                return redirect('admin');
            }else{
                \Session::flash('alert-class', 'alert-danger');
                \Session::flash('message', 'Maaf email atau password anda salah.');
                //apabila email benar dan password salah
                return redirect()->back();
            }
        }else{
            \Session::flash('alert-class', 'alert-danger');
            \Session::flash('message', 'Maaf email atau password anda salah.');
            //apabila email tidak ditemukan
            return redirect()->back();
        }
    }

    public function postregister(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:3',
            'nim' => 'required|min:18|unique:users',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'nama_kelompok' => 'unique:kelompoks',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);
        if ($request->list_kelompok == '+') {
            //Apabila memasukkan nama kelompok sendiri

            $kelompoks = array(
                'nama_kelompok' => $request->nama_kelompok,
                'id_desa' => $request->desa,
            );
            $id = \DB::table('kelompoks')->insertGetId($kelompoks);

            User::create([
                'id_kelompok' => $id,
                'nama' => $request->nama,
                'nim' => $request->nim,
                'angkatan_kkn' => $request->angkatan_kkn,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        }else{
            //Apabila memilih kelompok dari List Kelompok didalam Database
            User::create([
                'id_kelompok' => $request->list_kelompok,
                'nama' => $request->nama,
                'nim' => $request->nim,
                'angkatan_kkn' => $request->angkatan_kkn,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        }

        return redirect()->back();
    }

    public function getKotaByProvinsi($provinsiId)
	{
		$data = \DB::table('kabupatens')->where('id_provinsi',$provinsiId)->orderby('nama', 'asc')->get();

		return \Response::json($data);
	}

    public function getKotaByKabupaten($kabupatenId)
	{
		$data = \DB::table('kecamatans')->where('id_kabupaten',$kabupatenId)->orderby('nama', 'asc')->get();

		return \Response::json($data);
	}

    public function getKotaByKecamatan($kecamatanId)
	{
		$data = \DB::table('desas')->where('id_kecamatan',$kecamatanId)->orderby('nama', 'asc')->get();

		return \Response::json($data);
	}

    public function logout(Request $request){
        // $this->guard()->logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/');
    }

}
