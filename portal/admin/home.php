<?php
session_start();
include'../koneksi.php';

if(!isset($_SESSION['current_user']))
{
//link jika user gagal dilemparkan ke halaman login

header('location:index.php');
}
else
{
?>




<html>


<head>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<title>Administrator</title>
</head>


<body>

<center> <img src="../img/admin.jpeg" class="headermukaadmin" /></center>

<table border="1" align="center">

	<tr>
		<td valign="top" class="sampingadmin">
			<!--isian untuk menu-->
				<h3 align="center">MENU</h3>
					<a href="home.php">Halaman Utama</a><br />
					MENU ARTIKEL
						<li>
							<a href="home.php?menu=input_berita">INPUT BERITA</a>
						</li>

						<li>
							<a href="home.php?menu=data_berita">LIHAT BERITA</a>
						</li>

						<li> 
							<a href="home.php?menu=kategori">KATEGORI</a>
						</li>
						<br />

					MENU IBADAH
						<li>
							<a href="home.php?menu=input_jadwal">INPUT JADWAL</a>
						</li>

						<li>
							<a href="home.php?menu=data_jadwal">LIHAT JADWAL</a>
						</li>
						<br />
						
						<li>
							<a href="home.php?menu=tempat">INPUT TEMPAT</a>
						</li>
						
						<li>
							<a href="home.php?menu=data_tempat">LIHAT TEMPAT</a>
						</li>
						<br />
						
					MENU KOMUNITAS
						<li>
							<a href="home.php?menu=komunitas">INPUT KOMUNITAS</a>
						</li>
						
						<li>
							<a href="home.php?menu=data_komunitas">LIHAT KOMUNITAS</a>
						</li>
						
						<br />
						
						<li>
							<a href="home.php?menu=pelayan">INPUT PELAYAN</a>
						</li>

						<li> 
							<a href="home.php?menu=data_pelayan">LIHAT PELAYAN</a>
						</li>
						
						<br />
						
						<li>
							<a href="home.php?menu=jabatan">INPUT JABATAN</a>
						</li>

						<li> 
							<a href="home.php?menu=data_jabatan">LIHAT JABATAN</a>
						</li>
						
						<br />
						
						<li>
							<a href="home.php?menu=komunitas_jadwal">INPUT JADWAL</a>
						</li>

						<li> 
							<a href="home.php?menu=data_komunitas_jadwal">LIHAT JADWAL</a>
						</li>
						<br />
						
						MENU FORUM
						<li>
							<a href="home.php?menu=forum_kategori">INPUT KATEGORI</a>
						</li>

						<li>
							<a href="home.php?menu=data_forum_kategori">LIHAT KATEGORI</a>
						</li>
						<br />
						
						<li>
							<a href="home.php?menu=forum_subkategori">INPUT SUBKATEGORI</a>
						</li>
						
						<li>
							<a href="home.php?menu=data_forum_subkategori">LIHAT SUBKATEGORI</a>
						</li>
						<br />
						
						<li>
							<a href="home.php?menu=data_forum_topik">LIHAT TOPIK</a>
						</li>
						<br/>
						<li>
							<a href="home.php?menu=data_forum_komentar">LIHAT KOMENTAR</a>
						</li>
						<br />
										
						MENU USER
						<li>
							<a href="home.php?menu=user">INPUT USER</a>
						</li>
							
						<li>
							<a href="home.php?menu=data_user">LIHAT USER</a>
						</li>

		</td>
			
			<td width="700" height="500" rowspan="2" valign="top">
			
			<?php
			if(isset($_GET['menu']))
			{
				$menu=$_GET['menu'];
			//letak script untuk menampilkan
			
			//user
			if($menu=="user") {include "user.php";}
			if($menu=="data_user") {include "user_data.php";}
			if($menu=="edit_user") {include "user_edit.php";}
			
			
			//berita + jadwal ibadah
			if($menu=="kategori") {include "kategori_form.php";}
			if($menu=="input_berita") {include "berita_form.php";}
			if($menu=="data_berita") {include "berita_data.php";}
			

			if($menu=="input_jadwal") {include "jadwal_form.php";}
			if($menu=="data_jadwal") {include "jadwal_data.php";}
			if($menu=="edit_jadwal") {include "jadwal_edit.php";}
			
			
			if($menu=="tempat") {include "tempat.php";}
			if($menu=="data_tempat") {include "tempat_data.php";}
			if($menu=="edit_tempat") {include "tempat_edit.php";}
			
			
			//komunitas
			if($menu=="komunitas") {include "komunitas.php";}
			if($menu=="data_komunitas") {include "komunitas_data.php";}
			if($menu=="edit_komunitas") {include "komunitas_edit.php";}
			
			if($menu=="pelayan") {include "pelayan.php";}
			if($menu=="data_pelayan") {include "pelayan_data.php";}
			if($menu=="edit_pelayan") {include "pelayan_edit.php";}
			
			if($menu=="jabatan") {include "jabatan.php";}
			if($menu=="data_jabatan") {include "jabatan_data.php";}
			if($menu=="edit_jabatan") {include "jabatan_edit.php";}
			
			if($menu=="komunitas_jadwal") {include "komunitas_jadwal.php";}
			if($menu=="data_komunitas_jadwal") {include "komunitas_jadwal_data.php";}
			if($menu=="edit_komunitas_jadwal") {include "komunitas_jadwal_edit.php";}
			
			
			//forum
			if($menu=="forum_kategori") {include "forum_kategori.php";}
			if($menu=="data_forum_kategori") {include "forum_kategori_data.php";}
			if($menu=="edit_forum_kategori") {include "forum_kategori_edit.php";}
			
			if($menu=="forum_subkategori") {include "forum_subkategori.php";}
			if($menu=="data_forum_subkategori") {include "forum_subkategori_data.php";}
			if($menu=="edit_forum_subkategori") {include "forum_subkategori_edit.php";}
			
			if($menu=="data_forum_topik") {include "forum_topik_data.php";}
			if($menu=="data_forum_komentar") {include "forum_komentar_data.php";}
			
			
			}
			else{?>
			<!--isian untuk tampilan menunya-->
				SELAMAT DATANG DI HALAMAN ADMINISTRATOR GBI SC <?=$_SESSION['current_user'];?> <br> ANDA SEBAGAI ADMINISTRATOR
				<?php } ?>
			</td>
	</tr>
	
	<tr>
		<td valign="top" class="sampingadmin" >
		<!--isian untuk tampil user-->
			
			<?php
				include 'tampil_admin.php'
			?>
			
			<a href='keluar.php?keluar'> <<<---KELUAR</br> </a>	
		
		</td>
	</tr>
	
</table>


</body>

</html>

<?php
}
?>