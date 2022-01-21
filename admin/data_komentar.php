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
                <h6 class="font-weight-bold text-danger">Data Komentar</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="40px">No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Komentar</th>
                                <td>Aksi</td>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                            $sqlquery = "SELECT * FROM tbl_komentar";
                            if ($result = mysqli_query($connect, $sqlquery)) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td align="center"><?= $no++ ?></td>
                                        <td> <?= $row['nama'] ?></td>
                                        <td> <?= $row['email'] ?></td>
                                        <td> <?= $row['komentar'] ?></td>
                                        <td width="120" align="center">
                                            <div class="btn-group">
                                                <a onclick="return confirm('Anda yakin ingin menghapus data tersebut?');" href="komentar_aksi.php?act=delete&id_komentar=<?php echo $row["id_komentar"];?>" class="btn btn-xs btn-danger"> <i class="fas fa-trash" title='Hapus'></i> </a>
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