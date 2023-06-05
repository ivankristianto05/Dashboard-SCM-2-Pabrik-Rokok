<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;
    protected $table = 'outlet';
    protected $primarykey = "id";
    protected $fillable = [
        'nama_outlet',
        'lokasi',
        'jumlah_stock',
        'batas_stock'
    ];
    public function RPengiriman()
    {
        return $this->hasMany(Pengiriman::class);
    }
}
