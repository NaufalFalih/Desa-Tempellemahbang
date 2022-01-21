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
          <li><a href="index.php">Home</a></li>
          <li><a href="berita.php" class="active">Berita</a></li>
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

 <main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Detail Berita</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li><a href="berita.php">Berita</a></li>
          <li>Detail Berita</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Detail Berita Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">

          <?php
          include("config.php");

          $id_berita = $_GET['id_berita'];

          $sqlquery = "SELECT * FROM tbl_berita INNER JOIN tbl_kategori ON tbl_kategori.id_kategori=tbl_berita.id_kategori INNER JOIN tbl_user ON tbl_user.id_user=tbl_berita.id_user WHERE id_berita=" . $id_berita;
          if ($result = mysqli_query($connect, $sqlquery)) {
            while ($row = mysqli_fetch_assoc($result)) {
              ?>

              <article class="entry entry-single">

                <div class="entry-img">
                  <img src="admin/img/<?= $row['foto'] ?>" alt="" class="img-fluid">
                </div>

                <h2 class="entry-title">
                  <a href="berita_detail.php?id_berita=<?= $row['id_berita'] ?>"><?= $row['judul'] ?></a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="berita_detail.php?id_berita=<?= $row['id_berita'] ?>"><?= $row['nama_user'] ?></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="berita_detail.php?id_berita=<?= $row['id_berita'] ?>"><time datetime="<?= $row['tanggal'] ?>"><?= date('d-m-Y', strtotime($row['tanggal'])); ?></time></a></li>
                  </ul>
                </div>

                <div class="entry-content">
                  <p>
                    <?= $row['isi'] ?>
                  </p>

                </div>

              </article><!-- End blog entry -->


              <?php
            }
            mysqli_free_result($result);
          }
          ?>

          <div class="blog-comments">

            <h4 class="comments-count">Komentar</h4>

            <?php

            $id_berita = $_GET['id_berita'];

            $sqlquery = "SELECT * FROM tbl_komentar INNER JOIN tbl_berita ON tbl_berita.id_berita=tbl_komentar.id_berita WHERE tbl_berita.id_berita=" . $id_berita;

            if ($result = mysqli_query($connect, $sqlquery)) {
              while ($row = mysqli_fetch_assoc($result)) {
                ?>

                <div id="comment-1" class="comment">
                  <div class="d-flex">
                    <div class="comment-img"><img src="assets/img/blog/visitor.png" alt=""></div>
                    <div>
                      <h5><a href=""><?= $row['nama'] ?></a> <a href="#" class="reply"></a></h5>
                      <time datetime="<?= $row['tanggal'] ?>"><?= date('d-m-Y', strtotime($row['tanggal'])); ?></time>
                      <p>
                       <?= $row['komentar'] ?>
                     </p>
                   </div>
                 </div>
               </div><!-- End comment #1 -->


               <?php
             }
             mysqli_free_result($result);
           }
           ?>

           <div class="reply-form">
            <h4 class="mb-3">Tinggalkan Komentar</h4>
            <!-- <p>Your email address will not be published. Required fields are marked * </p> -->
            <form action="komentar_aksi.php" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="hidden" name="id_berita" class="form-control" value="<?= $_GET['id_berita'] ?>">
                  <input name="nama" type="text" class="form-control" placeholder="Nama Anda">
                </div>
                <div class="col-md-6 form-group">
                  <input name="email" type="text" class="form-control" placeholder="Email Anda">
                </div>
              </div>
              <div class="row">
                <div class="col form-group">
                  <textarea name="komentar" class="form-control" placeholder="Komentar Anda"></textarea>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Kirim Komentar</button>

            </form>

          </div>

        </div><!-- End blog comments -->

      </div><!-- End blog entries list -->

      <div class="col-lg-4">

        <div class="sidebar">

          <h3 class="sidebar-title">Berita Terakhir</h3>
          <div class="sidebar-item recent-posts">

            <?php

            $sql = "SELECT * FROM tbl_berita INNER JOIN tbl_kategori ON tbl_kategori.id_kategori=tbl_berita.id_kategori INNER JOIN tbl_user ON tbl_user.id_user=tbl_berita.id_user LIMIT 3";
            if ($result = mysqli_query($connect, $sql)) {
              while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="post-item clearfix">
                  <img src="admin/img/<?= $row['foto'] ?>" alt="">
                  <h4><a href="berita_detail.php?id_berita=<?= $row['id_berita'] ?>"><?= substr($row['judul'], 0, 50) ?>....</a></h4>
                  <time datetime="<?= $row['tanggal'] ?>"><?= date('d-m-Y', strtotime($row['tanggal'])); ?></time>
                </div>

                <?php
              }
              mysqli_free_result($result);
            }
            mysqli_close($connect);
            ?>

          </div><!-- End sidebar recent posts-->

        </div><!-- End sidebar -->

      </div><!-- End blog sidebar -->

    </div>

  </div>
</section><!-- End Detail Berita Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

<div class="container">
  <div class="copyright">
    &copy; Copyright <strong><span>Tempellemahbang</span></strong>. All Rights Reserved
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