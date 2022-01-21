<?php
include("../config.php");

$act=$_GET['act'];

if ($act=='delete'){
	$id_user=$_GET['id_user'];
	$row = mysqli_query($connect, "DELETE FROM tbl_user WHERE id_user = '$id_user'");
	header('location:data_user.php');
}

elseif ($act=='input'){

	$nama_user = $_POST["nama_user"];
	$username = $_POST["username"];
	$password = md5($_POST["password"]);

	$sql = mysqli_query($connect, "INSERT INTO tbl_user(nama_user, username, password) VALUES('$nama_user', '$username', '$password')");

	if($sql)
	{
		header('location:data_user.php');
	}else {
		echo "<script>
		alert('Gagal menambah data user.');
		window.location.href='data_user.php';
		</script>";
	}
}

elseif ($act=='update'){
	$id_user = $_POST["id_user"];
	$nama_user = $_POST["nama_user"];
	$username = $_POST["username"];
	$password = $_POST["password"];

	if($password == ''){
		$sql = mysqli_query($connect, "UPDATE tbl_user SET nama_user='$nama_user', username='$username' WHERE id_user='$id_user'");
	}else{
		$password_baru = md5($password);
		$sql = mysqli_query($connect, "UPDATE tbl_user SET nama_user='$nama_user', username='$username', password='$password_baru' WHERE id_user='$id_user'");
	}

	if($sql){
		header('location:data_user.php');
	} else {
		echo "<script>
		alert('Gagal mengubah data user');
		window.location.href='data_user.php';
		</script>";
	}

}
?>
