<?php
include'../koneksi.php';

$cal=$_GET['cal'];
$id=$_GET['id'];

if($id=="hapus")
{

	$sql=mysql_query("delete from user where id_user='$cal'") or die(mysql_error());
	header('location:home.php?menu=data_user');

}
else
{

	header('location:home.php?menu=data_user');	

}
?>