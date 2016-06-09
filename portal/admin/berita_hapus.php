<?php
include'../koneksi.php';

$cal=$_GET['cal'];
$id=$_GET['id'];

if($id=="hapus")
{

	$sql=mysql_query("delete from isi_berita where id_berita='$cal'");
	header('location:home.php?menu=data_berita');

}
else
{

	header('location:home.php?menu=data_berita');	

}
?>