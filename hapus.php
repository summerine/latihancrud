<?php 

include "koneksi.php";

$id = $_GET["hapus_id"];

$sql = "DELETE FROM latihan WHERE id = '$id'";
$query = mysqli_query($connection, $sql) or die(mysqli_error());

if($query){
	echo "Data berhasil dihapus";
} else {
	echo "Error". $sql."<br>".mysqli_error($connection);
}

mysqli_close($connection);
header("location:index.php");

 ?>