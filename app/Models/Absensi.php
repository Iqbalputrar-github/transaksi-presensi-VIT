<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Absensi extends Model
{
    use HasFactory;
    use Sortable;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    
     //sort table
    public $table = 'absensi';
    public $sortable = [
        'id',
        'nm_pegawai',
        'nm_pelanggan',
        'tanggal',
        'alamat',
        'kelurahan',
        'kecamatan',
        'file'
    ];
}
