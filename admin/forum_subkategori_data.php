<?php

include '../koneksi.php';

if (!isset($_SESSION['current_user']))
{
	header('location:index.php');	
}
else
{
?>

<html>

	<head>
		<title>Lihat SubKategori</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	</head>

	<body>
		
		<table border="1" width="600" align="center" class="databerita">
		
			<caption align="center">
				<h2>Data SubKategori</h2>
			</caption>
			
			<div>
				<th>Subkategori Id</th>	
				<th>Kategori</th>
				<th>Subkategori nama</th>
				<th>Subkategori deskripsi</th>
				<th colspan="2">Aksinya</th>
			</div>

			<?php
				$table1='subcategories';
				$table2='categories';
				
				
				$sql=mysql_query("select $table1.subcat_id ,$table1.parent_id, $table2.cat_title, $table1.subcat_title, $table1.subcat_desc from $table1
				INNER JOIN $table2 ON $table1.parent_id=$table2.cat_id order by cat_id");
				
				while($tampil=mysql_fetch_array($sql))
				{
				
			?>
				
				<tr>
					<td><?=$tampil['subcat_id'];?></td>
					<td><?=$tampil['cat_title']; ?></td>
					<td><?=$tampil['subcat_title'];?></td>
					<td><?=$tampil['subcat_desc'];?></td>
					
					<td>
						<a href="home.php?menu=edit_forum_subkategori&cal=<?=$tampil['subcat_id'];?>" name="edit"> Edit </a>
					</td>

					<td>
						<a href="forum_subkategori_hapus.php?id=hapus&cal=<?=$tampil['subcat_id'];?>" name="hapus"> Hapus </a>
					</td>
					
				</tr>

			<?php
				}
			?>
		</table>
	
	</body>

</html>
<?php
}
?>