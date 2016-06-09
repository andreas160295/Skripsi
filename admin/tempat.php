<?php

include '../koneksi.php';

if (!isset($_SESSION['current_user']))
{
	header('location:index.php');	
}
else
{	
?>


<html>

	<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<title> Form Tempat </title>
	</head>

	<body>
	
	<form name="input_tempat" method="post" action="tempat_simpan.php" >
	
	<table border="1" align="center" cellpadding="1" cellspacing="1" class="formkategori">
	
		<caption align="center" >
		<h2>Input Tempat</h2>
		</caption>
	
		<tr>
			<td>ID TEMPAT</td>
			<td><input type="text" name="idtempat" onkeypress="return isnumberkey(event)" maxlength="5" /></td>
		</tr>

		<tr>
			<td>NAMA TEMPAT</td>
			<td><input type="text" name="tempat" maxlength="32"/></td>
		</tr>
		
		<tr>
			<td>ALAMAT</td>
			<td>
				<textarea name="alamat" rows="4" cols="22" maxlength="32"></textarea>
			</td>
		</tr>

		<tr>
			<td colspan="2">
			<input type="submit" name="simpan" value="SIMPAN"/>
			<input type="reset" name="batal" value="BATAL"/>	
			</td>
		</tr>	
		
	</table>
	
	</form>
	
	</body>
</html>

<?php
}
?>
