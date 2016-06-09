<?php
include'../koneksi.php';

$idjadwal=$_POST['idjadwal'];
$tempat=$_POST['tempat'];
$ibadah=$_POST['ibadah'];
$hari=$_POST['hari'];
$keterangan=$_POST['ket'];
$mulai=$_POST['mulai'];
$selesai=$_POST['selesai'];

$sql1=mysql_query("select id_jadwal from jadwal where id_jadwal='$idjadwal'");
$lihatid=mysql_fetch_array($sql1);
		
		if($idjadwal=="")
		{
		?>
			<script type="text/javascript">
			alert("Id jadwal harus diisi");
			top.location="home.php?menu=input_jadwal";
			</script>
		<?php
		}
		else
		if($ibadah=="")
		{
		?>
			<script type="text/javascript">
			alert("Kolom ibadah harus diisi");
			top.location="home.php?menu=input_jadwal";
			</script>
		<?php
		}
		else
		if($hari=="")
		{
		?>
			<script type="text/javascript">
			alert("Kolom hari harus diisi");
			top.location="home.php?menu=input_jadwal";
			</script>
		<?php
		}
		if($keterangan=="")
		{
		?>
			<script type="text/javascript">
			alert("Kolom keterangan harus diisi");
			top.location="home.php?menu=input_jadwal";
			</script>
		<?php
		}
		if($mulai=="")
		{
		?>
			<script type="text/javascript">
			alert("Kolom mulai harus diisi");
			top.location="home.php?menu=input_jadwal";
			</script>
		<?php
		}
		if($selesai=="")
		{
		?>
			<script type="text/javascript">
			alert("Kolom selesai harus diisi");
			top.location="home.php?menu=input_jadwal";
			</script>
		<?php
		}
		
		else
		if (!$lihatid['id_jadwal'])
		{	
		$sql="insert into jadwal values('{$idjadwal}', '{$tempat}', '{$ibadah}', '{$hari}', '{$keterangan}', '{$mulai}', '{$selesai}')";	
		
		$query=mysql_query($sql) or die(mysql_error());
		header('location:home.php?menu=data_jadwal');	
		}	
		else
		{
		?>
			<script>
			alert("data sudah ada");
			</script>
		<?php 
		header('location:home.php?menu=data_jadwal');	
		} 
?>