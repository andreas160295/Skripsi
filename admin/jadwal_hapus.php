<?php
include'../koneksi.php';

$cal=$_GET['cal'];
$id=$_GET['id'];

if($id=="hapus")
{

	$sql=mysql_query("delete from jadwal where id_jadwal='$cal'");
	header('location:home.php?menu=data_jadwal');

}
else
{

	header('location:home.php?menu=data_jadwal');	

}
?>