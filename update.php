<?php 

include 'koneksi.php';


$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$sql = "UPDATE latihan SET nama = '$nama', alamat = '$alamat', no_hp = '$no_hp', jenis_kelamin = '$jenis_kelamin' WHERE id = '$id'";
$query = mysqli_query($connection, $sql) or die(mysqli_error($connection));

if($query){
	echo "Data berhasil diupdate";
} else {
	echo "Error".$sql."<br>".mysqli_error($connection);
}

mysqli_close($koneksi);
header("location:index.php");

 ?>