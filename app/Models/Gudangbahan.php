<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudangbahan extends Model
{
    use HasFactory;
    protected $table = 'gudangbahan';
    protected $primarykey = "id";
    protected $fillable = [
        'id_bahan',
        'jumlah_bahan',
    ];
    public function RBahan()
    {
        return $this->belongsTo(Bahanbaku::class,'id_bahan');
    }
}
