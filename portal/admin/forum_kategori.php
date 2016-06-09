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
		<title> Form Kategori </title>
	</head>

	<body>
	
	<form name="input_kategori" method="post" action="forum_kategori_simpan.php" >
	
	<table border="1" align="center" cellpadding="1" cellspacing="1" class="formkategori">
	
		<caption align="center" >
		<h2>Input Kategori</h2>
		</caption>
	
		<tr>
			<td>ID KATEGORI</td>
			<td><input type="text" name="idkategori" onkeypress="return isnumberkey(event)" maxlength="5" /></td>
		</tr>

		<tr>
			<td>NAMA KATEGORI</td>
			<td><input type="text" name="namakategori" maxlength="32" /></td>
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
