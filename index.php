<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Desa Tempellemahbang</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Tempellemahbang</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="berita.php">Berita</a></li>
          <li><a href="galeri.php">Galeri</a></li>
          <li><a href="vlog.php">Vlog</a></li>
          <li><a href="pemesanan.php">Pemesanan</a></li>
          <li><a href="kontak.php">Kontak</a></li>
          <li><a href="login.php" class="getstarted">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/lake2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat datang di Website <span>Desa Tempellemahbang</span></h2>
              <p class="animate__animated animate__fadeInUp">Desa Wisata Tempellmahbang, Jawa Tengah, Indonesia.</p>
              <a href="#fasility" class="btn-get-started animate__animated animate__fadeInUp scrollto">Mulai</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/lake.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat datang di Website <span>Desa Tempellemahbang</span></h2>
              <p class="animate__animated animate__fadeInUp">Desa Wisata Tempellemahbang, Jawa Tengah, Indonesia.</p>
              <a href="#fasility" class="btn-get-started animate__animated animate__fadeInUp scrollto">Mulai</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/pawai.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat datang di Website <span>Desa Tempellemahbang</span></h2>
              <p class="animate__animated animate__fadeInUp">Desa Wisata Tempellemahbang, Jawa Tengah, Indonesia.</p>
              <a href="#fasility" class="btn-get-started animate__animated animate__fadeInUp scrollto">Mulai</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

   <!-- ======= Portfolio Section ======= -->
   <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="row">

        <h2 class="text-center">Wisata Populer</h2>

        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-waduk">Waduk</li>
            <li data-filter=".filter-buker">Budaya dan Kerajinan</li>
            <li data-filter=".filter-bkt">Bukit</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <?php
        include("config.php");

        $sqlquery = "SELECT * FROM tbl_galeri";
        if ($result = mysqli_query($connect, $sqlquery)) {
          while ($row = mysqli_fetch_assoc($result)) {
            ?>

            <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $row['kategori'] ?>">
              <div class="portfolio-wrap">
                <img src="assets/img/tour/<?= $row['foto'] ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?= $row['nama'] ?></h4>
                  <div class="portfolio-links">
                    <a href="assets/img/tour/<?= $row['foto'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Waduk 1"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <?php
          }
          mysqli_free_result($result);
        }
        mysqli_close($connect);
        ?>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= About Section ======= -->
  <section id="fasility" class="fasility" style="margin-top: -60px;margin-bottom: 60px;">
    <div class="container">

      <div class="row content">
        <div class="col-lg-12">
         <h2 class="text-center">Fasilitas</h2>
         <p>
           Wisata Tempellemahbang memiliki beberapa keunggulan antara lain :
         </p>
         <ul>
          <li><i class="ri-check-double-line"></i> <strong>Fasilitas No. 1</strong></li>
          <p style="margin-left: 28px;">Kami menyediakan berbagai macam fasilitas yang sangat lengkap .</p>
          <li><i class="ri-check-double-line"></i> <strong>Layanan Prima</strong></li>
          <p style="margin-left: 28px;">Kepuasan Anda adalah prioritas kami. Anda puas kami sangat senang</p>
        </ul>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing" style="margin-top: -60px;margin-bottom: 60px;">
  <div class="container">

    <div class="row justify-content-center">

      <h2 class="text-center">Paket Wisata</h2>

      <div class="col-lg-3 col-md-6">
        <div class="box">
          <h3>Paket A : Waduk</h3>
          <h4><sup>Rp </sup>50.000<span> / orang</span></h4>
          <p>Lorem</p>
          <hr>
          <ul>
           <li>Jasa Pemandu</li>
           <li>Peralatan</li>
           <li>Transportasi</li>
           <li>Asuransi</li>
         </ul>
         <div class="btn-wrap">
          <a href="pemesanan.php" class="btn-buy">Pemesanan</a>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
      <div class="box featured">
        <h3>Paket B</h3>
        <h4><sup>Rp </sup>70.000<span> / orang</span></h4>
        <p>Budaya dan Kerajinan</p>
        <hr>
        <ul>
          <li>Jasa Pemandu</li>
          <li>Peralatan</li>
          <li>Transportasi</li>
          <li>Asuransi</li>
        </ul>
        <div class="btn-wrap">
          <a href="pemesanan.php" class="btn-buy">Pemesanan</a>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
      <div class="box">
        <h3>Paket C : Bukit</h3>
        <h4><sup>Rp </sup>80.000<span> / orang</span></h4>
        <p>Lorem</p>
        <hr>
        <ul>
          <li>Jasa Pemandu</li>
          <li>Peralatan</li>
          <li>Transportasi</li>
          <li class="na">Asuransi</li>
        </ul>
        <div class="btn-wrap">
          <a href="pemesanan.php" class="btn-buy">Pemesanan</a>
        </div>
      </div>
    </div>

  </div>

