<?php
include'../koneksi.php';

$cal=$_GET['cal'];
$id=$_GET['id'];

if($id=="hapus")
{

	$sql=mysql_query("delete from jabatan where id_jabatan='$cal'") or die(mysql_error());
	header('location:home.php?menu=data_jabatan');

}
else
{

	header('location:home.php?menu=data_jabatan');	

}
?>