<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluar extends Model
{
    use HasFactory;
    protected $table = 'keluar';
    protected $guarded = [];

    public function barang(){
        return $this->belongsTo(Barang::class, 'id_barang');
    }
}
