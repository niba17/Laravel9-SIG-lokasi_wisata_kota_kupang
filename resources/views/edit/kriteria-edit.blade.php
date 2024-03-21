@extends('layouts.master')
@section('title', 'SIG | Edit Kriteria')
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
                                        <h4 class="card-title">Edit Kriteria</h4>
                                        <hr>
                                        {{-- <div class="bd-example"> --}}
                                        <div class="row">
                                            <form action="/kriteria-update/{{ $kriteria->id }}" method="post"
                                                enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="nama" class="form-label">Nama</label>
                                                            <input type="text"
                                                                class="form-control @error('nama') is-invalid @enderror"
                                                                id="nama" name="nama" value="{{ $kriteria->nama }}"
                                                                placeholder="...">
                                                            @error('nama')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            @if (isset($kriteria->gambar) && $kriteria->gambar !== '')
                                                                <img src="{{ asset('storage/images/' . $kriteria->gambar) }}"
                                                                    alt="{{ $kriteria->gambar }}"
                                                                    style="width:100px; height:110px;"
                                                                    onclick="popUpFoto($kriteria->gambar)">
                                                                <br>
                                                            @endif
                                                            <label class="form-label" for="gambar">
                                                                @if (isset($kriteria->gambar) && $kriteria->gambar !== '')
                                                                    ({{ $kriteria->gambar }})
                                                                @else
                                                                    Gambar
                                                                @endif
                                                            </label>
                                                            <input type="file"
                                                                class="form-control @error('gambar') is-invalid @enderror"
                                                                id="gambar" name="gambar"
                                                                value="{{ $kriteria->gambar ?? '' }}">
                                                            @error('gambar')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            @if (isset($kriteria->marker) && $kriteria->marker !== '')
                                                                <img src="{{ asset('storage/images/' . $kriteria->marker) }}"
                                                                    alt="{{ $kriteria->marker }}"
                                                                    style="width:100px; height:110px;"
                                                                    onclick="popUpFoto($kriteria->marker)">
                                                                <br>
                                                            @endif
                                                            <label class="form-label" for="marker">
                                                                @if (isset($kriteria->marker) && $kriteria->marker !== '')
                                                                    ({{ $kriteria->marker }})
                                                                @else
                                                                    Marker
                                                                @endif
                                                            </label>
                                                            <input type="file"
                                                                class="form-control @error('marker') is-invalid @enderror"
                                                                id="marker" name="marker"
                                                                value="{{ $kriteria->marker ?? '' }}">
                                                            @error('marker')
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
                                                                @if ($kriteria->deskripsi !== '')
{{ $kriteria->deskripsi }}
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
                                                <a href="/kriteria" class="btn btn-outline-danger">Batal</a>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endsection
