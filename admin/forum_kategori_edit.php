<?php
session_start();
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
		
		
		$id=($_POST['idkategori']);
		$nama=($_POST['namakategori']);

		$sql1=mysql_query("select cat_id from categories where cat_id='$id'");
		$lihatid=mysql_fetch_array($sql1);
		
		if ($lihatid['cat_id'])
		{	
		$sql="update categories set cat_title='$nama' where cat_id='$id'";	
		
		$query=mysql_query($sql) or die(mysql_error());
		
		header('location:home.php?menu=data_forum_kategori');
		}	
		else
		{
		?>
			<script>
			alert("inputan salah");
			</script>
		<?php } 
	}

//ambil data
$cal=$_GET['cal'];
$sql=mysql_query("select * from categories where cat_id='$cal'");
$array=mysql_fetch_array($sql);
	
?>



<html>

	<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<title> Edit Forum Kategori </title>
	</head>

	<body>

	
	<form name="input_kategori" method="post" >
	
	<table border="1" align="center" cellpadding="1" cellspacing="1" class="formkategori">
	
		<caption align="center" >
		<h2>Edit Forum Kategori</h2>
		</caption>
	
		<tr>
			<td>ID KATEGORI</td>
			<td><input type="text" readonly="" name="idkategori" value="<?=$array['cat_id'];?>" /></td>
		</tr>

		<tr>
			<td>NAMA KATEGORI</td>
			<td><input type="text" name="namakategori" maxlength="32" value="<?=$array['cat_title'];?>" /></td>
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