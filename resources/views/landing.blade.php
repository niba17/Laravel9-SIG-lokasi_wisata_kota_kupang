@extends('layouts.masterLanding')
@section('title', 'SIG | Landing')
@section('content')

    <body>

        <!-- ======= Header ======= -->
        {{-- <section id="topbar" class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a
                            href="mailto:contact@example.com">contact@example.com</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
                </div>
            </div>
        </section> --}}
        <!-- End Top Bar -->

        <header id="header" class="header d-flex align-items-center">

            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
                <a href="/" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="{{ asset('landing') }}/assets/img/logo.png" alt=""> -->
                    <h1>SIG <span>|</span> WISATA ROTE NDAO</h1>
                </a>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="#hero">Home</a></li>
                        <li><a href="#about">Latar Belakang</a></li>
                        {{-- <li><a href="#services">Services</a></li> --}}
                        {{-- <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li class="dropdown"><a href="#"><span>Drop Down</span> <i
                                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Drop Down 1</a></li>
                                <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                                    <ul>
                                        <li><a href="#">Deep Drop Down 1</a></li>
                                        <li><a href="#">Deep Drop Down 2</a></li>
                                        <li><a href="#">Deep Drop Down 3</a></li>
                                        <li><a href="#">Deep Drop Down 4</a></li>
                                        <li><a href="#">Deep Drop Down 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Drop Down 2</a></li>
                                <li><a href="#">Drop Down 3</a></li>
                                <li><a href="#">Drop Down 4</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li><a href="#contact">Contact</a></li> --}}
                        <li><a href="/login">Login</a></li>
                    </ul>
                </nav><!-- .navbar -->

                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            </div>
        </header><!-- End Header -->
        <!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero">
            <div class="container position-relative">
                <div class="row gy-5" data-aos="fade-in">
                    <div
                        class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                        <h2><span style="font-size:55px;">
                                SISTEM INFORMASI GEOGRAFIS PEMETAAN OBJEK WISATA BERBASIS WEB
                                DI KABUPATEN ROTE NDAO
                            </span></h2>
                        {{-- <p>SISTEM INFORMASI TEMPAT WISATA
                            DI KOTA KUPANG
                            BERBASIS WEB
                        </p> --}}
                        <div class="d-flex justify-content-center justify-content-lg-start py-4">
                            <a href="/peta" class="btn-get-started">PETA WISATA ROTE NDAO</a>
                            {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                                class="glightbox btn-watch-video d-flex align-items-center"><i
                                    class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
                        </div>
                    </div>
                    <!-- <div class="col-lg-5 order-lg-2 ms-5 ps-3">
                                                                                                                                                                                                                                                                                                                                                                                                    <img src="{{ asset('landing') }}/assets/img/globe.png" class="img-fluid" alt=""
                                                                                                                                                                                                                                                                                                                                                                                                        data-aos="zoom-out" data-aos-delay="100" width="400px">
                                                                                                                                                                                                                                                                                                                                                                                                </div> -->
                </div>
            </div>

            <div class="icon-boxes position-relative">
                <div class="container position-relative">
                    <div class="row gy-4 mt-5">

                        @foreach ($kriteria as $item_kriteria)
                            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('storage/images/' . $item_kriteria->gambar) }}"
                                        alt="{{ $item_kriteria->gambar }}" style="width:auto;height:200px;"
                                        onclick="popUpFoto('{{ $item_kriteria->gambar }}')">
                                    <div class="card-body text-center">
                                        <span class="fw-bold card-title">{{ $item_kriteria->nama }}</span>
                                        <hr>
                                        <p class="card-text text-dark">{{ $item_kriteria->deskripsi }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <script>
                // Get the text content from the element
                // var p = $('p');

                // $("p").each(function() {
                //     var text = $(this).text(); // Get the text content from the element
                //     console.log(text)
                //     var cleanedText = text.replace(/"/g, ''); // Remove double quotes
                //     $(this).text(cleanedText);
                // });

                // p.forEach(element => {

                // });

                // // Remove double quotes from the text
                // var cleanedText = text.replace(/"/g, '');

                // // Set the cleaned text back to the element
                // p.text(cleanedText)
            </script>
            </div>
        </section>
        <!-- End Hero Section -->

        <main id="main">

            <!-- ======= About Us Section ======= -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">

                    <div class="section-header mt-5">
                        <h2>Latar Belakang</h2>
                        <p>Kabupaten Rote Ndao memiliki potensi wisata yang sangat menarik untuk dijelajahi. Keindahan alam
                            khas
                            Kabupaten Rote Ndao yang masih terjaga menjadikannya sebagai destinasi wisata yang memiliki daya
                            tarik
                            tersendiri. Hingga saat ini sudah ada wisatawan lokal maupun mancanegara yang telah mengunjungi
                            wisata di Kabupaten Rote Ndao. Namun masih banyak wisatawan lokal maupun mancanegara yang belum
                            mengetahui tempat wisata di Kabupaten Rote Ndao karena masih belum terpublikasi dengan baik.
                            Oleh karena
                            itu, sistem informasi geografis pemetaan objek wisata Kabupaten Rote Ndao berbasis website
                            sangat dibutuhkan sebagai
                            sarana penyampaian informasi kepada masyarakat yang ingin mengetahui kawasan wisata di Kabupaten
                            Rote Ndao.
                            Tujuan dari penelitian ini adalah untuk mengembangkan sistem informasi geografis pemetaan objek
                            wisata
                            berbasis website di Kabupaten Rote Ndao yang dapat digunakan untuk membantu wisatawan agar lebih
                            mudah
                            menemukan objek wisata yang diinginkan. Dengan adanya sistem informasi berbasis
                            website ini, diharapkan dapat memberikan informasi secara detail kepada masyarakat luas, serta
                            menampilkan objek-objek wisata yang ada di Kabupaten Rote Ndao. Adanya informasi yang lengkap
                            akan
                            memudahkan wisatawan untuk berwisata di Kabupaten Rote Ndao.
                        </p>
                    </div>

                    {{-- <div class="row gy-4">
                        <div class="col-lg-6">
                            <h3>Voluptatem dignissimos provident quasi corporis</h3>
                            <img src="{{ asset('landing') }}/assets/img/about.jpg" class="img-fluid rounded-4 mb-4"
                                alt="">
                            <p>Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat
                                debitis quia recusandae odit et consequatur voluptatem. Dignissimos pariatur consectetur
                                fugiat voluptas ea.</p>
                            <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo
                                officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut
                                ut repellendus nobis tempore doloribus debitis explicabo similique sit. Accusantium sed ut
                                omnis beatae neque deleniti repellendus.</p>
                        </div>
                        <div class="col-lg-6">
                            <div class="content ps-0 ps-lg-5">
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident
                                </p>

                                <div class="position-relative mt-4">
                                    <img src="{{ asset('landing') }}/assets/img/about-2.jpg" class="img-fluid rounded-4"
                                        alt="">
                                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </section><!-- End About Us Section -->

            <!-- ======= Clients Section ======= -->
            {{-- <section id="clients" class="clients">
                <div class="container" data-aos="zoom-out">

                    <div class="clients-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide"><img src="{{ asset('landing') }}/assets/img/clients/client-1.png"
                                    class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="{{ asset('landing') }}/assets/img/clients/client-2.png"
                                    class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="{{ asset('landing') }}/assets/img/clients/client-3.png"
                                    class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="{{ asset('landing') }}/assets/img/clients/client-4.png"
                                    class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="{{ asset('landing') }}/assets/img/clients/client-5.png"
                                    class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="{{ asset('landing') }}/assets/img/clients/client-6.png"
                                    class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="{{ asset('landing') }}/assets/img/clients/client-7.png"
                                    class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="{{ asset('landing') }}/assets/img/clients/client-8.png"
                                    class="img-fluid" alt=""></div>
                        </div>
                    </div>

                </div>
            </section> --}}
            <!-- End Clients Section -->

            <!-- ======= Stats Counter Section ======= -->
            {{-- <section id="stats-counter" class="stats-counter">
                <div class="container" data-aos="fade-up">

                    <div class="row gy-4 align-items-center">

                        <div class="col-lg-6">
                            <img src="{{ asset('landing') }}/assets/img/stats-img.svg" alt="" class="img-fluid">
                        </div>

                        <div class="col-lg-6">

                            <div class="stats-item d-flex align-items-center">
                                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>Happy Clients</strong> consequuntur quae diredo para mesta</p>
                            </div><!-- End Stats Item -->

                            <div class="stats-item d-flex align-items-center">
                                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>Projects</strong> adipisci atque cum quia aut</p>
                            </div><!-- End Stats Item -->

                            <div class="stats-item d-flex align-items-center">
                                <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
                            </div><!-- End Stats Item -->

                        </div>

                    </div>

                </div>
            </section> --}}
            <!-- End Stats Counter Section -->

            <!-- ======= Call To Action Section ======= -->
            {{-- <section id="call-to-action" class="call-to-action">
                <div class="container text-center" data-aos="zoom-out">
                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                    <h3>Call To Action</h3>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                        anim id est laborum.</p>
                    <a class="cta-btn" href="#">Call To Action</a>
                </div>
            </section> --}}
            <!-- End Call To Action Section -->

            <!-- ======= Our Services Section ======= -->
            {{-- <section id="services" class="services sections-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-header mt-5">
                        <h2>Kerangka Kerja & Pustaka</h2>
                        <p>Kerangka kerja yang digunakan dalam website ini memberikan fondasi yang kuat dan efisien dalam
                            pengembangan. Dengan fitur-fitur yang dikemas dengan baik, kerangka kerja ini memungkinkan
                            pengembang untuk dengan mudah membangun, mengelola, dan memperbarui website dengan cepat dan
                            efektif. Selain itu, pustaka yang digunakan dalam website ini menambahkan nilai tambah dengan
                            menyediakan beragam fungsi dan komponen yang siap digunakan. Penggunaan pustaka ini membantu
                            mempercepat pengembangan dan meningkatkan fungsionalitas website secara keseluruhan.</p>
                    </div>

                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                        <div class="col-lg-4 col-md-6">
                            <div class="service-item  position-relative">
                                <div class="icon">
                                    <i class="fa-brands fa-laravel"></i>
                                </div>
                                <h3>Laravel 9</h3>
                                <p>Laravel 9 adalah versi terbaru dari Laravel, framework PHP terpopuler saat ini. Laravel 9
                                    membawa banyak fitur baru dan perubahan, seperti Symfony Mailer dan persyaratan minimal
                                    PHP 8. Pun demikian, akan lebih baik jika Anda memakai PHP 8.1 di Laravel 9, agar dapat
                                    menjalankan fitur Route Bindings Enum.</p>
                                <a target="_blank" href="https://laravel.com/docs/9.x/releases"
                                    class="readmore stretched-link fw-bold">kunjungi <i
                                        class="fa-solid fa-paper-plane"></i></a>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="fa-brands fa-bootstrap"></i>
                                </div>
                                <h3>Bootstrap 5</h3>
                                <p>Bootstrap 5 adalah versi terbaru dari salah satu front-end framework terbaik yang cepat
                                    dan ringan. untuk membantu proses pengembangan website. Dengan Bootstrap, Anda tidak
                                    perlu menulis kode CSS yang panjang, karena Anda bisa langsung menggunakan semua elemen
                                    yang disediakan Bootstrap.</p>
                                <a target="_blank" href="https://getbootstrap.com/docs/5.0/getting-started/introduction/"
                                    class="readmore stretched-link fw-bold">kunjungi <i
                                        class="fa-solid fa-paper-plane"></i></a>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="fa-brands fa-square-js"></i>
                                </div>
                                <h3>JQuery</h3>
                                <p>jQuery adalah library JavaScript open-source yang di-minify dan dibuat untuk operasi
                                    JavaScript yang disederhanakan. Anda bisa menggunakan jQuery untuk coding serangkaian
                                    perintah dengan cepat, yang pada dasarnya akan memerlukan waktu lebih lama apabila
                                    menggunakan kode HTML.s</p>
                                <a target="_blank" href="https://jquery.com/" class="readmore stretched-link fw-bold">
                                    kunjungi
                                    <i class="fa-solid fa-paper-plane"></i></a>
                            </div>
                        </div><!-- End Service Item -->

                        <!-- End Service Item -->

                    </div>

                </div>
            </section> --}}
            <!-- End Our Services Section -->

            <!-- ======= Testimonials Section ======= -->
            {{-- <section id="testimonials" class="testimonials">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>Testimonials</h2>
                        <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti
                            fignissimos eos quam</p>
                    </div>

                    <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('landing') }}/assets/img/testimonials/testimonials-1.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Saul Goodman</h3>
                                                <h4>Ceo &amp; Founder</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                            suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                            Maecen aliquam, risus at semper.
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('landing') }}/assets/img/testimonials/testimonials-2.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Sara Wilsson</h3>
                                                <h4>Designer</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                            quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                                            irure amet legam anim culpa.
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('landing') }}/assets/img/testimonials/testimonials-3.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Jena Karlis</h3>
                                                <h4>Store Owner</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                            veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis
                                            sint minim.
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('landing') }}/assets/img/testimonials/testimonials-4.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Matt Brandon</h3>
                                                <h4>Freelancer</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                            fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore
                                            quem dolore.
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('landing') }}/assets/img/testimonials/testimonials-5.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>John Larson</h3>
                                                <h4>Entrepreneur</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                            noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam
                                            esse veniam culpa fore.
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section><!-- End Testimonials Section --> --}}

            <!-- ======= Portfolio Section ======= -->
            {{-- <section id="portfolio" class="portfolio sections-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>Portfolio</h2>
                        <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et
                            autem uia reprehenderit sunt deleniti</p>
                    </div>

                    <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                        data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                        <div>
                            <ul class="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".filter-app">App</li>
                                <li data-filter=".filter-product">Product</li>
                                <li data-filter=".filter-branding">Branding</li>
                                <li data-filter=".filter-books">Books</li>
                            </ul><!-- End Portfolio Filters -->
                        </div>

                        <div class="row gy-4 portfolio-container">

                            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                                <div class="portfolio-wrap">
                                    <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox"><img src="{{ asset('landing') }}/assets/img/portfolio/app-1.jpg"
                                            class="img-fluid" alt=""></a>
                                    <div class="portfolio-info">
                                        <h4><a href="portfolio-details.html" title="More Details">App 1</a></h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                                <div class="portfolio-wrap">
                                    <a href="assets/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox"><img
                                            src="{{ asset('landing') }}/assets/img/portfolio/product-1.jpg"
                                            class="img-fluid" alt=""></a>
                                    <div class="portfolio-info">
                                        <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                                <div class="portfolio-wrap">
                                    <a href="assets/img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox"><img
                                            src="{{ asset('landing') }}/assets/img/portfolio/branding-1.jpg"
                                            class="img-fluid" alt=""></a>
                                    <div class="portfolio-info">
                                        <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                                <div class="portfolio-wrap">
                                    <a href="assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox"><img
                                            src="{{ asset('landing') }}/assets/img/portfolio/books-1.jpg"
                                            class="img-fluid" alt=""></a>
                                    <div class="portfolio-info">
                                        <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                                <div class="portfolio-wrap">
                                    <a href="assets/img/portfolio/app-2.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox"><img
                                            src="{{ asset('landing') }}/assets/img/portfolio/app-2.jpg" class="img-fluid"
                                            alt=""></a>
                                    <div class="portfolio-info">
                                        <h4><a href="portfolio-details.html" title="More Details">App 2</a></h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                                <div class="portfolio-wrap">
                                    <a href="assets/img/portfolio/product-2.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox"><img
                                            src="{{ asset('landing') }}/assets/img/portfolio/product-2.jpg"
                                            class="img-fluid" alt=""></a>
                                    <div class="portfolio-info">
                                        <h4><a href="portfolio-details.html" title="More Details">Product 2</a></h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                                <div class="portfolio-wrap">
                                    <a href="assets/img/portfolio/branding-2.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox"><img
                                            src="{{ asset('landing') }}/assets/img/portfolio/branding-2.jpg"
                                            class="img-fluid" alt=""></a>
                                    <div class="portfolio-info">
                                        <h4><a href="portfolio-details.html" title="More Details">Branding 2</a></h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                                <div class="portfolio-wrap">
                                    <a href="assets/img/portfolio/books-2.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox"><img
                                            src="{{ asset('landing') }}/assets/img/portfolio/books-2.jpg"
                                            class="img-fluid" alt=""></a>
                                    <div class="portfolio-info">
                                        <h4><a href="portfolio-details.html" title="More Details">Books 2</a></h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                                <div class="portfolio-wrap">
                                    <a href="assets/img/portfolio/app-3.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox"><img
                                            src="{{ asset('landing') }}/assets/img/portfolio/app-3.jpg" class="img-fluid"
                                            alt=""></a>
                                    <div class="portfolio-info">
                                        <h4><a href="portfolio-details.html" title="More Details">App 3</a></h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                                <div class="portfolio-wrap">
                                    <a href="assets/img/portfolio/product-3.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox"><img
                                            src="{{ asset('landing') }}/assets/img/portfolio/product-3.jpg"
                                            class="img-fluid" alt=""></a>
                                    <div class="portfolio-info">
                                        <h4><a href="portfolio-details.html" title="More Details">Product 3</a></h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                                <div class="portfolio-wrap">
                                    <a href="assets/img/portfolio/branding-3.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox"><img
                                            src="{{ asset('landing') }}/assets/img/portfolio/branding-3.jpg"
                                            class="img-fluid" alt=""></a>
                                    <div class="portfolio-info">
                                        <h4><a href="portfolio-details.html" title="More Details">Branding 3</a></h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                                <div class="portfolio-wrap">
                                    <a href="assets/img/portfolio/books-3.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox"><img
                                            src="{{ asset('landing') }}/assets/img/portfolio/books-3.jpg"
                                            class="img-fluid" alt=""></a>
                                    <div class="portfolio-info">
                                        <h4><a href="portfolio-details.html" title="More Details">Books 3</a></h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                        </div><!-- End Portfolio Container -->

                    </div>

                </div>
            </section><!-- End Portfolio Section --> --}}

            <!-- ======= Our Team Section ======= -->
            {{-- <section id="team" class="team">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>Our Team</h2>
                        <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt
                            quis dolorem dolore earum</p>
                    </div>

                    <div class="row gy-4">

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="member">
                                <img src="{{ asset('landing') }}/assets/img/team/team-1.jpg" class="img-fluid"
                                    alt="">
                                <h4>Walter White</h4>
                                <span>Web Development</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div><!-- End Team Member -->

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                            <div class="member">
                                <img src="{{ asset('landing') }}/assets/img/team/team-2.jpg" class="img-fluid"
                                    alt="">
                                <h4>Sarah Jhinson</h4>
                                <span>Marketing</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div><!-- End Team Member -->

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                            <div class="member">
                                <img src="{{ asset('landing') }}/assets/img/team/team-3.jpg" class="img-fluid"
                                    alt="">
                                <h4>William Anderson</h4>
                                <span>Content</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div><!-- End Team Member -->

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                            <div class="member">
                                <img src="{{ asset('landing') }}/assets/img/team/team-4.jpg" class="img-fluid"
                                    alt="">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div><!-- End Team Member -->

                    </div>

                </div>
            </section><!-- End Our Team Section --> --}}

            <!-- ======= Pricing Section ======= -->
            {{-- <section id="pricing" class="pricing sections-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>Pricing</h2>
                        <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat
                            sunt id nobis omnis tiledo stran delop</p>
                    </div>

                    <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

                        <div class="col-lg-4">
                            <div class="pricing-item">
                                <h3>Free Plan</h3>
                                <div class="icon">
                                    <i class="bi bi-box"></i>
                                </div>
                                <h4><sup>$</sup>0<span> / month</span></h4>
                                <ul>
                                    <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                                    <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                                    <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                                    <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span>
                                    </li>
                                    <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis
                                            hendrerit</span></li>
                                </ul>
                                <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                            </div>
                        </div><!-- End Pricing Item -->

                        <div class="col-lg-4">
                            <div class="pricing-item featured">
                                <h3>Business Plan</h3>
                                <div class="icon">
                                    <i class="bi bi-airplane"></i>
                                </div>

                                <h4><sup>$</sup>29<span> / month</span></h4>
                                <ul>
                                    <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                                    <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                                    <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                                    <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                                    <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
                                </ul>
                                <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                            </div>
                        </div><!-- End Pricing Item -->

                        <div class="col-lg-4">
                            <div class="pricing-item">
                                <h3>Developer Plan</h3>
                                <div class="icon">
                                    <i class="bi bi-send"></i>
                                </div>
                                <h4><sup>$</sup>49<span> / month</span></h4>
                                <ul>
                                    <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                                    <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                                    <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                                    <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                                    <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
                                </ul>
                                <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                            </div>
                        </div><!-- End Pricing Item -->

                    </div>

                </div>
            </section><!-- End Pricing Section --> --}}

            <!-- ======= Frequently Asked Questions Section ======= -->
            {{-- <section id="faq" class="faq">
                <div class="container" data-aos="fade-up">

                    <div class="row gy-4">

                        <div class="col-lg-4">
                            <div class="content px-xl-5">
                                <h3>Frequently Asked <strong>Questions</strong></h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-8">

                            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up"
                                data-aos-delay="100">

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                            <span class="num">1.</span>
                                            Non consectetur a erat nam at lectus urna duis?
                                        </button>
                                    </h3>
                                    <div id="faq-content-1" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist">
                                        <div class="accordion-body">
                                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                            laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                                            rhoncus dolor purus non.
                                        </div>
                                    </div>
                                </div><!-- # Faq item-->

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                            <span class="num">2.</span>
                                            Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                                        </button>
                                    </h3>
                                    <div id="faq-content-2" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist">
                                        <div class="accordion-body">
                                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                            interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                            scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                            Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                        </div>
                                    </div>
                                </div><!-- # Faq item-->

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                            <span class="num">3.</span>
                                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                                        </button>
                                    </h3>
                                    <div id="faq-content-3" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist">
                                        <div class="accordion-body">
                                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                            Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                            suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                            convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                        </div>
                                    </div>
                                </div><!-- # Faq item-->

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                                            <span class="num">4.</span>
                                            Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                                        </button>
                                    </h3>
                                    <div id="faq-content-4" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist">
                                        <div class="accordion-body">
                                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                            interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                            scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                            Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                        </div>
                                    </div>
                                </div><!-- # Faq item-->

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                                            <span class="num">5.</span>
                                            Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                                        </button>
                                    </h3>
                                    <div id="faq-content-5" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist">
                                        <div class="accordion-body">
                                            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim
                                            suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan.
                                            Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit
                                            turpis cursus in
                                        </div>
                                    </div>
                                </div><!-- # Faq item-->

                            </div>

                        </div>
                    </div>

                </div>
            </section><!-- End Frequently Asked Questions Section --> --}}

            <!-- ======= Recent Blog Posts Section ======= -->
            {{-- <section id="recent-posts" class="recent-posts sections-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>Recent Blog Posts</h2>
                        <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel
                            architecto accusamus fugit aut qui distinctio</p>
                    </div>

                    <div class="row gy-4">

                        <div class="col-xl-4 col-md-6">
                            <article>

                                <div class="post-img">
                                    <img src="{{ asset('landing') }}/assets/img/blog/blog-1.jpg" alt=""
                                        class="img-fluid">
                                </div>

                                <p class="post-category">Politics</p>

                                <h2 class="title">
                                    <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('landing') }}/assets/img/blog/blog-author.jpg" alt=""
                                        class="img-fluid post-author-img flex-shrink-0">
                                    <div class="post-meta">
                                        <p class="post-author">Maria Doe</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">Jan 1, 2022</time>
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div><!-- End post list item -->

                        <div class="col-xl-4 col-md-6">
                            <article>

                                <div class="post-img">
                                    <img src="{{ asset('landing') }}/assets/img/blog/blog-2.jpg" alt=""
                                        class="img-fluid">
                                </div>

                                <p class="post-category">Sports</p>

                                <h2 class="title">
                                    <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('landing') }}/assets/img/blog/blog-author-2.jpg" alt=""
                                        class="img-fluid post-author-img flex-shrink-0">
                                    <div class="post-meta">
                                        <p class="post-author">Allisa Mayer</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">Jun 5, 2022</time>
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div><!-- End post list item -->

                        <div class="col-xl-4 col-md-6">
                            <article>

                                <div class="post-img">
                                    <img src="{{ asset('landing') }}/assets/img/blog/blog-3.jpg" alt=""
                                        class="img-fluid">
                                </div>

                                <p class="post-category">Entertainment</p>

                                <h2 class="title">
                                    <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et
                                        soluta</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('landing') }}/assets/img/blog/blog-author-3.jpg" alt=""
                                        class="img-fluid post-author-img flex-shrink-0">
                                    <div class="post-meta">
                                        <p class="post-author">Mark Dower</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">Jun 22, 2022</time>
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div><!-- End post list item -->

                    </div><!-- End recent posts list -->

                </div>
            </section><!-- End Recent Blog Posts Section --> --}}

            <!-- ======= Contact Section ======= -->
            {{-- <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">

                    <div class="section-header mt-5">
                        <h2>Contact</h2>
                        <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt
                            quis dolorem dolore earum</p>
                    </div>

                    <div class="row gx-lg-0 gy-4">

                        <div class="col-lg-4">

                            <div class="info-container d-flex flex-column align-items-center justify-content-center">
                                <div class="info-item d-flex">
                                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                                    <div>
                                        <h4>Location:</h4>
                                        <p>A108 Adam Street, New York, NY 535022</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="info-item d-flex">
                                    <i class="bi bi-envelope flex-shrink-0"></i>
                                    <div>
                                        <h4>Email:</h4>
                                        <p>info@example.com</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="info-item d-flex">
                                    <i class="bi bi-phone flex-shrink-0"></i>
                                    <div>
                                        <h4>Call:</h4>
                                        <p>+1 5589 55488 55</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="info-item d-flex">
                                    <i class="bi bi-clock flex-shrink-0"></i>
                                    <div>
                                        <h4>Open Hours:</h4>
                                        <p>Mon-Sat: 11AM - 23PM</p>
                                    </div>
                                </div><!-- End Info Item -->
                            </div>

                        </div>

                        <div class="col-lg-8">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div><!-- End Contact Form -->

                    </div>

                </div>
            </section><!-- End Contact Section --> --}}

        </main><!-- End #main -->

    @endsection
