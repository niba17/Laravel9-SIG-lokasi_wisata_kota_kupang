<?php

namespace App\Http\Controllers;

use PHPUnit\Util\Type;
use App\Models\Kriteria;

class LandController extends Controller
{
    public function index(Type $var = null)
    {
        $kriteria = Kriteria::get();

        return view('landing', ['kriteria' => $kriteria]);
    }
}
