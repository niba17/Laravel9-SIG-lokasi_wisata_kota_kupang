<?php

namespace App\Http\Controllers;

use PHPUnit\Util\Type;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KecamatanController extends Controller
{
    public function index(Type $var = null)
    {
        $kecamatan = Kecamatan::get();

        return view('kecamatan', ['kecamatan' => $kecamatan]);
    }

    public function create()
    {
        return view('add.kecamatan-add');
    }

    public function store(Request $request)
    {

        $rules = [
            'nama' => 'unique:kecamatan|max:100|required',
            'warna_fill' => 'max:100|required'
        ];

        $arrayAdd = [];
        $arrayAdd = $request->all();

        if ($request->geojson != null) {
            $rules['geojson'] = 'file|max:2048';
            $messages['geojson.file'] = 'Format file tidak sesuai, format yang diijinkan : geojson';
            $messages['geojson.mimes'] = 'Format file tidak sesuai, format yang diijinkan : geojson';
            $messages['geojson.max'] = 'File tidak boleh lebih dari :max kb!';
            $messages['geojson.required'] = 'Geojson harus diisi!';

            $newName = '';
            $extension = $request->file('geojson')->getClientOriginalExtension();
            $newName = $request->nama . '_geojson_' . now()->timestamp . '.' . $extension;

            $request->file('geojson')->storeAs('file', $newName);
            $arrayAdd['geojson'] = $newName;
        }

        $messages = [
            'nama.unique' => 'Nama kecamatan sudah ada!',
            'nama.max' => 'Nama kecamatan tidak boleh lebih dari :max karakter!',
            'nama.required' => 'Nama kecamatan wajib diisi!',
            'warna_fill.max' => 'Warna fill tidak boleh lebih dari :max karakter!',
            'warna_fill.required' => 'Warna fill wajib diisi!'
        ];

        $request->validate($rules, $messages);

        $result = Kecamatan::create($arrayAdd);

        if ($result) {
            Session::flash('succMessage', 'Kecamatan berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Kecamatan gagal ditambahkan!');
        }

        return redirect('/kecamatan');
    }

    public function edit($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);

        return view('edit.kecamatan-edit', ['kecamatan' => $kecamatan]);
    }

    public function update(Request $request, $id)
    {
        $rules = [];
        $messages = [];

        $kecamatan = Kecamatan::findOrFail($id);

        if ($request->nama != $kecamatan->nama) {
            $rules['nama'] = 'unique:kecamatan|max:100|required';

            $messages['nama.unique'] = 'Nama kecamatan sudah ada!';
            $messages['nama.max'] = 'Nama kecamatan tidak boleh lebih dari :max karakter!';
            $messages['nama.required'] = 'Nama kecamatan wajib diisi!';
        }

        $arrayUp = [];

        $arrayUp = $request->all();

        if ($request->geojson != null && $request->geojson != $kecamatan->geojson) {
            $rules['geojson'] = 'file|max:2048';
            $messages['geojson.mimes'] = 'Format file tidak sesuai, format yang diijinkan : geojson';
            $messages['geojson.image'] = 'Format file tidak sesuai, format yang diijinkan : geojson';
            $messages['geojson.max'] = 'File tidak boleh lebih dari :max kb!';
            $messages['geojson.required'] = 'Geojson harus diisi!';

            $newName = '';
            $extension = $request->file('geojson')->getClientOriginalExtension();
            $newName = $request->nama . '_geojson_' . now()->timestamp . '.' . $extension;
            $request->file('geojson')->storeAs('file', $newName);

            $arrayUp['geojson'] = $newName;
        } else {
            unset($arrayUp['geojson']);
        }

        $request->validate($rules, $messages);

        // dd($arrayUp);

        $result = $kecamatan->update($arrayUp);

        if ($result) {
            Session::flash('succMessage', 'Kecamatan berhasil diubah!');
        } else {
            Session::flash('errMessage', 'Kecamatan gagal diubah!');
        }

        return redirect('/kecamatan');
    }

    public function destroy($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        $result = $kecamatan->delete();

        if ($result) {
            Session::flash('succMessage', 'Kecamatan berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Kecamatan gagal dihapus!');
        }

        return redirect('/kecamatan');
    }

    public function request()
    {
        $kecamatan = Kecamatan::with(['lokasi_wisata.kriteria', 'lokasi_wisata.kecamatan', 'lokasi_wisata.lokasi_wisata_fasilitas.fasilitas'])->get();

        return response()->json([$kecamatan]);
    }
}
