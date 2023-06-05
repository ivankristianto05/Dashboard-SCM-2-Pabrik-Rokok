<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $primarykey = "id";
    protected $fillable = [
        'nama_barang',
        'kategori',
        'id_bahan',
    ];
    public function RBahan()
    {
        return $this->belongsTo(Bahanbaku::class,'id_bahan');
    }
    public function RGudangbarang()
    {
        return $this->hasMany(Gudangbarang::class);
    }
    public function RProduksi()
    {
        return $this->hasMany(Produksi::class);
    }
}
