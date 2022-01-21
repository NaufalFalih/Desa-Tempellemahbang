<?php
session_start();
include("../config.php");

$act=$_GET['act'];

if ($act=='delete'){
	$id_galeri=$_GET['id_galeri'];
	$row = mysqli_query($connect, "DELETE FROM tbl_galeri WHERE id_galeri = '$id_galeri'");
	header('location:data_galeri.php');
}

elseif ($act=='input'){
	$nama = $_POST["nama"];
	$kategori = $_POST["kategori"];

	$ekstensi_diperbolehkan	= array('png','jpg');
	$foto = $_FILES['foto']['name'];
	$x = explode('.', $foto);
	$ekstensi = strtolower(end($x));
	$file_tmp = $_FILES['foto']['tmp_name'];

	if (!empty($foto)){
		if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){

                //Mengupload foto
			move_uploaded_file($file_tmp, '../assets/img/tour/'.$foto);
		}
	}

	$sql = mysqli_query($connect, "INSERT INTO tbl_galeri(nama, kategori, foto) VALUES('$nama', '$kategori', '$foto')");

	if($sql)
	{
		header('location:data_galeri.php');
	}else {
		echo "<script>
		alert('Gagal menambah data galeri');
		window.location.href='data_galeri.php';
		</script>";
	}
}

elseif ($act=='update'){
	$id_galeri = $_POST["id_galeri"];
		$nama = $_POST["nama"];
		$kategori = $_POST["kategori"];

	if($_FILES['foto']['name'] == ''){
		$sql = mysqli_query($connect, "UPDATE tbl_galeri SET nama='$nama', kategori='$kategori' WHERE id_galeri='$id_galeri'");
	} else{
		$ekstensi_diperbolehkan	= array('png','jpg');
		$foto = $_FILES['foto']['name'];
		$x = explode('.', $foto);
		$ekstensi = strtolower(end($x));
		$file_tmp = $_FILES['foto']['tmp_name'];

		if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){

                //Mengupload img
			move_uploaded_file($file_tmp, '../assets/img/tour/'.$foto);
		}

		$sql = mysqli_query($connect, "UPDATE tbl_galeri SET nama='$nama', kategori='$kategori', foto='$foto' WHERE id_galeri='$id_galeri'");

	}

	if($sql){
		header('location:data_galeri.php');
	} else {
		echo "<script>
		alert('Gagal mengubah data galeri');
		window.location.href='data_galeri.php';
		</script>";
	}

}
?>
