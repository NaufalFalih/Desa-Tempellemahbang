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

        <h3 class="text-danger mb-3">Edit Pemesanan</h3>

        <!-- Content Row -->
        <div class="row">
         <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="pemesanan_aksi.php?act=update" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <?php
                            $id_pemesanan = $_GET['id_pemesanan'];
                            $sqlquery = "SELECT * FROM tbl_pemesanan WHERE id_pemesanan='$id_pemesanan'";
                            $result = mysqli_query($connect, $sqlquery) or die (mysqli_connect_error());
                            $row = mysqli_fetch_assoc($result);
                            ?>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama_pemesan">Nama Pemesan</label>
                                    <input type="hidden" name="id_pemesanan" class="form-control" value="<?php echo $row["id_pemesanan"]; ?>">
                                    <input type="text" name="nama_pemesan" class="form-control" value="<?php echo $row["nama_pemesan"]; ?>">
                                </div>
                                 <div class="form-group">
                                    <label for="nama_paket">Nama Paket</label>
                                    <input type="text" name="nama_paket" class="form-control" value="<?php echo $row["nama_paket"]; ?>" required>
                                </div>
                                 <div class="form-group">
                                    <label for="bukti_transfer">Bukti Transfer</label>
                                    <input type="file" name="bukti_transfer" class="form-control">
                                </div>
                            <button type='update' name='update' class='btn btn-primary'>Ubah</button>
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