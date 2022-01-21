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

        <h3 class="text-danger mb-3">Edit User</h3>

        <!-- Content Row -->
        <div class="row">
         <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="user_aksi.php?act=update" method="POST">
                        <div class="row">
                            <?php
                            $id_user = $_GET['id_user'];
                            $sqlquery = "SELECT * FROM tbl_user WHERE id_user='$id_user'";
                            $result = mysqli_query($connect, $sqlquery) or die (mysqli_connect_error());
                            $row = mysqli_fetch_assoc($result);
                            ?>
                            <div class="col-md-">
                                <div class="form-group">
                                    <label for="nama_user">Nama User</label>
                                    <input type="hidden" name="id_user" class="form-control" value="<?php echo $row["id_user"]; ?>">
                                    <input type="text" name="nama_user" class="form-control" value="<?php echo $row["nama_user"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" value="<?php echo $row["username"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password Baru</label>
                                    <input type="password" name="password" class="form-control">
                                    <span class="text-danger">* Kosongkan jika tidak ingin mengganti password</span>
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