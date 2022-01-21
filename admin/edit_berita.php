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

        <h3 class="text-danger mb-3">Edit Berita</h3>

        <!-- Content Row -->
        <div class="row">
         <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="berita_aksi.php?act=update" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <?php
                            $id_berita = $_GET['id_berita'];
                            $sqlquery = "SELECT * FROM tbl_berita INNER JOIN tbl_kategori ON tbl_kategori.id_kategori=tbl_berita.id_kategori INNER JOIN tbl_user ON tbl_user.id_user=tbl_berita.id_user WHERE id_berita='$id_berita'";
                            $result = mysqli_query($connect, $sqlquery) or die (mysqli_connect_error());
                            $row = mysqli_fetch_assoc($result);
                            ?>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="hidden" name="id_berita" class="form-control" value="<?php echo $row["id_berita"]; ?>">
                                    <input type="text" name="judul" class="form-control" value="<?php echo $row["judul"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="isi">Isi</label>
                                    <textarea name="isi" class="form-control" required><?php echo $row["isi"]; ?></textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="tanggal">Tanggal Posting</label>
                                    <input type="date" name="tanggal" class="form-control" value="<?php echo $row["tanggal"]; ?>" required>
                                </div>
                                 <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="file" name="foto" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select name="id_kategori" class="form-control" required="">
                                        <?php
                                        $no=1;
                                        $sqlkategori = "SELECT * FROM tbl_kategori";
                                        if ($resultkategori = mysqli_query($connect, $sqlkategori)) {
                                            while ($rowkategori = mysqli_fetch_assoc($resultkategori)) {
                                                ?>

                                                <option value="<?= $rowkategori['id_kategori'] ?>" <?= ($row["id_kategori"] == $rowkategori['id_kategori']) ? 'selected' : '' ?> ><?= $rowkategori['kategori'] ?></option>

                                                <?php
                                            }
                                            mysqli_free_result($resultkategori);
                                        }
                                        mysqli_close($connect);
                                        ?>
                                    </select>

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