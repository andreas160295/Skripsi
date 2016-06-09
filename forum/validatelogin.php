<?php
session_start();
include'../koneksi.php';
include "./layout-manager.php";

	$user=$_POST['usernameinput'];
	$pass=$_POST['passwordinput'];
	
	

	$sql="select * from user where username='$user' && password='$pass'" ;
	$sql1=mysql_query($sql);
	
	if(!$sql1)
	{
	echo "anda sangat tidak berhasil gagal";
	}

	$baris=mysql_num_rows($sql1);
	if($baris>=1)
	{
	//script untuk identifikasi login benar
	$_SESSION['username']=$user;
	
		header("location:index.php");

	}
	else
	{
	//script untuk identifikasi login salah

		loginform();
		echo "username dan password tidak benar";
	}
	

?>