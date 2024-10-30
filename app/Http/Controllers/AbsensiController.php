<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Absensi;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('absensi.create'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('absensi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $this->validate($request, [
         //   'upload' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
       // ]);
        $fileName=$request->file->getClientOriginalName();
        //echo $fileName;
        $path=$request->file->store('public/images');
        if ($request ->file('file')->isValid()){
        //    $request->file->move(public_path('public/images'));
        // menyimpan data file yang diupload ke variabel $file
        //$upload = $request->file('upload');
 
       // $upload = time().$upload->getClientOriginalName();
 
        // isi dengan nama folder tempat kemana file diupload
        //$upload = 'upload';
            
        Absensi::create([
            'nm_pegawai' => $request->nm_pegawai,
            'nm_pelanggan' => $request->nm_pelanggan,
            'tanggal' => $request->tanggal,
            'alamat' => $request->alamat,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'file'=>pathinfo($path)['basename'],
            //'upload' => $request->upload,
           ]);
        return redirect()->route('home')->with(['success' => 'Data Berhasil Disimpan!']);
        } 
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
    public function edit(Absensi $absensi)
    {
        return view('absensi.update', compact('absensi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absensi $absensi)
    {
        $absensi->update([
        'nm_pegawai' => $request->nm_pegawai,
        'nm_pelanggan' => $request->nm_pelanggan,
        'tanggal' => $request->tanggal,
        'alamat' => $request->alamat,
        'kelurahan' => $request->kelurahan,
        'kecamatan' => $request->kecamatan,
        'file' => $request->file,
        ]);
        return redirect()->route('home')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensi $absensi)
    {
        $absensi->delete();
        //redirect to index
        return redirect()->route('home')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
