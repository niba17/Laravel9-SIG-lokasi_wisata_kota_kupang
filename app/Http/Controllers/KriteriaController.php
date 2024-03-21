<?php

namespace App\Http\Controllers;

use PHPUnit\Util\Type;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KriteriaController extends Controller
{
    public function index(Type $var = null)
    {
        $kriteria = Kriteria::get();

        // dd($kriteria);

        return view('kriteria', ['kriteria' => $kriteria]);
    }

    public function create()
    {
        return view('add.kriteria-add');
    }

    public function store(Request $request)
    {

        // dd($request->all());

        $rules = [
            'nama' => 'unique:kriteria|max:100|required',
            'deskripsi' => 'max:1000|required',
            'gambar' => 'mimes:jpg,jpeg|image|max:2048|required',
            'marker' => 'mimes:png|image|max:2048|required'
        ];

        $messages = [
            'nama.unique' => 'Nama kriteria sudah ada!',
            'nama.max' => 'Nama kriteria tidak boleh lebih dari :max karakter!',
            'nama.required' => 'Nama kriteria wajib diisi!',
            'deskripsi.max' => 'Deskripsi max adalah 1000 karakter!',
            'deskripsi.required' => 'Deskripsi wajib diisi!',
            'gambar.required' => 'Gambar wajib diisi!',
            'gambar.mimes' => 'Format file tidak sesuai, format yang diijinkan : jpg, jpeg',
            'gambar.image' => 'Format file tidak sesuai, format yang diijinkan : jpg, jpeg',
            'gambar.max' => 'File tidak boleh lebih dari :max kb!',
            'marker.required' => 'Marker wajib diisi!',
            'marker.mimes' => 'Format file tidak sesuai, format yang diijinkan : png',
            'marker.image' => 'Format file tidak sesuai, format yang diijinkan : png',
            'marker.max' => 'File tidak boleh lebih dari :max kb!'
        ];

        $request->validate($rules, $messages);

        $arrayAdd = [];
        $arrayAdd = $request->all();

        $newName = '';
        $extension = $request->file('gambar')->getClientOriginalExtension();
        $newName = $request->nama . '_kGambar_' . now()->timestamp . '.' . $extension;
        $request->file('gambar')->storeAs('images', $newName);

        $arrayAdd['gambar'] = $newName;

        $newNameMarker = '';
        $extensionMarker = $request->file('marker')->getClientOriginalExtension();
        $newNameMarker = $request->nama . '_kMarker_' . now()->timestamp . '.' . $extension;
        $request->file('marker')->storeAs('images', $newNameMarker);

        $arrayAdd['marker'] = $newNameMarker;

        // dd($arrayAdd);

        $result = Kriteria::create($arrayAdd);

        if ($result) {
            Session::flash('succMessage', 'Kriteria berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Kriteria gagal ditambahkan!');
        }

        return redirect('/kriteria');
    }

    public function edit($id)
    {
        $kriteria = Kriteria::findOrFail($id);

        return view('edit.kriteria-edit', ['kriteria' => $kriteria]);
    }

    public function update(Request $request, $id)
    {
        $rules = [];
        $messages = [];

        $kriteria = Kriteria::findOrFail($id);

        if ($request->nama != $kriteria->nama) {
            $rules['nama'] = 'unique:kriteria|max:100|required';

            $messages['nama.unique'] = 'Nama kriteria sudah ada!';
            $messages['nama.max'] = 'Nama kriteria tidak boleh lebih dari :max karakter!';
            $messages['nama.required'] = 'Nama kriteria wajib diisi!';
        }

        if ($request->deskripsi != $kriteria->deskripsi) {
            $rules['deskripsi'] = 'max:1000';
            $messages['deskripsi.max'] = 'Deskripsi max adalah 1000 karakter!';
        }

        $arrayUp = [];

        $arrayUp = $request->all();

        if ($request->gambar != null && $request->gambar != $kriteria->gambar) {
            $rules['gambar'] = 'mimes:jpg,jpeg|image|max:2048|required';
            $messages['gambar.mimes'] = 'Format file tidak sesuai, format yang diijinkan : jpg, jpeg';
            $messages['gambar.image'] = 'Format file tidak sesuai, format yang diijinkan : jpg, jpeg';
            $messages['gambar.max'] = 'File tidak boleh lebih dari :max kb!';
            $messages['gambar.required'] = 'Gambar wajib diisi!';

            $newName = '';
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $newName = $request->nama . '_kGambar_' . now()->timestamp . '.' . $extension;
            $request->file('gambar')->storeAs('images', $newName);

            $arrayUp['gambar'] = $newName;
        }

        if ($request->marker != null && $request->marker != $kriteria->marker) {
            $rules['marker'] = 'mimes:png|image|max:2048|required';
            $messages['marker.mimes'] = 'Format file tidak sesuai, format yang diijinkan : png';
            $messages['marker.image'] = 'Format file tidak sesuai, format yang diijinkan : png';
            $messages['marker.max'] = 'File tidak boleh lebih dari :max kb!';
            $messages['marker.required'] = 'Marker wajib diisi!';

            $newNameMarker = '';
            $extensionMarker = $request->file('marker')->getClientOriginalExtension();
            $newNameMarker = $request->nama . '_kMarker_' . now()->timestamp . '.' . $extensionMarker;
            $request->file('marker')->storeAs('images', $newNameMarker);

            $arrayUp['marker'] = $newNameMarker;
        }

        $request->validate($rules, $messages);

        // dd($arrayUp);

        $result = $kriteria->update($arrayUp);

        if ($result) {
            Session::flash('succMessage', 'Kriteria berhasil diubah!');
        } else {
            Session::flash('errMessage', 'Kriteria gagal diubah!');
        }

        return redirect('/kriteria');
    }

    public function destroy($id)
    {
        $kriteria = Kriteria::findOrFail($id);
        $result = $kriteria->delete();

        if ($result) {
            Session::flash('succMessage', 'Kriteria berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Kriteria gagal dihapus!');
        }

        return redirect('/kriteria');
    }

    public function request()
    {
        $kriteria = Kriteria::with(['kriteria.kriteria'])->get();

        return response()->json([$kriteria]);
    }
}
