<?php
include'../koneksi.php';

$cal=$_GET['cal'];
$id=$_GET['id'];

if($id=="hapus")
{

	$sql=mysql_query("delete from subcategories where subcat_id='$cal'") or die(mysql_error());
	header('location:home.php?menu=data_forum_subkategori');

}
else
{

	header('location:home.php?menu=data_forum_subkategori');	

}
?>