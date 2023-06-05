<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;
    protected $table = 'pengiriman';
    protected $primarykey = "id";
    protected $fillable = [
        'id_outlet',
        'id_barang',
        'biaya_pengiriman',
        'tanggal',
    ];
    public function ROutlet()
    {
        return $this->belongsTo(Outlet::class,'id_outlet');
    }
    public function RBarang()
    {
        return $this->belongsTo(Barang::class,'id_barang');
    }
}
