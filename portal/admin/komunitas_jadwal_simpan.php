<?php
include'../koneksi.php';

$idjadwal=$_POST['idkegiatan'];
$kegiatan=$_POST['kegiatan'];
$komunitas=$_POST['komunitas'];
$tempat=$_POST['tempat'];
$pelayan=$_POST['pelayan'];
$hari=$_POST['hari'];
$waktu=$_POST['jam'];


$cek=mysql_query("select * from kegiatan_komunitas where id_kegiatan='$idjadwal'");
$gam=mysql_fetch_array($cek);

if($idjadwal=="")
		{
		?>
			<script type="text/javascript">
			alert("Id kegiatan harus diisi");
			top.location="home.php?menu=komunitas_jadwal";
			</script>
		<?php
		}
		else
		if($kegiatan=="")
		{
		?>
			<script type="text/javascript">
			alert("Nama kegiatan harus diisi");
			top.location="home.php?menu=komunitas_jadwal";
			</script>
		<?php
		}
		else
		if($hari=="")
		{
		?>
			<script type="text/javascript">
			alert("Hari kegiatan harus diisi");
			top.location="home.php?menu=komunitas_jadwal";
			</script>
		<?php
		}
		else
		if($waktu=="")
		{
		?>
			<script type="text/javascript">
			alert("Jam kegiatan harus diisi");
			top.location="home.php?menu=komunitas_jadwal";
			</script>
		<?php
		}

else
if(!$gam['id_kegiatan'])
{

	$query="insert portal.kegiatan_komunitas(id_kegiatan,nama_kegiatan, id_komunitas,id_tempat,id_pelayan,hari,waktu) values('$idjadwal', '$kegiatan','$komunitas','$tempat','$pelayan','$hari','$waktu')";
	$sql=mysql_query($query);
	
?>
	<script type="text/javascript">
	alert("Data berhasil disimpan");
	top.location="home.php?menu=data_komunitas_jadwal";
	</script>
<?php
}
else
{
?>
			<script>
			alert("data sudah ada");
			</script>
<?php 
}
?>
