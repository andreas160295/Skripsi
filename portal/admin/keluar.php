<?php
session_start();
include'../koneksi.php';

if(isset($_GET['keluar']))
{
	session_unset();
	session_destroy();
	
	header("location:index.php");
}
?>