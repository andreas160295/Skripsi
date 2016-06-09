<?php
include'../koneksi.php';

$cal=$_GET['cal'];
$id=$_GET['id'];

if($id=="hapus")
{

	$sql=mysql_query("delete from komunitas where id_komunitas='$cal'") or die(mysql_error());
	header('location:home.php?menu=data_komunitas');

}
else
{

	header('location:home.php?menu=data_komunitas');	

}
?>