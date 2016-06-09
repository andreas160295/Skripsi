<?php
include'../koneksi.php';

$cal=$_GET['cal'];
$id=$_GET['id'];

if($id=="hapus")
{

	$sql=mysql_query("delete from tempat where id_tempat='$cal'") or die(mysql_error());
	header('location:home.php?menu=data_tempat');

}
else
{

	header('location:home.php?menu=data_tempat');	

}
?>