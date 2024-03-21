<body>
    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
        <div class="navbar-logo">
            <a href="/home">
                {{-- <img src="{{ asset('template') }}/assets/images/logo/logo.svg" alt="logo" /> --}}
                <span class="text-dark fw-bold">SIG <span class="text-primary">|</span> LOKASI WISATA</span>
            </a>
        </div>
        <nav class="sidebar-nav">
            <ul>

                <li class="nav-item @if (Request::route()->getName() == 'home') active @endif">
                    <a href="/home">
                        <span class="icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.4166 7.33333C18.9383 7.33333 20.1666 8.56167 20.1666 10.0833V15.5833H16.4999V19.25H5.49992V15.5833H1.83325V10.0833C1.83325 8.56167 3.06159 7.33333 4.58325 7.33333H5.49992V2.75H16.4999V7.33333H17.4166ZM7.33325 4.58333V7.33333H14.6666V4.58333H7.33325ZM14.6666 17.4167V13.75H7.33325V17.4167H14.6666ZM16.4999 13.75H18.3333V10.0833C18.3333 9.57917 17.9208 9.16667 17.4166 9.16667H4.58325C4.07909 9.16667 3.66659 9.57917 3.66659 10.0833V13.75H5.49992V11.9167H16.4999V13.75ZM17.4166 10.5417C17.4166 11.0458 17.0041 11.4583 16.4999 11.4583C15.9958 11.4583 15.5833 11.0458 15.5833 10.5417C15.5833 10.0375 15.9958 9.625 16.4999 9.625C17.0041 9.625 17.4166 10.0375 17.4166 10.5417Z" />
                            </svg>
                        </span>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="nav-item nav-item-has-children">
                    <a href="#0" class="@if (Request::route()->getName() == 'akun' ||
                            Request::route()->getName() == 'akun-edit' ||
                            Request::route()->getName() == 'lokasi_wisata' ||
                            Request::route()->getName() == 'lokasi_wisata-add' ||
                            Request::route()->getName() == 'lokasi_wisata-edit'||
                                Request::route()->getName() == 'kriteria' ||
                                Request::route()->getName() == 'kriteria-add' ||
                                Request::route()->getName() == 'kriteria-edit'|| 
                                Request::route()->getName() == 'kecamatan' ||
                                Request::route()->getName() == 'kecamatan-add' ||
                                Request::route()->getName() == 'kecamatan-edit'|| 
                                Request::route()->getName() == 'fasilitas' ||
                                Request::route()->getName() == 'fasilitas-add' ||
                                Request::route()->getName() == 'fasilitas-edit') @else collapsed @endif"
                        data-bs-toggle="collapse" data-bs-target="#ddmenu_3" aria-controls="ddmenu_3"
                        aria-expanded="@if (
                                Request::route()->getName() == 'akun' ||
                                Request::route()->getName() == 'akun-edit' ||
                                Request::route()->getName() == 'lokasi_wisata' ||
                                Request::route()->getName() == 'lokasi_wisata-add' ||
                                Request::route()->getName() == 'lokasi_wisata-edit'||
                                Request::route()->getName() == 'kriteria' ||
                                Request::route()->getName() == 'kriteria-add' ||
                                Request::route()->getName() == 'kriteria-edit'|| 
                                Request::route()->getName() == 'kecamatan' ||
                                Request::route()->getName() == 'kecamatan-add' ||
                                Request::route()->getName() == 'kecamatan-edit'|| 
                                Request::route()->getName() == 'fasilitas' ||
                                Request::route()->getName() == 'fasilitas-add' ||
                                Request::route()->getName() == 'fasilitas-edit') true @else false @endif"
                        aria-label="Toggle navigation">
                        <span class="icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.9067 14.2908L15.2808 11.9167H6.41667V10.0833H15.2808L12.9067 7.70917L14.2083 6.41667L18.7917 11L14.2083 15.5833L12.9067 14.2908ZM17.4167 2.75C17.9029 2.75 18.3692 2.94315 18.713 3.28697C19.0568 3.63079 19.25 4.0971 19.25 4.58333V8.86417L17.4167 7.03083V4.58333H4.58333V17.4167H17.4167V14.9692L19.25 13.1358V17.4167C19.25 17.9029 19.0568 18.3692 18.713 18.713C18.3692 19.0568 17.9029 19.25 17.4167 19.25H4.58333C3.56583 19.25 2.75 18.425 2.75 17.4167V4.58333C2.75 3.56583 3.56583 2.75 4.58333 2.75H17.4167Z" />
                            </svg>
                        </span>
                        <span class="text">Data</span>
                    </a>
                    <ul id="ddmenu_3"
                        class="collapse dropdown-nav  @if (
                                Request::route()->getName() == 'akun' ||
                                Request::route()->getName() == 'akun-edit' ||
                                Request::route()->getName() == 'lokasi_wisata' ||
                                Request::route()->getName() == 'lokasi_wisata-add' ||
                                Request::route()->getName() == 'lokasi_wisata-edit' ||
                                Request::route()->getName() == 'kriteria' ||
                                Request::route()->getName() == 'kriteria-add' ||
                                Request::route()->getName() == 'kriteria-edit'|| 
                                Request::route()->getName() == 'kecamatan' ||
                                Request::route()->getName() == 'kecamatan-add' ||
                                Request::route()->getName() == 'kecamatan-edit'|| 
                                Request::route()->getName() == 'fasilitas' ||
                                Request::route()->getName() == 'fasilitas-add' ||
                                Request::route()->getName() == 'fasilitas-edit') collapse show @endif">
                        <li>
                            <a href="/akun" @if (Request::route()->getName() == 'akun' || Request::route()->getName() == 'akun-edit') class="active" @endif>
                                Akun </a>
                        </li>
                        <li>
                            <a href="/lokasi_wisata" @if (Request::route()->getName() == 'lokasi_wisata' ||
                                    Request::route()->getName() == 'lokasi_wisata-add' ||
                                    Request::route()->getName() == 'lokasi_wisata-edit') class="active" @endif>
                                Lokasi Wisata </a>
                        </li>
                        <li>
                            <a href="/kriteria" @if (Request::route()->getName() == 'kriteria' ||
                                    Request::route()->getName() == 'kriteria-add' ||
                                    Request::route()->getName() == 'kriteria-edit') class="active" @endif>
                                Kriteria </a>
                        </li>
                        <li>
                            <a href="/kecamatan" @if (Request::route()->getName() == 'kecamatan' ||
                                    Request::route()->getName() == 'kecamatan-add' ||
                                    Request::route()->getName() == 'kecamatan-edit') class="active" @endif>
                                Kecamatan </a>
                        </li>
                        <li>
                            <a href="/fasilitas" @if (Request::route()->getName() == 'fasilitas' ||
                                    Request::route()->getName() == 'fasilitas-add' ||
                                    Request::route()->getName() == 'fasilitas-edit') class="active" @endif>
                                Fasilitas </a>
                        </li>
                    </ul>
                </li>
                {{-- <span class="divider">
                    <hr />
                </span> --}}

                {{-- <span class="divider">
                    <hr />
                </span> --}}


            </ul>
        </nav>
    </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->
