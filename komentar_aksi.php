<?php
session_start();
include("config.php");

$id_berita = $_POST["id_berita"];
$nama = $_POST["nama"];
	$email = $_POST["email"];
	$komentar = $_POST["komentar"];

	$sql = mysqli_query($connect, "INSERT INTO tbl_komentar(nama, email, komentar, id_berita) VALUES('$nama', '$email', '$komentar', '$id_berita')");

	if($sql)
	{
		header('location:berita_detail.php?id_berita=' . $id_berita);
	}else {
		echo "<script>
		alert('Gagal menambah komentar');
		window.location.href='berita_detail.php?id_berita=" . $id_berita  . "';
		</script>";
	}

	?>