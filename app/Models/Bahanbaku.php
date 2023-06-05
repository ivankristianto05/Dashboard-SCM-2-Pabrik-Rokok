<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahanbaku extends Model
{
    use HasFactory;
    protected $table = 'bahanbaku';
    protected $primarykey = "id";
    protected $fillable = [
        'nama_bahan',
        'baik_digunakan',
        'takaran'
    ];
    public function RBarang()
    {
        return $this->hasMany(Barang::class);
    }
    public function RGudangbahan()
    {
        return $this->hasMany(Gudangbahan::class);
    }

}