<?php
include'../koneksi.php';
?>

<html>

	<head>
		<title>Lihat Artikel</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	</head>

	<body>
		
		<table border="1" width="600" align="center" class="databerita">
		
			<caption align="center">
				<h2>Data Artikel</h2>
			</caption>
			
			<div>
				<th>Id</th>	
				<th>Kategori</th>
				<th>Judul</th>
				<th>Tanggal</th>
				<th>Gambar</th>
				<th colspan="2">Aksinya</th>
			</div>

			<?php
				//var u/ambil halaman
				$hal=isset($_GET['hal'])?$_GET['hal']:1;
				
				if(!isset($_GET['hal']))
				{
					//jumlah halamannya default
					$page=1;
				}
				else
				{
					//halaman yang di dapat dadri nilai yang dikirim
					$page=$_GET['hal'];
				}
				
				$max_results=5;

				$from=(($page * $max_results) - $max_results);

				$table1='isi_berita';
				$table2='kategori';
				
				
				$sql=mysql_query("select $table1.* ,$table2.nama_kategori from $table1
				INNER JOIN $table2 ON $table1.id_kategori=$table2.id_kategori order by id_berita desc limit $from, $max_results");
				
				while($tampil=mysql_fetch_array($sql))
				{
			?>
				
				<tr>
					<td><?=$tampil['id_berita'];?></td>
					<td><?=$tampil['nama_kategori'];?></td>
					<td><?=$tampil['judul'];?></td>
					<td><?=$tampil['tanggal'];?></td>

					<td>
						<img src="../<?=$tampil['gambar'];?>" width="100" height="100"/>
					</td>

					<td>
						<a href="home.php?menu=input_berita&cal=<?=$tampil['id_berita'];?>" name="edit"> Edit </a>
					</td>

					<td>
						<a href="berita_hapus.php?id=hapus&cal=<?=$tampil['id_berita'];?>" name="hapus"> Hapus </a>
					</td>
					
				</tr>

			<?php
				}
			?>
		</table>
	
		<?php
		//jumlah data beritanya
		$total_results=mysql_result(mysql_query("select count(*) as num from $table1"),0);
			
		//menentukan banyaknya halaman
		
		$total_pages=ceil($total_results / $max_results);
		echo "<center> Pilih Halaman <br/>";
			
			//membuat link sebelumnya
			if($hal > 1)
			{
				$prev=($page - 1);
				echo "<a href=$_SERVER[PHP_SELF]?menu=data_berita&hal=$prev><-Sebelumnya</a>";
			}
			

		
			for($i=1; $i<=$total_pages; $i++)
			{
				if(($hal)==$i)
				{
					echo "$i";
				}
				else
				{
					echo "<a href=$_SERVER[PHP_SELF]?menu=data_berita&hal=$i>$i</a>";
				}		
			}

			//untuk membuat link selanjutnya
			if($hal < $total_pages)
			{
				$next=($page + 1);
				echo "<a href=$_SERVER[PHP_SELF]?menu=data_berita&hal=$next>Selanjutnya-></a>";
			}
		
		echo "</center>";
		?>
	</body>

</html>