<?php
session_start();
include("../config.php");

$act=$_GET['act'];

if ($act=='delete'){
	$id_pemesanan=$_GET['id_pemesanan'];
	$row = mysqli_query($connect, "DELETE FROM tbl_pemesanan WHERE id_pemesanan = '$id_pemesanan'");
	header('location:data_pemesanan.php');
}

elseif ($act=='input'){
	$nama_pemesan = $_POST["nama_pemesan"];
	$nama_paket = $_POST["nama_paket"];

	$ekstensi_diperbolehkan	= array('png','jpg');
	$bukti_transfer = $_FILES['bukti_transfer']['name'];
	$x = explode('.', $bukti_transfer);
	$ekstensi = strtolower(end($x));
	$file_tmp = $_FILES['bukti_transfer']['tmp_name'];

	if (!empty($bukti_transfer)){
		if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){

                //Mengupload bukti_transfer
			move_uploaded_file($file_tmp, 'bukti_transfer/'.$bukti_transfer);
		}
	}

	$sql = mysqli_query($connect, "INSERT INTO tbl_pemesanan(nama_pemesan, nama_paket, bukti_transfer) VALUES('$nama_pemesan', '$nama_paket', '$bukti_transfer')");

	if($sql)
	{
		header('location:data_pemesanan.php');
	}else {
		echo "<script>
		alert('Gagal menambah data pemesanan');
		window.location.href='data_pemesanan.php';
		</script>";
	}
}

elseif ($act=='update'){
	$id_pemesanan = $_POST["id_pemesanan"];
	$nama_pemesan = $_POST["nama_pemesan"];
	$nama_paket = $_POST["nama_paket"];

	if($_FILES['bukti_transfer']['name'] == ''){
		$sql = mysqli_query($connect, "UPDATE tbl_pemesanan SET nama_pemesan='$nama_pemesan', nama_paket='$nama_paket' WHERE id_pemesanan='$id_pemesanan'");
	} else{
		$ekstensi_diperbolehkan	= array('png','jpg');
		$bukti_transfer = $_FILES['bukti_transfer']['name'];
		$x = explode('.', $bukti_transfer);
		$ekstensi = strtolower(end($x));
		$file_tmp = $_FILES['bukti_transfer']['tmp_name'];

		if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){

                //Mengupload img
			move_uploaded_file($file_tmp, 'bukti_transfer/'.$bukti_transfer);
		}

		$sql = mysqli_query($connect, "UPDATE tbl_pemesanan SET nama_pemesan='$nama_pemesan', nama_paket='$nama_paket', bukti_transfer='$bukti_transfer' WHERE id_pemesanan='$id_pemesanan'");

	}

	if($sql){
		header('location:data_pemesanan.php');
	} else {
		echo "<script>
		alert('Gagal mengubah data pemesanan');
		window.location.href='data_pemesanan.php';
		</script>";
	}

}
?>
