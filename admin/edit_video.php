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

        <h3 class="text-danger mb-3">Edit Video</h3>

        <!-- Content Row -->
        <div class="row">
         <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="video_aksi.php?act=update" method="POST">
                        <div class="row">
                            <?php
                            $id_vkegiatan = $_GET['id_vkegiatan'];
                            $sqlquery = "SELECT * FROM tbl_vkegiatan WHERE id_vkegiatan='$id_vkegiatan'";
                            $result = mysqli_query($connect, $sqlquery) or die (mysqli_connect_error());
                            $row = mysqli_fetch_assoc($result);
                            ?>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="link_video">Link Video</label>
                                    <input type="hidden" name="id_vkegiatan" class="form-control" value="<?php echo $row["id_vkegiatan"]; ?>">
                                    <input type="text" name="link_video" class="form-control" value="<?php echo $row["link_video"]; ?>">
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