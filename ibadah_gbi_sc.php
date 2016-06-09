<link href="css/style.css" rel="stylesheet" type="text/css">

<?php
include 'koneksi.php';

echo "<h1 style=text-align:left>Kebaktian Minggu GBI-SC</h1>";
?>

<table border="1" width="700" align="center" background="img/paper2.jpg" style="font-size:25">

	<div>
		<th>Hari</th>
		<th>Alamat</th>
		<th>Ibadah</th>
		<th>Keterangan</th>
		<th>Jam</th>
	</div>







<?php
$table1="jadwal";
$table2="tempat";

$id=1;

$sql=mysql_query("select $table1.*, $table2.alamat from $table1 
					INNER JOIN $table2 on $table1.id_tempat = $table2.id_tempat
					where $table1.id_tempat = $id 
					order by id_jadwal");


while($tampil=mysql_fetch_array($sql))
{
?>




<tr>
					<td><?=$tampil['hari'];?></td>
					<td><?=$tampil['alamat'];?></td>
					<td><?=$tampil['ibadah'];?></td>
					<td><?=$tampil['keterangan'];?></td>
					<td><?=substr($tampil['mulai'],0,5);?> - <?=substr($tampil['selesai'],0,5);?></td>




<?php 
} 
?>

</tr>
</table>