<?php
session_start();
include("../config.php");

$act=$_GET['act'];

if ($act=='delete'){
	$id_berita=$_GET['id_berita'];
	$row = mysqli_query($connect, "DELETE FROM tbl_berita WHERE id_berita = '$id_berita'");
	header('location:data_berita.php');
}

elseif ($act=='input'){

	$judul = $_POST["judul"];
	$isi = $_POST["isi"];
	$tanggal = $_POST["tanggal"];
	$id_kategori = $_POST["id_kategori"];	
	$id_user = $_SESSION['id_user'];

	$ekstensi_diperbolehkan	= array('png','jpg');
	$foto = $_FILES['foto']['name'];
	$x = explode('.', $foto);
	$ekstensi = strtolower(end($x));
	$file_tmp = $_FILES['foto']['tmp_name'];

	if (!empty($foto)){
		if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){

                //Mengupload foto
			move_uploaded_file($file_tmp, 'img/'.$foto);
		}
	}

	$sql = mysqli_query($connect, "INSERT INTO tbl_berita(judul, isi, tanggal, foto, id_user, id_kategori) VALUES('$judul', '$isi', '$tanggal', '$foto', '$id_user', '$id_kategori')");

	if($sql)
	{
		header('location:data_berita.php');
	}else {
		echo "<script>
		alert('Gagal menambah data berita');
		window.location.href='data_berita.php';
		</script>";
	}
}

elseif ($act=='update'){
	$id_berita = $_POST["id_berita"];
	$judul = $_POST["judul"];
	$isi = $_POST["isi"];
	$tanggal = $_POST["tanggal"];
	$id_kategori = $_POST["id_kategori"];	
	$id_user = $_SESSION['id_user'];

	if($_FILES['foto']['name'] == ''){
		$sql = mysqli_query($connect, "UPDATE tbl_berita SET judul='$judul', isi='$isi', tanggal='$tanggal', id_kategori='$id_kategori', id_user='$id_user' WHERE id_berita='$id_berita'");
	} else{
		$ekstensi_diperbolehkan	= array('png','jpg');
		$foto = $_FILES['foto']['name'];
		$x = explode('.', $foto);
		$ekstensi = strtolower(end($x));
		$file_tmp = $_FILES['foto']['tmp_name'];

		if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){

                //Mengupload img
			move_uploaded_file($file_tmp, 'img/'.$foto);
		}

		$sql = mysqli_query($connect, "UPDATE tbl_berita SET judul='$judul', isi='$isi', tanggal='$tanggal', foto='$foto',id_kategori='$id_kategori', id_user='$id_user' WHERE id_berita='$id_berita'");

	}

	if($sql){
		header('location:data_berita.php');
	} else {
		echo "<script>
		alert('Gagal mengubah data berita');
		window.location.href='data_berita.php';
		</script>";
	}

}
?>
