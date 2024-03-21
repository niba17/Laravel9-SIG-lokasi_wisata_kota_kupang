@extends('layouts.master')
@section('title', 'SIG | Akun')
@section('content')

    <div class="row p-4">
        @foreach ($akun as $item_akun)
            <div class="col-md-4">
                {{-- <h5 class="card-title fw-semibold mb-4">Card</h5> --}}
                <div class="card">
                    {{-- <img src="../assets/images/products/s4.jpg" class="card-img-top" alt="..."> --}}
                    <i class="fa-solid fa-user fa-5x mt-5 mx-auto" style="color:#174FEB;"></i>
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $item_akun->nama }}</h5>
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                the
                card's content.</p> --}}
                        <hr>
                        <div class="d-flex justify-content-between px-5">
                            <a href="/akun-edit/{{ $item_akun->id }}"
                                class="btn btn-primary  @if ($current_id != $item_akun->id) disabled @endif"><i
                                    class="fa-solid fa-pen"></i></a>
                            <button onclick="hapus('{{ $item_akun->id }}','akun')" class="btn btn-outline-danger"><i
                                    class="fa-solid fa-trash"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
