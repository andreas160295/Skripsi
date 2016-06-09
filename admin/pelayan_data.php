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
<title>Data Pelayan</title>
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>

	
<body>

	<table width="500" border="1" align="center" class="datakategori">
	
	<caption align="center">
		<h2>Data Pelayan</h2>
	</caption>
	
	<th>ID PELAYAN</th>
	<th>NAMA PELAYAN</th>
	<th>NAMA JABATAN</th>
	<th>KONTAK</th>
	<th>AKSINYA</th>

	<?php
	$table1='pelayan';
	$table2='jabatan';
	$sql=mysql_query("select *, $table2.nama_jabatan from $table1 INNER JOIN $table2 ON $table1.id_jabatan=$table2.id_jabatan order by id_pelayan");
	while($tampil=mysql_fetch_array($sql))
	{
	?>			
		
	<tr>
		<td> <?=$tampil['id_pelayan'];?> </td>
		<td> <?=$tampil['nama_pelayan'];?> </td>
		<td> <?=$tampil['nama_jabatan'];?> </td>
		<td> <?=$tampil['kontak'];?> </td>

		<td>
			<a href='home.php?menu=edit_pelayan&cal=<?=$tampil['id_pelayan'];?>'> EDIT //</a>
			<a href='pelayan_hapus.php?id=hapus&cal=<?=$tampil['id_pelayan'];?>'> HAPUS </a>
		</td>	
	</tr>
			
	<?php
	}
	?>
	
	</table>
		
<?php
}
?>