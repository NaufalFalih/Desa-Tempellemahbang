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

      <h3 class="text-danger mb-3">Edit Galeri</h3>

        <!-- Content Row -->
        <div class="row">
           <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="galeri_aksi.php?act=update" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <?php
                            $id_galeri = $_GET['id_galeri'];
                            $sqlquery = "SELECT * FROM tbl_galeri WHERE id_galeri='$id_galeri'";
                            $result = mysqli_query($connect, $sqlquery) or die (mysqli_connect_error());
                            $row = mysqli_fetch_assoc($result);
                            ?>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                     <input type="hidden" name="id_galeri" class="form-control" value="<?php echo $row["id_galeri"]; ?>">
                                    <input type="text" name="nama" class="form-control" value="<?php echo $row["nama"]; ?>">
                                </div>
                                <div class="form-group">
                                  <label for="kategori">Kategori</label>
                                  <select name="kategori" class="form-control">
                                      <option value="waduk" <?= ($row['kategori'] == 'waduk') ? 'selected' : '' ?>>Waduk</option>
                                      <option value="buker" <?= ($row['kategori'] == 'buker') ? 'selected' : '' ?>>Budaya dan Kerajinan</option>
                                      <option value="bkt" <?= ($row['kategori'] == 'bkt') ? 'selected' : '' ?>>Bukit</option>
                                  </select>
                              </div>
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" name="foto" class="form-control">
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