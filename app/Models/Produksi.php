<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    use HasFactory;
    protected $table = 'produksi';
    protected $primarykey = "id";
    protected $fillable = [
        'id_barang',
        'id_alat',
        'id_pegawai',
        'jumlah_produksi',
        'biaya_produksi',
        'tanggal'
    ];
    public function RBarang()
    {
        return $this->belongsTo(Barang::class,'id_barang');
    }
    public function RPeralatan()
    {
        return $this->belongsTo(Peralatan::class,'id_alat');
    }
    public function Rpegawai()
    {
        return $this->belongsTo(Pegawai::class,'id_pegawai');
    }
    
}
