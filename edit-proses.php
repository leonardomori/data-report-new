<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$ipa		= $_POST['ipa'];	//membuat variabel $nis dan datanya dari inputan NIS
	$tanggal 	= $_POST['tanggal']; // membuat variabel tanggal
	$jam		= $_POST['jam']; //membuat variabel jam
	$raw		= $_POST['raw'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$distri		= $_POST['distri'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$turti		= $_POST['turti'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	$conduct	= $_POST['conduct'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	$ph			= $_POST['ph'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	$besi		= $_POST['besi'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	$mangan		= $_POST['mangan'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	$ammo		= $_POST['ammo'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE report SET ipa='$ipa', raw='$raw', distri='$distri', turti='$turti', conduct='$conduct', ph='$ph', besi='$besi', mangan='$mangan', ammo='$ammo' WHERE id_ipa='$id'") or die(mysql_error());
	
function ubahTanggal($tanggal){
	$pisah = explode('/',$tanggal);
	$array = array($pisah[2],$pisah[0],$pisah[1]);
	$satukan = implode('-',$array);
	return $satukan;
}

	$tgl_terbit = ubahTanggal($tanggal);
	
	if(isset($update)){
	if(empty($nama) or empty($penulis) or empty($tanggal)){
		echo"<script>window.alert('Maaf,Form tidak boleh kosong....!!!');window.location=('form_buku.php');</script>";
	}else{
		$ins = mysqli_query($con,"insert into buku(judul,penulis,tgl_terbit) values ('$nama','$penulis','$tgl_terbit')");
		echo"<script>window.alert('Data Berhasil diupload');window.location=('form_buku.php');</script>";
	}
}

	//jika query update sukses
	if($update){
		
		echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>