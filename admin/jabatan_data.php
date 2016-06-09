<?php
include '../koneksi.php';

if (!isset($_SESSION['current_user']))
{
	header('location:index.php');	
}
else
{
?>

<head>
<title>Data Komunitas</title>
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>

	
<body>

	<table width="500" border="1" align="center" class="datakategori">
	
	<caption align="center">
		<h2>Data Jabatan</h2>
	</caption>
	
	<th>ID JABATAN</th>
	<th>NAMA JABATAN</th>
	<th>AKSINYA</th>

	<?php
	$sql=mysql_query("select * from jabatan");
	while($tampil=mysql_fetch_array($sql))
	{
	?>			
		
	<tr>
		<td> <?=$tampil['id_jabatan'];?> </td>
		<td> <?=$tampil['nama_jabatan'];?> </td>

		<td>
			<a href='home.php?menu=edit_jabatan&cal=<?=$tampil['id_jabatan'];?>'> EDIT //</a>
			<a href='jabatan_hapus.php?id=hapus&cal=<?=$tampil['id_jabatan'];?>'> HAPUS </a>
		</td>	
	</tr>
			
	<?php
	}
	?>
	
	</table>
		
<?php
}
?>