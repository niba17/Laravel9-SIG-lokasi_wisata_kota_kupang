@extends('layouts.master')
@section('title', 'SIG | Edit Fasilitas')
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
                                        <h4 class="card-title">Edit Fasilitas</h4>
                                        <hr>
                                        {{-- <div class="bd-example"> --}}
                                        <div class="row">
                                            <form action="/fasilitas-update/{{ $fasilitas->id }}" method="post">
                                                @method('PUT')
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="nama" class="form-label">Nama</label>
                                                            <input type="text"
                                                                class="form-control @error('nama') is-invalid @enderror"
                                                                id="nama" name="nama" value="{{ $fasilitas->nama }}"
                                                                placeholder="...">
                                                            @error('nama')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                                                <a href="/fasilitas" class="btn btn-outline-danger">Batal</a>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endsection
