<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class RTController extends Controller
{
    public function show(Request $request)
    {
        $cari = $request->query('cari');
        if(!empty($cari)) {
            $dataTransaksi = Transaksi::sortable()
            ->where('transaksi.nm_pelanggan','like','%'.$cari.'%')
            ->orwhere('transaksi.jenis_barang','like','%'.$cari.'%')
            ->paginate(10)->onEachSide(1)->fragment('transaksi');
        } else {
            $dataTransaksi = Transaksi::sortable()->paginate(10)->onEachSide(1)->fragment('transaksi');
        }
        
        //$transaksi=Transaksi::all();
            return view('transaksi.riwayat')->with([
                'transaksi' => $dataTransaksi,
                'cari' => $cari,
        ]);
    }
    public function printpdf()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.cetak-transaksi', compact('transaksi'));
    }
}
