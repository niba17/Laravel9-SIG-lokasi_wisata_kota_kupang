<?php

namespace App\Models;

use App\Models\LokasiWisata;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table = 'kecamatan';
    protected $guarded = ['id'];

    public function lokasi_wisata()
    {
        return $this->hasMany(LokasiWisata::class, 'kecamatan_id', 'id');
    }

}