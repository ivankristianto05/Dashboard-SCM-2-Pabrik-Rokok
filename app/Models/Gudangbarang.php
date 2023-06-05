<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudangbarang extends Model
{
    use HasFactory;
    protected $table = 'gudangbarang';
    protected $primarykey = "id";
    protected $fillable = [
        'id_barang',
        'jumlah_barang',
    ];
    public function RBarang()
    {
        return $this->belongsTo(Barang::class,'id_barang');
    }
}
