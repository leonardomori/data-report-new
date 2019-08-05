<!DOCTYPE html>
<html>
<head>
	<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>



      <!-- My CSS -->
      <link rel="stylesheet" href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<title>Report Data IPA by Leonardo Mori</title>
	 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav class="blue darken-4">
		<div class="container"></div>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Operation & Maintenance</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Beranda</a></li>
        <li><a href="">Debit Distribusi</a>
			<ul class="sub1">
				<li><a href="csu.php">Cikarang Utara</a></li>
				<li><a href="csa.php">Cikarang Selatan A</a></li>
				<li><a href="csb.php">Cikarang Selatan B</a></li>
				<li><a href="csc.php">Cikarang Selatan C</a></li>
				<li><a href="lab.php">Lemah Abang</a></li>
			</ul>
			</li>
			 <li><a href="tambahlab.php">Tambah Data</a>
			</li>	 		 	
      </ul>
    </div>
  </nav>
	<h3>Debit Distribusi Lemah Abang</h3>
	

	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th rowspan="2">No.</th>
			<th rowspan="2">Tanggal</th>
			<th rowspan="2">Jam</th>
			<th rowspan="2">Shift</th>
			<th colspan="2" style="text-align: center;">Lemah Abang</th>
		</tr>
			<tr>
				<th>lps</th>
				<th>Total Produk M2</th>
			</tr>
		
		<?php
		//iclude file koneksi ke database
		include('koneksi.php');
		
		//query ke database dg SELECT table report diurutkan berdasarkan NIS paling besar
		$query = mysql_query("SELECT * FROM lab ORDER BY id_ipa ASC") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data di database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.$no.'</td>';	//menampilkan nomor urut
					echo '<td>'.$data['tgl_terbit'].'</td>'; //menampilkan data tanggal dari database
					echo '<td>'.$data['jam'].'</td>';
					echo '<td>'.$data['shift'].'</td>';
					echo '<td>'.$data['lps'].'</td>';
					echo '<td>'.$data['tpm'].'</td>';
								
					//echo '<td><a href="edit.php?id='.$data['id_ipa'].'">Edit</a> / <a href="hapus.php?id='.$data['id_ipa'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=id_ipa
				echo '</tr>';
				
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
	</table>

	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>