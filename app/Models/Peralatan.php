<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peralatan extends Model
{
    use HasFactory;
    protected $table = 'peralatan';
    protected $primarykey = "id";
    protected $fillable = [
        'nama_alat',
        'jumlah',
        'kondisi'
    ];
    public function RProduksi()
    {
        return $this->hasMany(Produksi::class);
    }
}
