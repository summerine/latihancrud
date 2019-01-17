<?php 

include "koneksi.php";

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan CRUD</title>
 </head>
 <body>
 	<form action="tambah.php" method="POST">
 		<label for="nama">Nama</label><br>
 		<input type="text" name="nama" required>
 		<br>
 		<label for="alamat">Alamat</label><br>
 		<input type="text" name="alamat" required>
 		<br>
 		<label for="no_hp">No. Hp</label><br>
 		<input type="text" name="no_hp">
 		<br>
 		<label for="jenis_kelamin">Jenis Kelamin</label><br>
 		<input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki<br>
 		<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br>
 		<br>
 		<br>
 		<button type="reset" name="reset">Reset</button>
 		<input type="submit" name="tambah" value="Tambah">
 	</form>

 	<br>
 	<br>

 	<table border="1">
 		<tr>
 			<th>No</th>
 			<th>Nama</th>
 			<th>Alamat</th>
 			<th>No. Hp</th>
 			<th>Jenis Kelamin</th>
 			<th>Opsi</th>
 		</tr>
 		<?php 
 		$no = 1;
 		$sql = "SELECT * FROM latihan";
 		$query = mysqli_query($connection, $sql) or die(mysqli_error());
 		while ($data = mysqli_fetch_array($query)) {
 			
 		 ?>
 		<tr>
 			<td><?php echo $no++; ?></td>
 			<td><?php echo $data['nama']; ?></td>
 			<td><?php echo $data['alamat']; ?></td>
 			<td><?php echo $data['no_hp']; ?></td>
 			<td><?php echo $data['jenis_kelamin'] ?></td>
 			<td>
 				<a href="edit.php?edit_id=<?php echo $data['id'] ?>">Edit</a>
 				<a href="hapus.php?hapus_id=<?php echo $data['id']; ?>">Hapus</a>
 			</td>
 		</tr>
 		<?php 
 		}
 		 ?>
 	</table>
 
 </body>
 </html>