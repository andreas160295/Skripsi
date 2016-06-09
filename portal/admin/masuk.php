<?php
session_start();
include'../koneksi.php';

include 'index.php';

if(isset($_POST['masuk']))
{
	$user=$_POST['username'];
	$pass=$_POST['password'];
	
	$errors = array();

	$sql="select * from admin where username='$user' && password='$pass'" ;
	$sql1=mysql_query($sql);
	
	if(!$sql1)
	{
	echo "anda sangat tidak berhasil gagal";
	}

	$baris=mysql_num_rows($sql1);
	if($baris>=1)
	{
	//script untuk identifikasi login benar	

		while($tampil=mysql_fetch_array($sql1))
		{		
			$_SESSION['current_user']=$user;
		}
			header("location:home.php");
}
	else
	{
		//kolom user dan pass kosong
		if ($user == "" || $pass == "")
		{
			$errors[] = 'Username dan password perlu diisi';
		}
		else
		{
			$errors[] = 'Username atau password salah';
		}	
		
		

		# JIKA ADA PESAN ERROR DARI VALIDASI
			if (count($errors)>=1 )
			{
				echo "<br>";
					$noPesan=0;
					foreach ($errors as $indeks=>$pesan_tampil) { 
					$noPesan++;
						echo "&nbsp;&nbsp; $pesan_tampil<br>";	
					} 
				echo "</div> <br>"; 
			}
	}
	
}
?>