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
		<title> Form SubKategori </title>
	</head>

	<body>
	
	<form name="input_subkategori" method="post" action="forum_subkategori_simpan.php" >
	
	<table border="1" align="center" cellpadding="1" cellspacing="1" class="formberita">
	
		<caption align="center" >
		<h2>Input SubKategori</h2>
		</caption>
	
		<tr>
			<td>ID SUBKATEGORI</td>
			<td><input type="text" name="idsubkategori" onkeypress="return isnumberkey(event)" maxlength="5" /></td>
		</tr>

		<tr>
					<td>Kode Kategori</td>
					<td>
						<select name="kategori">
						<option value="KOSONG">....</option>
						
							<?php
								$sql=mysql_query("select * from categories");
								while($kategori=mysql_fetch_array($sql))
								{				
									echo " <option value='$kategori[cat_id]' $cek>$kategori[cat_title] </option>";
								}
							?>
							
						</select>
					</td>
				</tr>
		
		<tr>
			<td>NAMA SUBKATEGORI</td>
			<td><input type="text" name="namasubkategori" maxlength="32" " /></td>
		</tr>
		
		<tr>
			<td>NAMA DESKRIPSI SUBKATEGORI</td>
			<td><input type="text" name="namadescsubkategori" maxlength="64" /></td>
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
