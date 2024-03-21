<?php

namespace App\Http\Controllers;

use App\Models\User;
use PHPUnit\Util\Type;
use App\Models\LokasiWisata;
use App\Models\Kriteria;
use App\Models\Fasilitas;
use App\Models\Kecamatan;

class HomeController extends Controller
{
    public function index(Type $var = null)
    {
        $akun = User::get();
        $lokasi_wisata = LokasiWisata::get();
        $kriteria = Kriteria::get();
        $kecamatan = Kecamatan::get();
        $fasilitas = Fasilitas::get();

        session()->forget(['succSAWMessage']);

        return view('home', ['akun' => $akun, 'lokasi_wisata' => $lokasi_wisata, 'kriteria' => $kriteria, 'kecamatan' => $kecamatan, 'fasilitas' => $fasilitas]);
    }
}
