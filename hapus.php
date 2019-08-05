<?php
//memulai proses hapus data

//cek dahulu, apakah benar URL sudah ada GET id -> hapus.php?id=id_ipa
if(isset($_GET['id'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg bernilai dari URL GET id -> hapus.php?id=id_ipa
	$id = $_GET['id'];
	
	//cek ke database apakah ada data report dengan siswa_id='$id'
	$cek = mysql_query("SELECT id_ipa FROM report WHERE id_ipa='$id'") or die(mysql_error());
	
	//jika data report tidak ada
	if(mysql_num_rows($cek) == 0){
		
		//jika data tidak ada, maka redirect atau dikembalikan ke halaman beranda
		echo '<script>window.history.back()</script>';
	
	}else{
		
		//jika data ada di database, maka melakukan query DELETE table report dengan kondisi WHERE id_ipa='$id'
		$del = mysql_query("DELETE FROM report WHERE id_ipa='$id'");
		
		//jika query DELETE berhasil
		if($del){
			
			echo 'Data berhasil di hapus! ';		//Pesan jika proses hapus berhasil
			echo '<a href="index.php">Kembali</a>';	//membuat Link untuk kembali ke halaman beranda
			
		}else{
			
			echo 'Gagal menghapus data! ';		//Pesan jika proses hapus gagal
			echo '<a href="index.php">Kembali</a>';	//membuat Link untuk kembali ke halaman beranda
		
		}
		
	}
	
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>