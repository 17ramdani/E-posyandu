<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E-Posyandu</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('landingpage') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('landingpage') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('landingpage') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('landingpage') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('landingpage') }}/assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

            <div id="logo">
                <h1><a href="index.html">E-Posyandu</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="{{ asset('landingpage') }}/assets/img/logo.png" alt=""></a> -->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda </a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#features">Fitur</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Galeri</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li><a class="nav-link scrollto" href="{{ url ('login') }}">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="hero-text" data-aos="zoom-out">
            <h2>Selamat Datang di E-Posyandu</h2>
            <p>Website Tentang Informasi dan Pendaftaran Posyandu</p>
            <a href="#about" class="btn-get-started scrollto">Lihat Selengkapnya</a>
        </div>

        <div class="product-screens">

            <div class="product-screen-1" data-aos="fade-up" data-aos-delay="400">
                <img src="{{ asset('landingpage') }}/assets/img/product-screen-1.png" alt="">
            </div>

            <div class="product-screen-2" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('landingpage') }}/assets/img/product-screen-2.png" alt="">
            </div>

            <div class="product-screen-3" data-aos="fade-up">
                <img src="{{ asset('landingpage') }}/assets/img/product-screen-3.png" alt="">
            </div>

        </div>

    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Tentang</h3>
                    <span class="section-divider"></span>
                    <p class="section-description">
                        Pengertian Tentang Posyandu.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-6 about-img" data-aos="fade-right" dat-aos-delay="100">
                        <img src="{{ asset('landingpage') }}/assets/img/suster.jpg" alt="">
                    </div>

                    <div class="col-lg-6 content" data-aos="fade-left" dat-aos-delay="100">
                        <h2>Posyandu</h2>
                        <h3>Pengertian Posyandu</h3>
                        <p>
                            Posyandu adalah jenis pelayanan kepada anak berupa penimbangan untuk memantau pertumbuhan
                            anak.
                            Manfaat Posyandu ialah memberikan layanan kesehatan ibu dan anak, KB, imunisasi, gizi, dan
                            penanggulangan diare.
                        </p>

                        <p>
                            Pada ibu menyusui, kegiatan posyandu tidak jauh berbeda. Beberapa contohnya adalah
                            penyuluhan tentang alat kontrasepsi,
                            pemberian ASI eksklusif, perawatan masa nifas. Sementara itu, kegiatan Posyandu balita untuk
                            anak bisa meliputi penimbangan
                            berat badan, penentuan status pertumbuhan, ataupun penyuluhan kesehatan.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Featuress Section ======= -->
        <section id="features">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 offset-lg-4">
                        <div class="section-header">
                            <h3 class="section-title">Fitur Posyandu</h3>
                            <span class="section-divider"></span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5 features-img">
                        <img src="{{ asset('landingpage') }}/assets/img/product-features.png" alt="" data-aos="fade-right">
                    </div>

                    <div class="col-lg-8 col-md-7 ">
                        <div class="row">

                            <div class="col-lg-6 col-md-6 box" data-aos="fade-up">
                                <div class="icon"><i class="bi bi-person-badge"></i></div>
                                <h4 class="title"><a href=""> KIA </a></h4>
                                <p class="description">Kartu Identitas Anak (KIA) merupakan identitas yang wajib
                                    dimiliki setiap anak agar bisa mengakses pelayanan publik secara mandiri.</p>
                            </div>
                            <div class="col-lg-6 col-md-6 box" data-aos="fade-up">
                                <div class="icon"><i class="bi bi-people-fill"></i></div>
                                <h4 class="title"><a href="">Keluarga Berencana</a></h4>
                                <p class="description">Mencegah terjadinya pernikahan di usia dini. Menekan angka
                                    kematian ibu dan bayi akibat hamil di usia yang terlalu muda atau terlalu tua.
                                    Menekan jumlah penduduk serta menyeimbangkan jumlah kebutuhan dengan jumlah penduduk
                                    di Indonesia.</p>
                            </div>
                            <div class="col-lg-6 col-md-6 box" data-aos="fade-up" dat-aos-delay="100">
                                <div class="icon"><i class="bi bi-bandaid-fill"></i></div>
                                <h4 class="title"><a href="">Imunisasi</a></h4>
                                <p class="description"> imunisasi adalah mencegah suatu penyakit atau mengurangi tingkat
                                    keparahannya. Selama bertahun-tahun.</p>
                            </div>
                            <div class="col-lg-6 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon"><i class="bi bi-heart-fill"></i></div>
                                <h4 class="title"><a href="">Gizi Seimbang</a></h4>
                                <p class="description">Gizi Seimbang adalah susunan pangan sehari-hari yang mengandung
                                    zat gizi dalam jenis dan jumlah yang sesuai dengan kebutuhan tubuh,
                                    dengan memperhatikan prinsip keanekaragaman pangan, aktivitas fisik.</p>
                            </div>

                            <div class="col-lg-6 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon"><i class="bi bi-file-medical-fill"></i></div>
                                <h4 class="title"><a href="">Penanggulangan diare</a></h4>
                                <p class="description">Untuk pencegahan dan meminimalisir peningkatan angka kematian
                                    diwilayah kerja puskesmas air itam. Maka UPTD Puskesmas Air Itam membuat POJOK LROA
                                    (L: Layanan R: Rehidrasi O: Oral A: Aktif) di Pustu dan poskesdes wilayah kerja
                                    Puskesmas Air Itam.</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section><!-- End Featuress Section -->

        <!-- ======= Advanced Featuress Section ======= -->
        <section id="advanced-features">

            <div class="features-row section-bg" data-aos="fade-up">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <img class="advanced-feature-img-right wow fadeInRight" src="{{ asset('landingpage') }}/assets/img/2.jpg" width="600px"
                                alt="">
                            <div>
                                <h2>Kenapa kita harus ke posyandu?</h2>
                                <h3>Posyandu (pos pelayanan terpadu) merupakan upaya pemerintah untuk memudahkan
                                    masyarakat Indonesia dalam
                                    memperoleh pelayanan kesehatan ibu dan anak.</h3>
                                <p> Tujuan utama posyandu adalah mencegah peningkatan angka kematian ibu dan bayi saat
                                    kehamilan, persalinan,
                                    atau setelahnya melalui pemberdayaan masyarakat.</p>
                                <p>Keberadaan Posyandu hingga saat ini menjadi salah satu fasilitas promotif preventif
                                    bagi kesehatan ibu dan anak.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="features-row" data-aos="fade-up">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <img class="advanced-feature-img-left" src="{{ asset('landingpage') }}/assets/img/1.jpg" width="600px" alt="">
                            <div>
                                <h2>Berikut ini tugas-tugas Kader Posyandu Desa pada saat hari buka, adalah:</h2>
                                <ul>
                                    <li>
                                        <p>Melakukan pendaftaran, yang meliputi pendaftaran balita, ibu hamil (Bumil),
                                            ibu
                                            nifas, ibu menyusui, dan sasaran lainnya.</p>
                                    </li>

                                    <li>
                                        <p>Menyelenggarakan Pelayanan kesehatan ibu dan anak. Untuk pelayanan kesehatan
                                            anak
                                            pada Posyandu.</p>
                                    </li>
                                    <li>
                                        <p> Melakukan bimbingan bagi orang tua melakukan pencatatan terhadap berbagai
                                            hasil
                                            pengukuran dan pemantauan kondisi balita.</p>
                                    </li>
                                    <li>
                                        <p> Melakukan penyuluhan tentang pola asuh balita, agar anak tumbuh sehat,
                                            aktif, cerdas dan tanggap, dll.</p>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="features-row section-bg" data-aos="fade-up">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <img class="advanced-feature-img-right wow fadeInRight" src="{{ asset('landingpage') }}/assets/img/3.jpg" width="600px"
                                alt="">
                            <div>
                                <h2>Penyuluhan apa saja di posyandu?</h2>
                                <h3>Pada ibu menyusui, kegiatan posyandu tidak jauh berbeda. Beberapa contohnya adalah
                                    penyuluhan tentang alat kontrasepsi, pemberian ASI eksklusif, perawatan masa nifas.
                                </h3>
                                <p>Sementara itu, kegiatan Posyandu balita untuk anak bisa meliputi penimbangan berat
                                    badan, penentuan status pertumbuhan, ataupun penyuluhan kesehatan.</p>
                                <p>Berfungsi sebagai wahana gerakan reproduksi keluarga sejahtera, gerakan ketahanan
                                    keluarga dan gerakan ekonomi keluarga. Jenis Pelayanan Minimal Kepada Anak
                                    Penimbangan untuk memantau pertumbuhan anak, perhatian harus diberikan khusus
                                    terhadap anak yang selama ini 3 kali tidak melakukan penimbangan, pertumbuhannya
                                    tidak cukup baik sesuai umurnya dan anak yang pertumbuhannya berada di bawah garis
                                    merah KMS.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Advanced Featuress Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <!-- <h3 class="cta-title">Call To Action</h3>
                        <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit
                            anim id est laborum.</p> -->
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>

            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery">
            <div class="container-fluid" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Gallery</h3>
                    <span class="section-divider"></span>
                    <p class="section-description">Gallery Tentang Posyandu</p>
                </div>

                <div class="row g-0">

                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item">
                            <a href="{{ asset('landingpage') }}//assetsimg/gallery/1.png" data-gall="portfolioGallery"
                                class="gallery-lightbox">
                                <img src="{{ asset('landingpage') }}/assets/img/gallery/1.png" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item">
                            <a href="{{ asset('landingpage') }}/assets/img/gallery/2.png" data-gall="portfolioGallery"
                                class="gallery-lightbox">
                                <img src="{{ asset('landingpage') }}/assets/img/gallery/2.png" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item">
                            <a href="{{ asset('landingpage') }}/assets/img/gallery/3.png" data-gall="portfolioGallery"
                                class="gallery-lightbox">
                                <img src="{{ asset('landingpage') }}/assets/img/gallery/3.png" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item">
                            <a href="{{ asset('landingpage') }}/assets/img/gallery/4.png" data-gall="portfolioGallery"
                                class="gallery-lightbox">
                                <img src="{{ asset('landingpage') }}/assets/img/gallery/4.png" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item">
                            <a href="{{ asset('landingpage') }}/assets/img/gallery/5.png" data-gall="portfolioGallery"
                                class="gallery-lightbox">
                                <img src="{{ asset('landingpage') }}/assets/img/gallery/5.png" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item">
                            <a href="{{ asset('landingpage') }}/assets/img/gallery/6.png" data-gall="portfolioGallery"
                                class="gallery-lightbox">
                                <img src="{{ asset('landingpage') }}/assets/img/gallery/6.png" alt="">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact">
            <div class="container" data-aos="fade-up">
                <div class="row">

                    <div class="col-lg-4 col-md-4">
                        <div class="contact-about">
                            <h3>E-Posyandu</h3>
                            <p>Website E-Posyandu adalah sebuah website yang dirancang untuk mempermudah masyarakat
                                untuk melakukan pendaftaran serta berbagi informasi mengenai posyandu </p>
                            <div class="social-links">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="info">
                            <div>
                                <i class="bi bi-geo-alt"></i>
                                <p>jl.Pahlawan <br>Bandung, No.59</p>
                            </div>

                            <div>
                                <i class="bi bi-envelope"></i>
                                <p>Eposyandu@gmail.com</p>
                            </div>

                            <div>
                                <i class="bi bi-phone"></i>
                                <p>+62 822 1446 7224</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 col-md-8">
                        <div class="form">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" data-rule="minlen:4"
                                            data-msg="Please enter at least 4 chars">
                                    </div>
                                    <div class="form-group col-lg-6 mt-3 mt-lg-0">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" data-rule="email"
                                            data-msg="Please enter a valid email">
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" data-rule="minlen:4"
                                        data-msg="Please enter at least 8 chars of subject">
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                        required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit" title="Send Message">Send
                                        Message</button></div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-lg-start text-center">
                    <div class="copyright">
                        &copy; Copyright <strong>E-Posyandu</strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        Designed by <a href="https://github.com/17ramdani">Ramdani</a>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-chevron-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('landingpage') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('landingpage') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landingpage') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('landingpage') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('landingpage') }}/assets/js/main.js"></script>

</body>

</html>
