<?php

namespace App\Http\Controllers;

use PHPUnit\Util\Type;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FasilitasController extends Controller
{
    public function index(Type $var = null)
    {
        $fasilitas = Fasilitas::get();

        return view('fasilitas', ['fasilitas' => $fasilitas]);
    }

    public function create()
    {
        return view('add.fasilitas-add');
    }

    public function store(Request $request)
    {

        $rules = [
            'nama' => 'unique:fasilitas|max:100|required'
        ];

        $messages = [
            'nama.unique' => 'Nama fasilitas sudah ada!',
            'nama.max' => 'Nama fasilitas tidak boleh lebih dari :max karakter!',
            'nama.required' => 'Nama fasilitas wajib diisi!'
        ];

        $request->validate($rules, $messages);

        $arrayAdd = [];
        $arrayAdd = $request;

        $result = Fasilitas::create($arrayAdd->all());

        if ($result) {
            Session::flash('succMessage', 'Fasilitas berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Fasilitas gagal ditambahkan!');
        }

        return redirect('/fasilitas');
    }

    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        return view('edit.fasilitas-edit', ['fasilitas' => $fasilitas]);
    }

    public function update(Request $request, $id)
    {
        $rules = [];
        $messages = [];

        $fasilitas = Fasilitas::findOrFail($id);

        if ($request->nama != $fasilitas->nama) {
            $rules['nama'] = 'unique:fasilitas|max:100|required';

            $messages['nama.unique'] = 'Nama fasilitas sudah ada!';
            $messages['nama.max'] = 'Nama fasilitas tidak boleh lebih dari :max karakter!';
            $messages['nama.required'] = 'Nama fasilitas wajib diisi!';

        }

        $request->validate($rules, $messages);

        $arrayUp = [];
        $arrayUp = $request;

        $result = $fasilitas->update($arrayUp->all());

        if ($result) {
            Session::flash('succMessage', 'Fasilitas berhasil diubah!');
        } else {
            Session::flash('errMessage', 'Fasilitas gagal diubah!');
        }

        return redirect('/fasilitas');
    }

    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $result = $fasilitas->delete();

        if ($result) {
            Session::flash('succMessage', 'Fasilitas berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Fasilitas gagal dihapus!');
        }

        return redirect('/fasilitas');
    }

    public function request()
    {
        $fasilitas = Fasilitas::with(['fasilitas.fasilitas'])->get();

        return response()->json([$fasilitas]);
    }

}