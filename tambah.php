<?php 

include "koneksi.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$sql = "INSERT INTO latihan VALUES('', '$nama', '$alamat', '$no_hp', '$jenis_kelamin')";
$query = mysqli_query($connection, $sql) or die(mysqli_error());

if($query){
	echo "Data berhasil dimasukkan!";
} else {
	echo "Error";
}

mysqli_close($connection);
header("location:index.php");

 ?>