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
		<title> Form Pelayan </title>
	</head>

	<body>
	
	<form name="input_pelayan" method="post" action="pelayan_simpan.php" >
	
	<table border="1" align="center" cellpadding="1" cellspacing="1" class="formkategori">
	
		<caption align="center" >
		<h2>Input Pelayan</h2>
		</caption>
	
		<tr>
			<td>ID PELAYAN</td>
			<td><input type="text" name="idpelayan" onkeypress="return isnumberkey(event)" maxlength="5" /></td>
		</tr>
		
		<tr>
			<td>Kode Pelayan</td>
			<td>
				<select name="jabatan">
				<option value="KOSONG">....</option>
					
					<?php
					$sql=mysql_query("select * from jabatan");
					while($jabatan=mysql_fetch_array($sql))
					{
					echo " <option value='$jabatan[id_jabatan]' $cek>$jabatan[nama_jabatan] </option>";
					}
					?>
							
				</select>
			</td>
		</tr>

		<tr>
			<td>NAMA PELAYAN</td>
			<td><input type="text" name="namapelayan" maxlength="32" /></td>
		</tr>
		
		<tr>
			<td>KONTAK</td>
			<td><input type="text" name="kontak" onkeypress="return isnumberkey(event)" maxlength="15" /></td>
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
