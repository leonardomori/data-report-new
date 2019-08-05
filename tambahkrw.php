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
        <li><a href="tambahkrw.php">Tambah Data</a></li>
      </ul>
    </div>
  </nav>
	
	<h3>Tambah Data Kualitas Raw Water</h3>
	
	<form action="tambah-proseskrw.php" method="post">
		<table cellpadding="3" cellspacing="0">
			
		
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
				<td>Turbidity (NTU)</td><td>:</td>
				<td><input type="text" name="turbi" id="turbi"></td>
			</tr>

			<tr>
				<td>DO (mg/L)</td><td>:</td>
				<td><input type="text" name="do" id="do"></td>
			</tr>


			<tr>
				<td>Ammo (mg/L)</td><td>:</td>
				<td><input type="text" name="ammo" id="ammo"></td>
			</tr>


			<tr>
				<td>Besi (mg/L)</td><td>:</td>
				<td><input type="text" name="besi" id="besi"></td>
			</tr>


			<tr>
				<td>Mangan (mg/L)</td><td>:</td>
				<td><input type="text" name="mangan" id="mangan"></td>
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