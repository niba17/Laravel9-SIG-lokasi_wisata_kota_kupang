<?php

namespace App\Models;

use App\Models\Kecamatan;
use App\Models\Kriteria;
use App\Models\LokasiWisataFasilitas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LokasiWisata extends Model
{
    use HasFactory;

    protected $table = 'lokasi_wisata';
    protected $guarded = ['id'];

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function lokasi_wisata_fasilitas()
    {
        return $this->hasMany(LokasiWisataFasilitas::class,'lokasi_wisata_id', 'id');
    }

}