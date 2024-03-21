<?php

namespace App\Models;

use App\Models\LokasiWisata;
use App\Models\Fasilitas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LokasiWisataFasilitas extends Model
{
    use HasFactory;

    protected $table = 'lokasi_wisata_fasilitas';
    protected $guarded = ['id'];

    public function lokasi_wisata()
    {
        return $this->belongsTo(LokasiWisata::class);
    }
    
    public function fasilitas()
    {
        return $this->belongsTo(Fasilitas::class);
    }

}