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
		
		
		$id=($_POST['idpelayan']);
		$nama=($_POST['namapelayan']);
		$jabatan=($_POST['jabatan']);
		$kontak=($_POST['kontak']);

		$sql1=mysql_query("select id_pelayan from pelayan where id_pelayan='$id'");
		$lihatid=mysql_fetch_array($sql1);
		
		if ($lihatid['id_pelayan'])
		{	
		$sql="update pelayan set nama_pelayan='$nama', id_jabatan='$jabatan' ,kontak='$kontak' where id_pelayan='$id'";	
		
		$query=mysql_query($sql) or die(mysql_error());
		
		header('location:home.php?menu=data_pelayan');
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
$sql=mysql_query("select * from pelayan where id_pelayan='$cal'");
$array=mysql_fetch_array($sql);
	
?>



<html>

	<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<title> Edit Pelayan </title>
	</head>

	<body>

	
	<form name="input_pelayan" method="post" >
	
	<table border="1" align="center" cellpadding="1" cellspacing="1" class="formkategori">
	
		<caption align="center" >
		<h2>Edit Pelayan</h2>
		</caption>
	
		<tr>
			<td>ID PELAYAN</td>
			<td><input type="text" readonly="" name="idpelayan" value="<?=$array['id_pelayan'];?>" /></td>
		</tr>

		<tr>
			<td>NAMA PELAYAN</td>
			<td><input type="text" name="namapelayan" maxlength="32" value="<?=$array['nama_pelayan'];?>" /></td>
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
					
						if ($array['id_jabatan'] == $jabatan['id_jabatan'])
						{
							$cek = " selected";
						}
						else
						{
							$cek="";
						}
					
					echo " <option value='$jabatan[id_jabatan]' $cek>$jabatan[nama_jabatan] </option>";
					}
					?>
							
				</select>
			</td>
		</tr>
		
		<tr>
			<td>KONTAK</td>
			<td><input type="text" name="kontak" onkeypress="return isnumberkey(event)" maxlength="15" value="<?=$array['kontak'];?>" /></td>
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