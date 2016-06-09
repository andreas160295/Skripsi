<?php
include'../koneksi.php';

$cal=$_GET['cal'];
$id=$_GET['id'];

if($id=="hapus")
{

	$sql=mysql_query("delete from replies where reply_id='$cal'") or die(mysql_error());
	header('location:home.php?menu=data_forum_komentar');

}
else
{

	header('location:home.php?menu=data_forum_komentar');	

}
?>