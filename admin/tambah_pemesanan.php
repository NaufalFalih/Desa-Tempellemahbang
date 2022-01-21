<?php
include("../config.php");

session_start();

if (empty($_SESSION['username'])){

    header('location:../login.php');
}
else
{
    ?>


    <?php include("include_admin/header.php"); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <h3 class="text-danger mb-3">Tambah Pemesanan</h3>

        <!-- Content Row -->
        <div class="row">

         <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="pemesanan_aksi.php?act=input" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama_pemesan">Nama Pemesan</label>
                                    <input type="text" name="nama_pemesan" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_paket">Nama Paket</label>
                                    <input type="text" name="nama_paket" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="bukti_transfer">Bukti Transfer</label>
                                    <input type="file" name="bukti_transfer" class="form-control" required>
                                </div>
                                <button type='input' name='input' class='btn btn-success'>Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


<?php include("include_admin/footer.php"); ?>

<?php
}
?>