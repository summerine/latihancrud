
<?php 

include "koneksi.php";

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan CRUD</title>
 </head>
 <body>
 	<?php
 	$id = $_GET["edit_id"];
 	$query = mysqli_query($connection, "SELECT * FROM latihan WHERE id = '$id'");
 	while ($data = mysqli_fetch_array($query)) {
 	?>
 	<form action="update.php" method="post">
 		<label for="nama">Nama</label><br>
 		<input type="hidden" name="id" value="<?php echo $data['id']; ?>"><br>
 		<input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br>

 		<label for="alamat">Alamat</label><br>
 		<input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"><br>

 		<label for="no_hp">No Hp</label><br>
 		<input type="text" name="no_hp" value="<?php echo $data['no_hp']; ?>"><br>

 		<label for="jenis_kelamin">Jenis Kelamin</label><br>
 		<input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php if($data['jenis_kelamin']=="Laki-Laki"){ echo "checked";}?>/>Laki-Laki<br>
 		<input type="radio" name="jenis_kelamin" value="Perempuan" <?php if($data['jenis_kelamin']=="Perempuan"){ echo "checked";}?>/>Perempuan<br>
 		<br>

 		<input type="submit" value="Simpan">

 	</form>
 	<?php
 	}
 	?>
 </body>
 </html>