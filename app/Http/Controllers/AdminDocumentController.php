<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;

class AdminDocumentController extends Controller
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
            $documents = \DB::table('documents')->orderBy('id','desc')->paginate(7);
        }else {
            $documents = \DB::table('documents')->where('user_id',\Session::get('id'))->orderBy('id','desc')->paginate(5);
        }

        return view('admin/document', ['documents' => $documents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/documenttambah');
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
            'file' => 'required|file|mimes:pdf|max:10000',
        ]);

        $file = $request->file('file');
        $size_file =  $file->getSize();
        $document = 'file_dokumen';
        $id = \Session::get('id');

        $file->move($document,time().'_'.$file->getClientOriginalName());
        $nama_file = time().'_'.$file->getClientOriginalName();

        Document::create([
            'nama_file' => $nama_file,
            'size_file' => $size_file,
            'user_id' => $id,
        ]);

        return redirect('admin/document')->with('sukses','Data Berhasil Dibuat!');
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
        $document = Document::find($id);
        unlink('file_dokumen/'.$document->nama_file);
        $document->delete();

        return redirect('admin/document')->with('sukses','Data Berhasil Dihapus!');
    }
}
