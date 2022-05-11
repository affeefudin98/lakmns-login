<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">
  <title>LEMBAGA AMANAH KEBAJIKAN MASJID NEGERI SARAWAK</title>

  <!-- Favicons -->
  {{-- <link href="{{ asset('assets/img/lakmns.png') }} " rel="icon"> --}}
  {{-- <link rel="icon" href="https://i.ibb.co/k6SnGDw/logo.png"> --}}
  <link rel="icon" href="https://i.ibb.co/QNhQmHt/logoandcolor.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flattern - v4.7.0
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet" crossorigin="anonymous" />
  <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between">

        <div class="logo">
            {{-- <h1 class="text-light"><a href={{ route('home') }}>LAKMNS ASSET MANAGEMENT SYSTEM  </a></h1> --}}
            <img src="{{ asset('assets\img\lakmns.png') }}" alt="logo" style="height: 100%;">
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
            @if (Route::has('login'))
                @auth
                    <li>
                    <a href="{{ url('/halaman utama') }}" class="text-sm text-gray-700 underline">Home</a>
                    </li>
                @else
                    <li>
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log Masuk</a>
                    </li>

                    @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Daftar</a>
                    </li>
                    @endif
                @endauth
            @endif

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        </div>

    </header><!-- End Header -->        
    <main>
        <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(assets/img/slide/masjid.jpg);">
            <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp">
                <h2>Welcome to <p><span>LEMBAGA AMANAH KEBAJIKAN MASJID NEGERI SARAWAK</span></p></h2>
                <p>LEMBAGA AMANAH KEBAJIKAN MASJID BESAR KUCHING TELAH MULA DITUBUHKAN SEAWAL TAHUN 1958. </p>
                <div class="text-center"><a href="https://lakmns.org.my/ms/mengenai-kami/maklumat-korporat/sejarah-penubuhan-lakmns" class="btn-get-started" target="_blank">Selanjutnya</a></div>
                </div>
            </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/masjidKuching.jpg);">
                <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp">
                <h2>VISI DAN MISI</h2>
                <p>VISI: KE ARAH SEBUAH BADAN AMANAH ISLAM YANG BERTARAF DUNIA.</p>
                <p>MISI: MENGOPTIMUMKAN KUALITI, PRODUKTIVITI, PROFESIONALISME DAN INTEGRITI UNTUK KESEJAHTERAAN UMMAH.</p>
                <div class="text-center"><a href="https://lakmns.org.my/ms/mengenai-kami/maklumat-korporat/visi-dan-misi" target="_blank" class="btn-get-started">Selanjutnya</a></div>
                </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/masjid_kuching.jpg);">
                <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp">
                <h2>STRUKTUR ORGANISASI</h2>
                <p>SILA TEKAN PADA BUTANG DI BAWAH UNTUK MAKLUMAT LANJUT</p>
                <div class="text-center"><a href="https://lakmns.org.my/ms/mengenai-kami/pengurusan/sturktur-organisasi" target="_blank" class="btn-get-started">Selanjutnya</a></div>
                </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
        </section><!-- End Hero -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
        <div class="container">

            <div class="row">
            <div class="text-center">
                <h3>Hak Cipta<span> ALAMI Technologies</span>!!!</h3>
                <p> LAKMNS mock up system</p>
            </div>
            </div>

        </div>
        </section><!-- End Cta Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
        <div class="container">

            <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="icon-box" data-aos="fade-up">
                <div class="icon"><i class="bi bi-briefcase"></i></div>
                <h4 class="title"><a href="">ADMINISTRATION</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bi bi-card-checklist"></i></div>
                <h4 class="title"><a href="">DASHBOARD</a></h4>
                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bi bi-bar-chart"></i></div>
                <h4 class="title"><a href="">ASSET</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bi bi-binoculars"></i></div>
                <h4 class="title"><a href="">MAINTENANCE</a></h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="bi bi-brightness-high"></i></div>
                <h4 class="title"><a href="">BUDGET</a></h4>
                <p class="description">Budget for New Asset, Operation & Maintenance, Asset Condition Assessment & Performance, Renovation and Disposal</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                <h4 class="title"><a href="">MAP</a></h4>
                <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                </div>
            </div>
            </div>

        </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-aktiviti">Aktiviti</li>
                <li data-filter=".filter-masjid">Masjid</li>
                <li data-filter=".filter-lain">Lain-lain</li>
                </ul>
            </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">

            <div class="col-lg-4 col-md-6 portfolio-item filter-aktiviti">
                {{-- <img src="https://lakmns.org.my/images/igallery/resized/701-800/photo_2022_02_21_20_02_53-784-1280-720-80-c-wm-right_top-100-LAKMNS-255-255-255-40.jpg" class="img-fluid" alt=""> --}}
                <img src="https://lakmns.org.my/images/igallery/resized/701-800/photo_2022_02_21_20_02_53-784-1280-720-80-c-wm-right_top-100-LAKMNS-255-255-255-40.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Aktiviti 1</h4>
                <p>Aktiviti</p>
                <a href="https://lakmns.org.my/images/igallery/resized/701-800/photo_2022_02_21_20_02_53-784-1280-720-80-c-wm-right_top-100-LAKMNS-255-255-255-40.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-lain">
                <img src="https://lakmns.org.my/images/masjasa/gallery/video/Kayuhan.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Lain 3</h4>
                <p>Lain</p>
                <a href="https://lakmns.org.my/images/masjasa/gallery/video/Kayuhan.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-aktiviti">
                <img src="https://lakmns.org.my/images/igallery/resized/701-800/photo_2022_02_22_10_43_39-800-1280-720-80-c-wm-right_top-100-LAKMNS-255-255-255-40.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Aktiviti 2</h4>
                <p>Aktiviti</p>
                <a href="https://lakmns.org.my/images/igallery/resized/701-800/photo_2022_02_22_10_43_39-800-1280-720-80-c-wm-right_top-100-LAKMNS-255-255-255-40.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-masjid">
                <img src="assets/img/slide/masjid.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Masjid 2</h4>
                <p>Masjid</p>
                <a href="assets/img/slide/masjid.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-lain">
                <img src="https://lakmns.org.my/images/masjasa/gallery/video/Kiosk-MBK.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Lain 2</h4>
                <p>Lain</p>
                <a href="https://lakmns.org.my/images/masjasa/gallery/video/Kiosk-MBK.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-aktiviti">
                <img src="https://lakmns.org.my/images/igallery/resized/801-900/photo_2022_03_02_14_47_55-870-1280-720-80-c-wm-right_top-100-LAKMNS-255-255-255-40.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Aktiviti 3</h4>
                <p>Aktiviti</p>
                <a href="https://lakmns.org.my/images/igallery/resized/801-900/photo_2022_03_02_14_47_55-870-1280-720-80-c-wm-right_top-100-LAKMNS-255-255-255-40.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-masjid">
                <img src="assets/img/slide/masjid_kuching.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Masjid 1</h4>
                <p>Masjid</p>
                <a href="assets/img/slide/masjid_kuching.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-masjid">
                <img src="assets/img/slide/masjidKuching.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Masjid 3</h4>
                <p>Masjid</p>
                <a href="assets/img/slide/masjidKuching.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-lain">
                <img src="https://lakmns.org.my/images/masjasa/gallery/video/KorporatLAKMNS.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Lain 3</h4>
                <p>Lain</p>
                <a href="https://lakmns.org.my/images/masjasa/gallery/video/KorporatLAKMNS.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            </div>

        </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Our Clients Section ======= -->
        <section id="clients" class="clients">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
            <h2>Our <strong>Clients</strong></h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
                </div>
            </div>

            </div>

        </div>
        </section><!-- End Our Clients Section -->


    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
        <div class="container">
            <div class="row">
            <div class=" col-md-6 footer-contact">
                <h3>LEMBAGA AMANAH KEBAJIKAN MASJID NEGERI SARAWAK</h3>
                <p>
                Bangunan Ibu Pejabat HIKMAH,<br>
                Petra Jaya, 93050<br>
                Kuching, Sarawak <br><br>
                <strong>Phone:</strong> +6082440775, 440795, 449042<br>
                <strong>Email:</strong> info@lakmns.org.my<br>
                </p>
            </div>
            <div class="col-md-6 footer-newsletter">
                <h4>Aduan/Permintaan</h4>
                <p>Sila masukkan email anda</p>
                <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Hantar">
                </form>
            </div>
            </div>
            
        </div>
        </div>

        <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
            &copy; Copyright <strong><span>ALAMI Technologies</span></strong>. All Rights Reserved
            </div>
            
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>