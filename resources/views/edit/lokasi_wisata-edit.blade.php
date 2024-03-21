@extends('layouts.master')
@section('title', 'SIG | Edit Lokasi Wisata')
@section('content')


    <div class="row p-4">
        <div class="col-sm-12">
            <div class="home-tab">
                <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                        <div class="row">

                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Edit Lokasi Wisata</h4>
                                        <hr>
                                        {{-- <div class="bd-example"> --}}
                                        <div class="row">
                                            <form action="/lokasi_wisata-update/{{ $lokasi_wisata->id }}" method="post"
                                                enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="nama" class="form-label">Nama</label>
                                                            <input type="text" placeholder="..."
                                                                class="form-control @error('nama') is-invalid @enderror"
                                                                id="nama" name="nama"
                                                                value="{{ $lokasi_wisata->nama }}"
                                                                aria-describedby="emailHelp">
                                                            @error('nama')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="kriteria_id" class="form-label">Kriteria</label>
                                                            <select
                                                                class="form-select @error('kriteria_id') is-invalid @enderror"
                                                                aria-label="Default select example" name="kriteria_id"
                                                                id="kriteria_id_penduduk">
                                                                <option selected disabled>Pilih Kriteria ...</option>
                                                                @foreach ($kriteria as $item_kriteria)
                                                                    <option value="{{ $item_kriteria->id }}"
                                                                        @if ($item_kriteria->id == $lokasi_wisata->kriteria_id) selected @endif>
                                                                        {{ $item_kriteria->nama }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('kriteria_id')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="kecamatan_id" class="form-label">Kecamatan</label>
                                                            <select
                                                                class="form-select @error('kecamatan_id') is-invalid @enderror"
                                                                aria-label="Default select example" name="kecamatan_id"
                                                                id="kecamatan_id_penduduk">
                                                                <option selected disabled>Pilih Kecamatan ...</option>
                                                                @foreach ($kecamatan as $item_kecamatan)
                                                                    <option value="{{ $item_kecamatan->id }}"
                                                                        @if ($item_kecamatan->id == $lokasi_wisata->kecamatan_id) selected @endif>
                                                                        {{ $item_kecamatan->nama }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('kecamatan_id')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="alamat" class="form-label">Alamat</label>
                                                            <input type="text" placeholder="..."
                                                                class="form-control @error('alamat') is-invalid @enderror"
                                                                id="alamat" name="alamat"
                                                                value="{{ $lokasi_wisata->alamat }}"
                                                                aria-describedby="emailHelp">
                                                            @error('alamat')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="lat" class="form-label">Latitude</label>
                                                            <input type="text" placeholder="..."
                                                                class="form-control @error('lat') is-invalid @enderror"
                                                                id="lat" name="lat"
                                                                value="{{ $lokasi_wisata->lat }}"
                                                                aria-describedby="emailHelp">
                                                            @error('lat')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="lng" class="form-label">Longitude</label>
                                                            <input type="text" placeholder="..."
                                                                class="form-control @error('lng') is-invalid @enderror"
                                                                id="lng" name="lng"
                                                                value="{{ $lokasi_wisata->lng }}"
                                                                aria-describedby="emailHelp">
                                                            @error('lng')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    @foreach ($fasilitas as $rowF)
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="fasilitas[{{ $rowF->id }}]"
                                                                    class="form-label">{{ $rowF->nama }}</label>
                                                                <select
                                                                    class="form-select @error('fasilitas[{{ $rowF->id }}]') is-invalid @enderror"
                                                                    aria-label="Default select example"
                                                                    name="fasilitas[{{ $rowF->id }}]" id="">
                                                                    @php
                                                                        $bool = false;
                                                                    @endphp
                                                                    @foreach ($lokasi_wisata->lokasi_wisata_fasilitas as $item_lokasi_wisata_fasilitas)
                                                                        @if ($item_lokasi_wisata_fasilitas->fasilitas_id == $rowF->id)
                                                                            @php
                                                                                $bool = true;
                                                                            @endphp
                                                                        @endif
                                                                    @endforeach
                                                                    <option value="1"
                                                                        @if ($bool == true) selected @endif>
                                                                        Ya
                                                                    </option>
                                                                    <option value="0"
                                                                        @if ($bool == false) selected @endif>
                                                                        Tidak
                                                                    </option>
                                                                </select>
                                                                @error('fasilitas[{{ $rowF->id }}]')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            @if (isset($lokasi_wisata->gambar))
                                                                <img src="{{ asset('storage/images/' . $lokasi_wisata->gambar) }}"
                                                                    alt="{{ $lokasi_wisata->gambar }}"
                                                                    style="width:100px; height:110px;"
                                                                    onclick="popUpFoto($lokasi_wisata->gambar)">
                                                                <br>
                                                            @endif
                                                            <label class="form-label" for="gambar">
                                                                @if (isset($lokasi_wisata->gambar))
                                                                    ({{ $lokasi_wisata->gambar }})
                                                                @else
                                                                    Gambar
                                                                @endif
                                                            </label>
                                                            <input type="file"
                                                                class="form-control @error('gambar') is-invalid @enderror"
                                                                id="gambar" name="gambar"
                                                                value="{{ $lokasi_wisata->gambar ?? '' }}">
                                                            @error('gambar')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="input-style-1">
                                                        <label>Deskripsi</label>
                                                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" placeholder="..." rows="5"
                                                            name="deskripsi">
@if ($lokasi_wisata->deskripsi !== null)
{{ $lokasi_wisata->deskripsi }}
@endif
</textarea>
                                                        @error('deskripsi')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                                                <a href="/lokasi_wisata" class="btn btn-outline-danger">Batal</a>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endsection