</div>
</section><!-- End Pricing Section -->


<section id="testimonial" class="testimonial" style="margin-top: -120px;margin-bottom: 60px;">
  <div class="container">
    <div class="row content">
      <div class="col-lg-12">
        <h2 class="text-center">Testimoni</h2>

        <div class='container-fluid mx-auto mt-5 mb-5 col-12' style="text-align: center">
          <div class="row" style="justify-content: center">
            <div class="card col-md-3 col-12">
              <div class="card-content">
                <div class="card-body"> <img class="img" src="./assets/img/testimonials/keren.jpg" />
                  <div class="shadow"></div>
                  <div class="card-title"> Tomzky </div>
                  <div class="card-subtitle">
                    <p> <small class="text-muted">Wow websitenya mengkeren</small> </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card col-md-3 col-12 ml-2">
              <div class="card-content">
                <div class="card-body"> <img class="img" src="./assets/img/testimonials/jeff.jpg" />
                  <div class="card-title"> Jeff Bezos</div>
                  <div class="card-subtitle">
                    <p> <small class="text-muted"> Nice sekali wisatannya, semoga tetap terus berkembang </small> </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card col-md-3 col-12 ml-2">
              <div class="card-content">
                <div class="card-body"> <img class="img" src="./assets/img/testimonials/elon.jpg" />
                  <div class="card-title"> Elon Musk</div>
                  <div class="card-subtitle">
                    <p> <small class="text-muted">Tempatnya bagus dan keren. Saya jadi pengen investasi disini.</small> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients section-bg" style="margin-top: -120px;margin-bottom: 60px;">
  <div class="container">

    <div class="row justify-content-center">
      <h2>Klien & Sponsor</h2>
      <!--   <p>Berikut beberapa perusahaan besar yang telah puas menggunakan jasa kami dalam perjalanan wisata ke Desa Tempellemahbang</p> -->

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/clients/aqua.jpg" class="img-fluid" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/clients/microsoft.jpg" class="img-fluid" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/clients/meta.jpg" class="img-fluid" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/clients/pkkp.jpg" class="img-fluid" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/clients/udinus.png" class="img-fluid" alt="">
      </div>

    </div>

  </div>
</section><!-- End Clients Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-4">
          <div class="footer-info">
            <h3>Desa Wisata Tempellemahbang</h3>
            <p>
             Kabupaten Blora, Jawa Tengah, Indonesia<br>
             58261<br><br>
             <strong>Email:</strong> admin@desatempellemahbang.com<br>
           </p>
           <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-2">
        <div class="footer-info">
          <h3>Jam Buka</h3>
          <p>
            06:00 AM – 17.00 PM<br>
            Senin – Minggu<br>
          </p>
        </div>
      </div>

      <div class="col-lg-6">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31682.080294471245!2d111.48295031840011!3d-6.978613727340703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e776a428af986fb%3A0x2b94c86a03ce4099!2sTempellemahbang%2C%20Jepon%2C%20Kabupaten%20Blora%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1641822903148!5m2!1sid!2sid" width="100%" height="250" style="border:2px solid #fff;"  allowfullscreen="" loading="lazy"></iframe>
     </div>

   </div>
 </div>
</div>


<div class="container">
  <div class="copyright">
    &copy; Copyright <strong><span>Tempellemahbang. Naufal Falih Aziz - A11.2020.12747</span></strong>. All Rights Reserved
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>