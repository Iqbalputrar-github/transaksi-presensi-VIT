<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Transaksi extends Model
{
    use HasFactory;
    use Sortable;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public $table = 'transaksi';
    public $sortable = [
        'id',
        'nm_pelanggan',
        'tanggal',
        'alamat',
        'jenis_barang',
        'harga',
        'jumlah',
        'total_harga'
    ];

