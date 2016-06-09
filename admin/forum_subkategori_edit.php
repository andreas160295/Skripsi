<?php

include '../koneksi.php';

if (!isset($_SESSION['current_user']))
{
	header('location:index.php');	
}
else
{	

//input editan data
	if (isset($_POST['simpan']))
	{	
		
		
		$subcatid=$_POST['idsubkategori'];
		$catid=$_POST['kategori'];
		$subcattitle=$_POST['namasubkategori'];
		$subcatdesc=$_POST['namadescsubkategori'];

		$sql1=mysql_query("select subcat_id from subcategories where subcat_id='$subcatid'");
		$lihatid=mysql_fetch_array($sql1);
		
		if ($lihatid['subcat_id'])
		{	
		$sql="update subcategories set subcat_title='$subcattitle', parent_id='$catid', subcat_desc='$subcatdesc'  where subcat_id='$subcatid'";	
		
		$query=mysql_query($sql) or die(mysql_error());
		
		header('location:home.php?menu=data_forum_subkategori');
		}	
		else
		{
		?>
			<script>
			alert("inputan salah");
			</script>
		<?php } 
	}

//penambahan script edit
$cal=$_GET['cal'];
$sql=mysql_query("select * from subcategories where subcat_id='$cal'");
$array=mysql_fetch_array($sql);
?>


<html>

	<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<title> Form Edit SubKategori </title>
	</head>

	<body>
	
	<form name="input_subkategori" method="post" >
	
	<table border="1" align="center" cellpadding="1" cellspacing="1" class="formberita">
	
		<caption align="center" >
		<h2>Edit SubKategori</h2>
		</caption>
	
		<tr>
			<td>ID SUBKATEGORI</td>
			<td><input type="text" name="idsubkategori" readonly="" value="<?=$array['subcat_id'];?>" /></td>
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
									if ($array['parent_id'] == $kategori['cat_id'])
									{
										$cek = " selected";
									}
									else
									{
										$cek="";
									}
									
									echo " <option value='$kategori[cat_id]' $cek>$kategori[cat_title] </option>";
								}
							?>
							
						</select>
					</td>
				</tr>
		
		<tr>
			<td>NAMA SUBKATEGORI</td>
			<td><input type="text" name="namasubkategori" maxlength="32" value="<?=$array['subcat_title'];?>" /></td>
		</tr>
		
		<tr>
			<td>NAMA DESKRIPSI SUBKATEGORI</td>
			<td><input type="text" name="namadescsubkategori" maxlength="64" value="<?=$array['subcat_desc'];?>" /></td>
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
