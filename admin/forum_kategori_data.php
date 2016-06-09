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
<title>Data Forum Kategori</title>
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>

	
<body>

	<table width="500" border="1" align="center" class="datakategori">
	
	<caption align="center">
		<h2>Data Forum Kategori</h2>
	</caption>
	
	<th>ID KATEGORI</th>
	<th>NAMA KATEGORI</th>
	<th>AKSINYA</th>

	<?php
	$sql=mysql_query("select * from categories");
	while($tampil=mysql_fetch_array($sql))
	{
	?>			
		
	<tr>
		<td> <?=$tampil['cat_id'];?> </td>
		<td> <?=$tampil['cat_title'];?> </td>

		<td>
			<a href='home.php?menu=edit_forum_kategori&cal=<?=$tampil['cat_id'];?>'> EDIT //</a>
			<a href='forum_kategori_hapus.php?id=hapus&cal=<?=$tampil['cat_id'];?>'> HAPUS </a>
		</td>	
	</tr>
			
	<?php
	}
	?>
	
	</table>
		
<?php
}
?>