<?php
include("../config.php");

$act=$_GET['act'];

if ($act=='delete'){
	$id_vkegiatan=$_GET['id_vkegiatan'];
	$row = mysqli_query($connect, "DELETE FROM tbl_vkegiatan WHERE id_vkegiatan = '$id_vkegiatan'");
	header('location:data_video.php');
}

elseif ($act=='input'){

	$link_video = $_POST["link_video"];
	$sql = mysqli_query($connect, "INSERT INTO tbl_vkegiatan(link_video) VALUES('$link_video')");

	if($sql)
	{
		header('location:data_video.php');
	}else {
		echo "<script>
		alert('Gagal menambah data video.');
		window.location.href='data_video.php';
		</script>";
	}
}

elseif ($act=='update'){
	$id_vkegiatan = $_POST["id_vkegiatan"];
	$link_video = $_POST["link_video"];

	$sql = mysqli_query($connect, "UPDATE tbl_vkegiatan SET link_video='$link_video' WHERE id_vkegiatan='$id_vkegiatan'");

	if($sql){
		header('location:data_video.php');
	} else {
		echo "<script>
		alert('Gagal mengubavideota user');
		window.location.href='data_video.php';
		</script>";
	}

}
?>
