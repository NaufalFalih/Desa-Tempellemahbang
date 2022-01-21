<?php
session_start();
include 'config.php';


$username = isset($_POST['username']) ? $_POST['username'] : ' ';
$password = isset($_POST['password']) ? ($_POST['password']) : ' ';

$data = mysqli_query($connect,"SELECT * FROM tbl_user WHERE username='$username' AND password='$password' ");

$cek = mysqli_num_rows($data);
if($cek > 0){
  $row = mysqli_fetch_assoc($data);
  $_SESSION['id_user'] = $row['id_user'];
  $_SESSION['username'] = $username;
  header('location:admin/index.php');

}
else
{
  echo "<script>
  alert('Login gagal.. Silahkan coba lagi!');
  window.location.href='login.php';
  </script>";

}
?>