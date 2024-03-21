<?php

namespace App\Models;

use App\Models\LokasiWisata;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $table = 'kriteria';
    protected $guarded = ['id'];

    public function lokasi_wisata()
    {
        return $this->hasMany(LokasiWisata::class, 'kriteria_id', 'id');
    }

}