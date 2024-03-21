@extends('layouts.master')
@section('title', 'SIG | Edit Akun')
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
                                        <h4 class="card-title">Edit Akun</h4>
                                        <hr>
                                        {{-- <p class="card-description">
                                                    Basic form layout
                                                </p> --}}
                                        <form class="forms-sample" action="/akun-update/{{ $akun->id }}" method="post">
                                            @method('PUT')
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="nama" class="form-label">Username</label>
                                                    <input type="text"
                                                        class="form-control @error('nama') is-invalid @enderror"
                                                        id="nama" name="nama" value="{{ $akun->nama }}">
                                                    @error('nama')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        id="password" name="password" placeholder="...">
                                                    @error('password')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="konfirmPassword" class="form-label">Konfirmasi
                                                        Password</label>
                                                    <input type="password"
                                                        class="form-control @error('konfirmPassword') is-invalid @enderror"
                                                        id="konfirmPassword" aria-describedby="passwordHelp"
                                                        name="konfirmPassword" placeholder="...">
                                                    @error('konfirmPassword')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary me-2 text-light">Simpan</button>
                                            <a href="/akun" class="btn btn-outline-danger">Batal</a>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
