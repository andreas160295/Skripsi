<?php
include'../koneksi.php';

if(!isset($_SESSION['current_user']))
{
//link jika user gagal dilemparkan ke halaman login

header('location:index.php');
}
else
{
?>
<html>

	<head>
		<title>Lihat Jadwal</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	</head>

	<body>
		
		<table border="1" width="600" align="center" class="databerita">
		
			<caption align="center">
				<h2>Data Jadwal Komunitas</h2>
			</caption>
			
			<div>
				<th>Id Kegiatan</th>	
				<th>Nama Kegiatan</th>
				<th>Nama Komunitas</th>
				<th>Pelayan</th>
				<th>Tempat Komunitas</th>
				<th>Hari</th>
				<th>Waktu</th>
				<th colspan="2">Aksinya</th>
			</div>

			<?php
				$table1='kegiatan_komunitas';
				$table2='komunitas';
				$table3='pelayan';
				$table4='tempat';
				
				
				$sql=mysql_query("select *, $table2.nama_komunitas , $table3.nama_pelayan from $table1
					INNER JOIN $table2 ON $table1.id_komunitas=$table2.id_komunitas
					INNER JOIN $table3 ON $table1.id_pelayan=$table3.id_pelayan
					INNER JOIN $table4 ON $table1.id_tempat=$table4.id_tempat	
									
				order by id_kegiatan");
				
				while($tampil=mysql_fetch_array($sql))
				{
				
			?>
				
				<tr>
					<td><?=$tampil['id_kegiatan'];?></td>
					<td><?=$tampil['nama_kegiatan'];?></td>
					<td><?=$tampil['nama_komunitas']; ?></td>
					<td><?=$tampil['nama_pelayan'];?></td>
					<td><?=$tampil['nama_tempat'];?></td>
					<td><?=$tampil['hari'];?></td>
					<td><?=substr($tampil['waktu'],0,5);?></td>
				
					
					<td>
						<a href="home.php?menu=edit_komunitas_jadwal&cal=<?=$tampil['id_kegiatan'];?>" name="edit"> Edit </a>
					</td>

					<td>
						<a href="komunitas_jadwal_hapus.php?id=hapus&cal=<?=$tampil['id_kegiatan'];?>" name="hapus"> Hapus </a>
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