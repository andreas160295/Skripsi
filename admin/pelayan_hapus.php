<?php
include'../koneksi.php';

$cal=$_GET['cal'];
$id=$_GET['id'];

if($id=="hapus")
{

	$sql=mysql_query("delete from pelayan where id_pelayan='$cal'") or die(mysql_error());
	header('location:home.php?menu=data_pelayan');

}
else
{

	header('location:home.php?menu=data_pelayan');	

}
?>