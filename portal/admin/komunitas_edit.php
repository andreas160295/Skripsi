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
		
		
		$id=($_POST['idkomunitas']);
		$nama=($_POST['namakomunitas']);

		$sql1=mysql_query("select id_komunitas from komunitas where id_komunitas='$id'");
		$lihatid=mysql_fetch_array($sql1);
		
		if ($lihatid['id_komunitas'])
		{	
		$sql="update komunitas set nama_komunitas='$nama' where id_komunitas='$id'";	
		
		$query=mysql_query($sql) or die(mysql_error());
		
		header('location:home.php?menu=data_komunitas');
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
$sql=mysql_query("select * from komunitas where id_komunitas='$cal'");
$array=mysql_fetch_array($sql);
	
?>



<html>

	<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<title> Edit Tempat </title>
	</head>

	<body>

	
	<form name="input_komunitas" method="post" >
	
	<table border="1" align="center" cellpadding="1" cellspacing="1" class="formkategori">
	
		<caption align="center" >
		<h2>Edit Tempat</h2>
		</caption>
	
		<tr>
			<td>ID TEMPAT</td>
			<td><input type="text" readonly="" name="idkomunitas" value="<?=$array['id_komunitas'];?>" /></td>
		</tr>

		<tr>
			<td>NAMA TEMPAT</td>
			<td><input type="text" name="namakomunitas" maxlength="32" value="<?=$array['nama_komunitas'];?>" /></td>
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