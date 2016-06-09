<?php
include'../koneksi.php';

$cal=$_GET['cal'];
$id=$_GET['id'];

if($id=="hapus")
{

	$sql=mysql_query("delete from categories where cat_id='$cal'") or die(mysql_error());
	header('location:home.php?menu=data_forum_kategori');

}
else
{

	header('location:home.php?menu=data_forum_kategori');	

}
?>