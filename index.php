<?php 

include "koneksi.php";

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan CRUD</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<h1>Latihan CRUD</h1>
 <div class="container">
 	<form action="tambah.php" method="POST">
 		<div class="row">
 		<div class="col-25">
 			<label for="nama">Nama</label>
 		</div>
 		<div class="col-75">	
 			<input type="text" id="nama" name="nama" placeholder="Nama" required>
 		</div>
 		</div>
 		<div class="row">
 		<div class="col-25">	
 			<label for="alamat">Alamat</label>
 		</div>
 		<div class="col-75">
 			<textarea id="alamat" name="alamat" placeholder="Alamat" required; style="height: 100px;"> </textarea>
 		</div>
 		</div>
 		<div class="row">
 		<div class="col-25">	
 			<label for="no_hp">No. Hp</label>
 		</div>
 		<div class="col-75">
 			<input type="text" id="no_hp" name="no_hp" placeholder="No. HP">
 		</div>
 		</div>
 		<div class="row">
 		<div class="col-25">
 			<label for="jenis_kelamin">Jenis Kelamin</label>
 		</div>
 		<div class="col-75">
 			<input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki<br>
 			<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br>
 		</div>
 		</div>
 		<button type="reset" name="reset">Reset</button>
 		<input type="submit" name="tambah" value="Tambah">
 	</form>
 </div>
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