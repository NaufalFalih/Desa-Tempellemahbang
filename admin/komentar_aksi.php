<?php
session_start();
include("../config.php");

$act=$_GET['act'];

if ($act=='delete'){
	$id_komentar=$_GET['id_komentar'];
	$row = mysqli_query($connect, "DELETE FROM tbl_komentar WHERE id_komentar = '$id_komentar'");
	header('location:data_komentar.php');
}

?>
