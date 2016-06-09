<?php
include'../koneksi.php';
?>

<html>

	<head>
		<title>Lihat Jadwal</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	</head>

	<body>
		
		<table border="1" width="600" align="center" class="databerita">
		
			<caption align="center">
				<h2>Data Jadwal Ibadah</h2>
			</caption>
			
			<div>
				<th>Id</th>	
				<th>Gereja</th>
				<th>Ibadah</th>
				<th>Hari</th>
				<th>Keterangan</th>
				<th>Mulai</th>
				<th>Selesai</th>
				<th colspan="2">Aksinya</th>
			</div>

			<?php
				$table1='jadwal';
				$table2='tempat';
				
				
				$sql=mysql_query("select $table1.id_jadwal ,$table1.id_tempat, $table2.nama_tempat, $table1.ibadah, $table1.hari, $table1.keterangan, $table1.mulai, $table1.selesai from $table1
				INNER JOIN $table2 ON $table1.id_tempat=$table2.id_tempat order by id_tempat");
				
				while($tampil=mysql_fetch_array($sql))
				{
				
			?>
				
				<tr>
					<td><?=$tampil['id_jadwal'];?></td>
					<td><?=$tampil['nama_tempat']; ?></td>
					<td><?=$tampil['ibadah'];?></td>
					<td><?=$tampil['hari'];?></td>
					<td><?=$tampil['keterangan'];?></td>
					<td><?=substr($tampil['mulai'],0,5);?></td>
					<td><?=substr($tampil['selesai'],0,5);?></td>
					
					<td>
						<a href="home.php?menu=edit_jadwal&cal=<?=$tampil['id_jadwal'];?>" name="edit"> Edit </a>
					</td>

					<td>
						<a href="jadwal_hapus.php?id=hapus&cal=<?=$tampil['id_jadwal'];?>" name="hapus"> Hapus </a>
					</td>
					
				</tr>

			<?php
				}
			?>
		</table>
	
	</body>

</html>