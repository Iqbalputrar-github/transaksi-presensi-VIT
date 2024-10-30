<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('transaksi.create');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Transaksi::create([
            'nm_pelanggan' => $request->nm_pelanggan,
            'tanggal' => $request->tanggal,
            'alamat' => $request->alamat,
            'jenis_barang' => $request->jenis_barang,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'total_harga' => $request->total_harga,
            ]);
            return redirect()->route('home')->with(['success' => 'Data Berhasil Disimpan!']);
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
    public function edit(Transaksi $transaksi)
    {
        return view('transaksi.update', compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $transaksi->update([
            'nm_pelanggan' => $request->nm_pelanggan,
            'tanggal' => $request->tanggal,
            'alamat' => $request->alamat,
            'jenis_barang' => $request->jenis_barang,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'total_harga' => $request->total_harga,
            ]);
            return redirect()->route('home')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
        //redirect to index
        return redirect()->route('home')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
