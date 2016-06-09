<link href="css/style.css" rel="stylesheet" type="text/css">

<?php
include 'koneksi.php';

echo "<h1 style=text-align:left>Kegiatan Rumah Doa GBI-SC</h1>";
?>

<table border="1" width="700" align="center" background="img/paper2.jpg" style="font-size:25">

	<div>
		<th>Nama Kegiatan</th>	
		<th>Pelayan</th>
		<th>Kontak</th>
		<th>Hari</th>
		<th>Tempat</th>
		<th>Jam</th>
	</div>







<?php
$table1="kegiatan_komunitas";
$table2="komunitas";
$table3="tempat";
$table4="pelayan";



$sql= "select $table1.*, $table2.nama_komunitas, $table3.nama_tempat, $table4.nama_pelayan, $table4.kontak from $table1
					LEFT JOIN $table2 ON $table1.id_komunitas=$table2.id_komunitas
					LEFT JOIN $table3 ON $table1.id_tempat=$table3.id_tempat
					LEFT JOIN $table4 ON $table1.id_pelayan=$table4.id_pelayan
					where $table1.id_komunitas = 2 order by id_kegiatan";
$mysql = mysql_query($sql)  or die ("Query salah : ".mysql_error());

while($tampil=mysql_fetch_array($mysql))
{
?>




<tr>
					<td><?=$tampil['nama_kegiatan'];?></td>
					<td><?=$tampil['nama_pelayan'];?></td>
					<td><?=$tampil['kontak'];?></td>
					<td><?=$tampil['hari'];?></td>
					<td><?=$tampil['nama_tempat'];?></td>
					<td><?=substr($tampil['waktu'],0,5);?> 

<?php 
} 
?>

</tr>
</table>

<br>
<br>