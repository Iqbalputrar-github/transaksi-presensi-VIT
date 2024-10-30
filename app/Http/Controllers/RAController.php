<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;

class RAController extends Controller
{
    public function show(Request $request)
    {
        $cari = $request->query('cari');
        if(!empty($cari)) {
            $dataAbsensi = Absensi::sortable()
            ->where('absensi.nm_pegawai','like','%'.$cari.'%')
            ->orwhere('absensi.nm_pelanggan','like','%'.$cari.'%')
            ->paginate(10)->onEachSide(1)->fragment('absensi');
        } else {
            $dataAbsensi = Absensi::sortable()->paginate(10)->onEachSide(1)->fragment('absensi');
        }
            $absensi=Absensi::sortable()->paginate(2)->onEachSide(1)->fragment('absensi');
            return view('riwayatabsensi', compact('absensi')); 
            return view('absensi.riwayat')->with([
                'absensi' => $dataAbsensi,
                'cari' => $cari,
            ]);
    }

    public function print_pdf()
    {
        $absensi = Absensi::all();
        return view('absensi.cetak-absensi', compact('absensi'));
    }
}
