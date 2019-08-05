<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$tanggal 	= $_POST['tanggal']; // membuat variabel tanggal
	$tanggal    = date('Y-m-d');
	$jam		= date('H:i:s');
	$shift		= $_POST['shift'];  //membuat variabel $shift
	$lps		= $_POST['lps'];
	$tpm		= $_POST['tpm'];
	

	$input = mysql_query("INSERT INTO ipa5 VALUES(NULL, '$tanggal','$jam','$shift', '$lps', '$tpm')") or die(mysql_error());
	
	
	//jika query input sukses
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<a href="ipa5.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="tambahipa5.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>