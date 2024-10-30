<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Pelanggan extends Model
{
    use HasFactory;
    use Sortable;

    // Nama tabel yang sesuai
    protected $table = 'pelanggan';

    // Tentukan guarded atau fillable, sesuaikan kebutuhan Anda
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // Kolom yang dapat diurutkan
    public $sortable = [
        'id',
        'nm_pelanggan',
        'alamat',
        'kelurahan',
        'kecamatan',
        'no_telepon'
    ];
}
