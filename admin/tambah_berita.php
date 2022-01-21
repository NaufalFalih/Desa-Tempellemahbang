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

        <h3 class="text-danger mb-3">Tambah Berita</h3>

        <!-- Content Row -->
        <div class="row">

           <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="berita_aksi.php?act=input" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" name="judul" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="isi">Isi</label>
                                    <textarea name="isi" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal Posting</label>
                                    <input type="date" name="tanggal" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="file" name="foto" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select name="id_kategori" class="form-control" required="">
                                        <option value="">-- Pilih Kategori--</option>
                                        <?php
                                        $no=1;
                                        $sqlkategori = "SELECT * FROM tbl_kategori";
                                        if ($resultkategori = mysqli_query($connect, $sqlkategori)) {
                                            while ($rowkategori = mysqli_fetch_assoc($resultkategori)) {
                                                ?>

                                                <option value="<?= $rowkategori['id_kategori'] ?>"><?= $rowkategori['kategori'] ?></option>

                                                <?php
                                            }
                                            mysqli_free_result($resultkategori);
                                        }
                                        mysqli_close($connect);
                                        ?>
                                    </select>

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