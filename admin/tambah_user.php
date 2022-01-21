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

        <h3 class="text-danger mb-3">Tambah User</h3>

        <!-- Content Row -->
        <div class="row">
         <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="user_aksi.php?act=input" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama_user">Nama User</label>
                                    <input type="text" name="nama_user" class="form-control" required>
                                </div>
                                 <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                                 <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" required>
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