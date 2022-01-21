<?php
include("../config.php");

session_start();

if (empty($_SESSION['username'])){

    header('location:./login.php');
}
else
{
    ?>


    <?php include("include_admin/header.php"); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Data User</div>
                                <?php 
                                $datauser = mysqli_query($connect,"SELECT * FROM tbl_user");
                                $user = mysqli_num_rows($datauser);
                                 ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $user ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Data Berita</div>
                                <?php 
                                $databerita = mysqli_query($connect,"SELECT * FROM tbl_berita");
                                $berita = mysqli_num_rows($databerita);
                                 ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $berita ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Data Galeri</div>
                                <?php 
                                $datagaleri = mysqli_query($connect,"SELECT * FROM tbl_galeri");
                                $galeri = mysqli_num_rows($datagaleri);
                                 ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $galeri ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-image fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Data Pemesanan</div>
                                <?php 
                                $datapemesanan = mysqli_query($connect,"SELECT * FROM tbl_pemesanan");
                                $pemesanan = mysqli_num_rows($datapemesanan);
                                 ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pemesanan ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


<?php include("include_admin/footer.php"); ?>

<?php
}
?>