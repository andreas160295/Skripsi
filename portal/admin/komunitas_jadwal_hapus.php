<?php
include'../koneksi.php';

$cal=$_GET['cal'];
$id=$_GET['id'];

if($id=="hapus")
{

	$sql=mysql_query("delete from kegiatan_komunitas where id_kegiatan='$cal'") or die(mysql_error());
	header('location:home.php?menu=data_komunitas_jadwal');

}
else
{

	header('location:home.php?menu=data_komunitas_jadwal');	

}
?>