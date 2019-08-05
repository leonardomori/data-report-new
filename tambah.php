<!DOCTYPE html>
<html>
<head>
<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

	<title>Data Report IPA By Leonardo Mori</title>
	 <link href="jquery-ui-1.11.4/smoothness/jquery-ui.css" rel="stylesheet" />
  <script src="jquery-ui-1.11.4/external/jquery/jquery.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui.theme.css">
  <script>
   $(document).ready(function(){
	   $("#tanggal").datepicker({
	   })
   })
  </script>


</head>
<body>
<nav class="blue darken-4">
		<div class="container"></div>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Operation & Maintenance</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Beranda</a></li>
        <li><a href="tambah.php">Tambah Data</a></li>
      </ul>
    </div>
  </nav>
	
	<h3>Tambah Data IPA</h3>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			
			<tr>
				<td>IPA</td><td>:</td>
				<td><input type="text" name="ipa" id="ipa" /></td>
				</td>
			</tr>
			
			<tr>
				<td>Tanggal</td><td>:</td>
				<td><input type="text" name="tanggal" id="tanggal" /></td>
			</tr>

			<tr>
				<td>Jam</td><td>:</td>
				<td><input type="time" name="jam" id="jam"></td>
			</tr>
			
			<tr>
				<td>Shift</td><td>:</td>
				<td><input type="text" name="shift" id="shift"></td>
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
				<td>Turbidity</td>
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
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>