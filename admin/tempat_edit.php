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
		
		
		$id=($_POST['idtempat']);
		$tempat=($_POST['tempat']);
		$alamat=($_POST['alamat']);

		$sql1=mysql_query("select id_tempat from tempat where id_tempat='$id'");
		$lihatid=mysql_fetch_array($sql1);
		
		if ($lihatid['id_tempat'])
		{	
		$sql="update tempat set nama_tempat='$tempat', alamat='$alamat' where id_tempat='$id'";	
		
		$query=mysql_query($sql) or die(mysql_error());
		
		header('location:home.php?menu=data_tempat');
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
$sql=mysql_query("select * from tempat where id_tempat='$cal'");
$array=mysql_fetch_array($sql);
	
?>



<html>

	<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<title> Edit Tempat </title>
	</head>

	<body>

	
	<form name="input_tempat" method="post" >
	
	<table border="1" align="center" cellpadding="1" cellspacing="1" class="formkategori">
	
		<caption align="center" >
		<h2>Edit Tempat</h2>
		</caption>
	
		<tr>
			<td>ID TEMPAT</td>
			<td><input type="text" readonly="" name="idtempat" onkeypress="return isnumberkey(event)" maxlength="5" value="<?=$array['id_tempat'];?>" /></td>
		</tr>

		<tr>
			<td>NAMA TEMPAT</td>
			<td><input type="text" name="tempat" maxlength="32" value="<?=$array['nama_tempat'];?>" /></td>
		</tr>
		
		<tr>
			<td>ALAMAT</td>
			<td>
				<textarea name="alamat" rows="4" cols="22" maxlength="32"><?=$array['alamat'];?></textarea>
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