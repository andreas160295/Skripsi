<?php
include'../koneksi.php';

$cal=$_GET['cal'];
$id=$_GET['id'];

if($id=="hapus")
{

	$sql=mysql_query("delete from topics where topic_id='$cal'") or die(mysql_error());
	header('location:home.php?menu=data_forum_topik');

}
else
{

	header('location:home.php?menu=data_forum_topik');	

}
?>