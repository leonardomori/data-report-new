<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD by TUTORIALWEB.NET</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Edit Data Siswa</h3>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM report WHERE id_ipa='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<table cellpadding="3" cellspacing="0">
						
			<tr>
				<td>IPA</td>
				<td>:</td>
				<td>
					<select name="ipa" required>
						<option value="">Pilih IPA</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<td>Raw Water</td>
				<td>:</td>
				<td><input type="text" name="raw" required></td>
			</tr>
			<tr>
				<td>Distribusi</td>
				<td>:</td>
				<td><input type="text" name="distri" required></td>
			</tr>
			<tr>
				<td>Turtidity</td>
				<td>:</td>
				<td><input type="text" name="turti" required></td>
			</tr>
			<tr>
				<td>Conductivity</td>
				<td>:</td>
				<td><input type="text" name="conduct" required></td>
			</tr><tr>
				<td>PH</td>
				<td>:</td>
				<td><input type="text" name="ph" required></td>
			</tr>
			<tr>
				<td>Besi</td>
				<td>:</td>
				<td><input type="text" name="besi" required></td>
			</tr><tr>
				<td>Mangan</td>
				<td>:</td>
				<td><input type="text" name="mangan" required></td>
			</tr>
			<tr>
				<td>Ammonia</td>
				<td>:</td>
				<td><input type="text" name="ammo" required></td>
			</tr>
			
			
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>