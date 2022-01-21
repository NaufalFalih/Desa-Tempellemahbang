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



        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="font-weight-bold text-danger">Data Berita</h6>
                <a href="tambah_berita.php" class="btn btn-success mb-3"><i class="fas fa-plus"></i></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="40px">No</th>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>Tanggal</th>
                                <th>Foto</th>
                                <th>Kategori</th>
                                <th>Admin</th>
                                <td>Aksi</td>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                            $sqlquery = "SELECT * FROM tbl_berita INNER JOIN tbl_kategori ON tbl_kategori.id_kategori=tbl_berita.id_kategori INNER JOIN tbl_user ON tbl_user.id_user=tbl_berita.id_user";
                            if ($result = mysqli_query($connect, $sqlquery)) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td align="center"><?= $no++ ?></td>
                                        <td> <?= $row['judul'] ?></td>
                                        <td> <?= $row['isi'] ?></td>
                                        <td> <?= $row['tanggal'] ?></td>
                                        <td> <img src="img/<?= $row['foto'] ?>" width="150px"></td>
                                        <td> <?= $row['kategori'] ?></td>
                                        <td> <?= $row['nama_user'] ?></td>
                                        <td width="120" align="center">
                                            <div class="btn-group">
                                                <a href="edit_berita.php?id_berita=<?php echo $row["id_berita"];?>" class="btn btn-xs btn-primary" title='Edit'> <i class="fas fa-edit"></i> </a>
                                                <a onclick="return confirm('Anda yakin ingin menghapus data tersebut?');" href="berita_aksi.php?act=delete&id_berita=<?php echo $row["id_berita"];?>" class="btn btn-xs btn-danger"> <i class="fas fa-trash" title='Hapus'></i> </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                mysqli_free_result($result);
                            }
                            mysqli_close($connect);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    <?php include("include_admin/footer.php"); ?>
    
    <?php
}
?>