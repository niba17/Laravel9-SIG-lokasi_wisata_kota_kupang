<?php

namespace App\Http\Controllers;

use PHPUnit\Util\Type;
use App\Models\LokasiWisata;
use App\Models\Kriteria;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PetaController extends Controller
{
    public function index(Type $var = null)
    {
        $lokasi_wisata = LokasiWisata::with(['kriteria', 'kecamatan', 'lokasi_wisata_fasilitas.fasilitas'])->get();

        $kriteria = Kriteria::with(['lokasi_wisata'])->get();
        $kecamatan = Kecamatan::with(['lokasi_wisata'])->get();

        return view('peta', ['lokasi_wisata' => $lokasi_wisata, 'kriteria' => $kriteria, 'kecamatan' => $kecamatan]);
    }
}
