@extends('layouts.master')
@section('title', 'SIG | Home')
@section('content')

    <div class="row p-4" id="home-card">
        <div class="col-xl-6 col-lg-6 col-sm-12">
            <a href="/akun" class="icon-card mb-30">
                <div class="icon purple">
                    <i class="fa-solid fa-user text-primary"></i>
                </div>
                <div class="content">
                    {{-- <h6 class="mb-10">Akun</h6> --}}
                    <h3 class="text-bold">Akun <i
                            class="fa-solid fa-chevron-right me-2 text-primary"></i><span>{{ count($akun) }}</span></h3>
                    <p class="text-sm text-success">
                        {{-- <i class="lni lni-arrow-up"></i> +2.00% --}}
                        {{-- <span class="text-gray">{{ count($akun) }}</span> --}}
                    </p>
                </div>
            </a>
            <!-- End Icon Cart -->
        </div>
        <!-- End Col -->
        <div class="col-xl-6 col-lg-6 col-sm-12">
            <a href="/lokasi_wisata" class="icon-card mb-30">
                <div class="icon purple">
                    <i class="fa-solid fa-mountain-sun text-primary"></i>
                </div>
                <div class="content">
                    {{-- <h6 class="mb-10">Akun</h6> --}}
                    <h3 class="text-bold">Lokasi Wisata <i
                            class="fa-solid fa-chevron-right me-2 text-primary"></i><span>{{ count($lokasi_wisata) }}<span
                                class="px-2"></span>
                    </h3>
                    <p class="text-sm text-success">
                        {{-- <i class="lni lni-arrow-up"></i> +2.00% --}}
                        {{-- <span class="text-gray">{{ count($akun) }}</span> --}}
                    </p>
                </div>
            </a>
            <!-- End Icon Cart -->
        </div>
        <div class="col-xl-6 col-lg-6 col-sm-12">
            <a href="/kriteria" class="icon-card mb-30">
                <div class="icon purple">
                    <i class="fa-solid fa-gears text-primary"></i>
                </div>
                <div class="content">
                    {{-- <h6 class="mb-10">Akun</h6> --}}
                    <h3 class="text-bold">Kriteria <i
                            class="fa-solid fa-chevron-right me-2 text-primary"></i><span>{{ count($kriteria) }}<span
                                class="px-2"></span>
                    </h3>
                    <p class="text-sm text-success">
                        {{-- <i class="lni lni-arrow-up"></i> +2.00% --}}
                        {{-- <span class="text-gray">{{ count($akun) }}</span> --}}
                    </p>
                </div>
            </a>
            <!-- End Icon Cart -->
        </div>
        <div class="col-xl-6 col-lg-6 col-sm-12">
            <a href="/kecamatan" class="icon-card mb-30">
                <div class="icon purple">
                    <i class="fa-solid fa-location-dot text-primary"></i>
                </div>
                <div class="content">
                    {{-- <h6 class="mb-10">Akun</h6> --}}
                    <h3 class="text-bold">Kecamatan <i
                            class="fa-solid fa-chevron-right me-2 text-primary"></i><span>{{ count($kecamatan) }}<span
                                class="px-2"></span>
                    </h3>
                    <p class="text-sm text-success">
                        {{-- <i class="lni lni-arrow-up"></i> +2.00% --}}
                        {{-- <span class="text-gray">{{ count($akun) }}</span> --}}
                    </p>
                </div>
            </a>
            <!-- End Icon Cart -->
        </div>
        <div class="col-xl-6 col-lg-6 col-sm-12">
            <a href="/fasilitas" class="icon-card mb-30">
                <div class="icon purple">
                    <i class="fa-solid fa-plus text-primary"></i>
                </div>
                <div class="content">
                    {{-- <h6 class="mb-10">Akun</h6> --}}
                    <h3 class="text-bold">Fasilitas <i class="fa-solid fa-chevron-right me-2 text-primary"></i>
                        <span>{{ count($fasilitas) }}<span class="px-2"></span>
                    </h3>
                    <p class="text-sm text-success">
                        {{-- <i class="lni lni-arrow-up"></i> +2.00% --}}
                        {{-- <span class="text-gray">{{ count($akun) }}</span> --}}
                    </p>
                </div>
            </a>
            <!-- End Icon Cart -->
        </div>
    </div>

@endsection
