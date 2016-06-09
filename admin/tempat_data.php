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
<title>Data Tempat</title>
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>

	
<body>

	<table width="500" border="1" align="center" class="datakategori">
	
	<caption align="center">
		<h2>Data Tempat</h2>
	</caption>
	
	<th>ID TEMPAT</th>
	<th>NAMA TEMPAT</th>
	<th>ALAMAT</th>
	<th>AKSINYA</th>

	<?php
	$sql=mysql_query("select * from tempat");
	while($tampil=mysql_fetch_array($sql))
	{
	?>			
		
	<tr>
		<td> <?=$tampil['id_tempat'];?> </td>
		<td> <?=$tampil['nama_tempat'];?> </td>
		<td> <?=$tampil['alamat'];?> </td>

		<td>
			<a href='home.php?menu=edit_tempat&cal=<?=$tampil['id_tempat'];?>'> EDIT //</a>
			<a href='tempat_hapus.php?id=hapus&cal=<?=$tampil['id_tempat'];?>'> HAPUS </a>
		</td>	
	</tr>
			
	<?php
	}
	?>
	
	</table>
		
<?php
}
?>