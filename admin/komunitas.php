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
		<title> Form Komunitas </title>
	</head>

	<body>
	
	<form name="input_komunitas" method="post" action="komunitas_simpan.php" >
	
	<table border="1" align="center" cellpadding="1" cellspacing="1" class="formkategori">
	
		<caption align="center" >
		<h2>Input Komunitas</h2>
		</caption>
	
		<tr>
			<td>ID KOMUNITAS</td>
			<td><input type="text" name="idkomunitas" onkeypress="return isnumberkey(event)" maxlength="5" /></td>
		</tr>

		<tr>
			<td>NAMA KOMUNITAS</td>
			<td><input type="text" name="namakomunitas" maxlength="32" /></td>
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
