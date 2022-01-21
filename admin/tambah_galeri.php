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

        <h3 class="text-danger mb-3">Tambah Galeri</h3>

        <!-- Content Row -->
        <div class="row">

           <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="galeri_aksi.php?act=input" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                             <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            <div class="form-group">
                              <label for="kategori">Kategori</label>
                              <select name="kategori" class="form-control" required>
                                  <option value="">-- Pilih Kategori --</option>
                                  <option value="waduk">Waduk</option>
                                  <option value="buker">Budaya dan Kerajinan</option>
                                  <option value="ff">Bukit</option>
                              </select>
                          </div>
                          <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" name="foto" class="form-control" required>
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