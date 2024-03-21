<?php

namespace App\Http\Controllers;

use PHPUnit\Util\Type;
use App\Models\LokasiWisata;
use App\Models\Kriteria;
use App\Models\Kecamatan;
use App\Models\Fasilitas;
use App\Models\LokasiWisataFasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LokasiWisataController extends Controller
{
    public function index(Type $var = null)
    {
        $lokasi_wisata = LokasiWisata::with(['kriteria', 'kecamatan', 'lokasi_wisata_fasilitas.fasilitas'])->get();

        return view('lokasi_wisata', ['lokasi_wisata' => $lokasi_wisata]);
    }

    public function create()
    {
        $kriteria = Kriteria::get();
        $kecamatan = Kecamatan::get();
        $fasilitas = Fasilitas::get();

        return view('add.lokasi_wisata-add', ['kriteria' => $kriteria, 'kecamatan' => $kecamatan, 'fasilitas' => $fasilitas]);
    }

    public function store(Request $request)
    {
        $rules = [];
        $messages = [];

        $rules['nama'] = 'unique:lokasi_wisata|max:50|required';
        $messages['nama.unique'] = 'Nama LokasiWisata sudah ada!';
        $messages['nama.max'] = 'Nama LokasiWisata tidak boleh lebih dari :max karakter!';
        $messages['nama.required'] = 'Nama LokasiWisata wajib diisi!';

        $rules['alamat'] = 'required';
        $messages['alamat.required'] = 'Alamat wajib diisi!';

        $rules['kriteria_id'] = 'required';
        $messages['kriteria_id.required'] = 'Kriteria wajib dipilih!';

        $rules['kecamatan_id'] = 'required';
        $messages['kecamatan_id.required'] = 'Kecamatan wajib dipilih!';

        $rules['lat'] = 'required';
        $messages['lat.required'] = 'Latitude wajib diisi!';

        $rules['lng'] = 'required';
        $messages['lng.required'] = 'Longitude wajib diisi!';

        $rules['deskripsi'] = 'max:1000';
        $messages['deskripsi.max'] = 'Deskripsi max adalah 1000 karakter!';

        $request->validate($rules, $messages);

        $arrayAdd = [];

        $arrayAdd = $request->all();

        if ($request->gambar != null) {
            $rules['gambar'] = 'mimes:jpg,jpeg|image|max:2048';
            $messages['gambar.mimes'] = 'Format file tidak sesuai, format yang diijinkan : jpg, jpeg';
            $messages['gambar.image'] = 'Format file tidak sesuai, format yang diijinkan : jpg, jpeg';
            $messages['gambar.max'] = 'File tidak boleh lebih dari :max kb!';

            $newName = '';
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $newName = auth()->id() . '_gambar_' . now()->timestamp . '.' . $extension;
            $request->file('gambar')->storeAs('images', $newName);

            $arrayAdd['gambar'] = $newName;
        }

        $result = LokasiWisata::create($arrayAdd);

        $lastRow = LokasiWisata::latest()->first();

        $result2 = [];

        if ($request->fasilitas != null) {
            foreach ($request->fasilitas as $key_fasilitas => $value_fasilitas) {
                if ($value_fasilitas == 1) {
                    $result2[] = LokasiWisataFasilitas::create([
                        'lokasi_wisata_id' => $lastRow->id,
                        'fasilitas_id' => $key_fasilitas,
                    ]);
                }
            }
         }

        if ($result) {
            Session::flash('succMessage', 'Lokasi Wisata berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Lokasi Wisata gagal ditambahkan!');
        }

        return redirect('/lokasi_wisata');
    }

    public function edit($id)
    {
        $lokasi_wisata = LokasiWisata::with(['kriteria', 'lokasi_wisata_fasilitas.fasilitas'])->findOrFail($id);
        $kriteria = Kriteria::get();
        $kecamatan = Kecamatan::get();
        $fasilitas = Fasilitas::get();

        return view('edit.lokasi_wisata-edit', ['lokasi_wisata' => $lokasi_wisata, 'kriteria' => $kriteria, 'kecamatan' => $kecamatan, 'fasilitas' => $fasilitas]);
    }

    public function update(Request $request, $id)
    {
        $rules = [];
        $messages = [];

        $lokasi_wisata = LokasiWisata::findOrFail($id);
        $lokasi_wisata_fasilitas = LokasiWisataFasilitas::get();

        if ($request->nama != $lokasi_wisata->nama) {
            $rules['nama'] = 'unique:lokasi_wisata|max:50|required';
            $messages['nama.unique'] = 'Nama LokasiWisata Sudah ada!';
            $messages['nama.required'] = 'Nama LokasiWisata wajib Diisi!';
            $messages['nama.max'] = 'Nama LokasiWisata tidak boleh lebih dari :max karakter!';
        }

        if ($request->alamat != $lokasi_wisata->alamat) {
            $rules['alamat'] = 'required';
            $messages['alamat.required'] = 'Alamat wajib diisi!';
        }

        if ($request->kriteria_id != $lokasi_wisata->kriteria_id) {
            $messages['kriteria_id.required'] = 'Kriteria wajib Diisi!';
        }

        if ($request->kecamatan_id != $lokasi_wisata->kecamatan_id) {
            $messages['kecamatan_id.required'] = 'Kecamatan wajib Diisi!';
        }

        if ($request->lat != $lokasi_wisata->lat) {
            $rules['lat'] = 'required';
            $messages['lat.required'] = 'Latitude wajib Diisi!';
        }

        if ($request->lng != $lokasi_wisata->lng) {
            $rules['lng'] = 'required';
            $messages['lng.required'] = 'Longitude wajib Diisi!';
        }

        if ($request->deskripsi != $lokasi_wisata->deskripsi) {
            $rules['deskripsi'] = 'max:1000';
            $messages['deskripsi.max'] = 'Deskripsi max adalah 1000 karakter!';
        }

        $arrayUp = [];

        $arrayUp = $request->all();

        if ($request->gambar != null && $request->gambar != $lokasi_wisata->gambar) {
            $rules['gambar'] = 'mimes:jpg,jpeg|image|max:2048';
            $messages['gambar.mimes'] = 'Format file tidak sesuai, format yang diijinkan : jpg, jpeg';
            $messages['gambar.image'] = 'Format file tidak sesuai, format yang diijinkan : jpg, jpeg';
            $messages['gambar.max'] = 'File tidak boleh lebih dari :max kb!';

            $newName = '';
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $newName = auth()->id() . '_gambar_' . now()->timestamp . '.' . $extension;
            $request->file('gambar')->storeAs('images', $newName);

            $arrayUp['gambar'] = $newName;
        }

        $request->validate($rules, $messages);

        $result = $lokasi_wisata->update($arrayUp);

        $result2 = [];

        if ($request->fasilitas != null){
            foreach ($request->fasilitas as $key_fasilitas => $value_fasilitas) {

                $bool = true;
                foreach ($lokasi_wisata_fasilitas as $key_lokasi_wisata_fasilitas => $value_lokasi_wisata_fasilitas) {

                    if ($value_lokasi_wisata_fasilitas->lokasi_wisata_id == $id) {

                        if ($key_fasilitas == $value_lokasi_wisata_fasilitas->fasilitas_id) {
                            if ($value_fasilitas == 0) {

                                $result2[] = LokasiWisataFasilitas::findOrFail($value_lokasi_wisata_fasilitas->id)->delete();
                            }

                            $bool = false;
                            break;
                        }
                    }
                }

                if ($bool == true) {

                    if ($value_fasilitas == 1) {

                        $result2[] = LokasiWisataFasilitas::create([
                            "lokasi_wisata_id" => $id,
                            "fasilitas_id" => $key_fasilitas,
                        ]);
                    }
                }
            }
        }

        if ($result) {
            Session::flash('succMessage', 'Lokasi Wisata berhasil diubah!');
        } else {
            Session::flash('errMessage', 'Lokasi Wisata gagal diubah!');
        }

        return redirect('/lokasi_wisata');
    }

    public function destroy($id)
    {
        $lokasi_wisata = LokasiWisata::findOrFail($id);
        $result = $lokasi_wisata->delete();

        if ($result) {
            Session::flash('succMessage', 'Lokasi Wisata berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Lokasi Wisata gagal dihapus!');
        }

        return redirect('/lokasi_wisata');
    }

    // public function request()
    // {
    //     $lokasi_wisata = LokasiWisata::get();

    //     return response()->json([$lokasi_wisata]);
    // }
}
