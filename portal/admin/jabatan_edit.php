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
		
		
		$id=($_POST['idjabatan']);
		$nama=($_POST['namajabatan']);

		$sql1=mysql_query("select id_jabatan from jabatan where id_jabatan='$id'");
		$lihatid=mysql_fetch_array($sql1);
		
		if ($lihatid['id_jabatan'])
		{	
		$sql="update jabatan set nama_jabatan='$nama' where id_jabatan='$id'";	
		
		$query=mysql_query($sql) or die(mysql_error());
		
		header('location:home.php?menu=data_jabatan');
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
$sql=mysql_query("select * from jabatan where id_jabatan='$cal'");
$array=mysql_fetch_array($sql);
	
?>



<html>

	<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<title> Edit Jabatan </title>
	</head>

	<body>

	
	<form name="input_jabatan" method="post" >
	
	<table border="1" align="center" cellpadding="1" cellspacing="1" class="formkategori">
	
		<caption align="center" >
		<h2>Edit Jabatan</h2>
		</caption>
	
		<tr>
			<td>ID JABATAN</td>
			<td><input type="text" readonly="" name="idjabatan" value="<?=$array['id_jabatan'];?>" /></td>
		</tr>

		<tr>
			<td>NAMA JABATAN</td>
			<td><input type="text" name="namajabatan" maxlength="32" value="<?=$array['nama_jabatan'];?>" /></td>
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