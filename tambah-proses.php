<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$ipa		= $_POST['ipa'];	//membuat variabel $nis dan datanya dari inputan NIS
	$tanggal 	= $_POST['tanggal']; // membuat variabel tanggal
	$tanggal    = date('Y-m-d');
	$Jam		= date('H:i:s');
	$shift		= $_POST['shift'];  //membuat variabel $shift
	$raw		= $_POST['raw'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$distri		= $_POST['distri'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$turti		= $_POST['turti'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	$conduct	= $_POST['conduct'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	$ph			= $_POST['ph'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	$besi		= $_POST['besi'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	$mangan		= $_POST['mangan'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	$ammo		= $_POST['ammo'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	

	$input = mysql_query("INSERT INTO report VALUES(NULL, '$ipa', '$tanggal','$Jam','$shift', '$raw', '$distri', '$turti', '$conduct', '$ph', '$besi', '$mangan', '$ammo')") or die(mysql_error());
	
	
	//jika query input sukses
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<a href="tambah.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="tambah.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>