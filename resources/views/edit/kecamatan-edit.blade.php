@extends('layouts.master')
@section('title', 'SIG | Edit Kecamatan')
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
                                        <h4 class="card-title">Edit Kecamatan</h4>
                                        <hr>
                                        {{-- <div class="bd-example"> --}}
                                        <div class="row">
                                            <form action="/kecamatan-update/{{ $kecamatan->id }}" method="post" enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="nama" class="form-label">Nama</label>
                                                            <input type="text"
                                                                class="form-control @error('nama') is-invalid @enderror"
                                                                id="nama" name="nama" value="{{ $kecamatan->nama }}"
                                                                placeholder="...">
                                                            @error('nama')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="warna_fill" class="form-label">Warna Fill</label>
                                                                
                                                                <input type="color" class="form-control form-control-color w-100 @error('warna_fill') is-invalid @enderror" id="warna_fill" name="warna_fill" value="{{ $kecamatan->warna_fill }}">

                                                            @error('warna_fill')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="geojson">                                                                
                                                                @if (isset($kecamatan->geojson))
                                                                Geojson : ({{ $kecamatan->geojson }})
                                                                @else
                                                                    Geojson
                                                                @endif
                                                            </label>
                                                            <input type="file"
                                                                class="form-control @error('geojson') is-invalid @enderror"
                                                                id="geojson" name="geojson"
                                                                value="{{ $kecamatan->geojson ?? '' }}">
                                                            @error('geojson')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                                                <a href="/kecamatan" class="btn btn-outline-danger">Batal</a>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endsection
