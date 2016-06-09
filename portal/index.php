<?php
include 'koneksi.php';
?>

<html>
	<head><title> Portal </title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link type="text/css" rel="stylesheet" href="css/dropdown_dasar.css">
	</head>

<body>

	<div class="pala">
	<img src="img/andreas12345.png"  class="logo"> 
	</div>
	
	<ul id="menu">
		<li><a href='index.php?menu=home'>Beranda</a></li>
		<li><a href='#'>Artikel</a>
			<ul>
				<li><a href='index.php?menu=kesaksian'>Kesaksian</a></li>
				<li><a href='index.php?menu=pesan_pastor'>Pesan pastor</a></li>
				<li><a href='index.php?menu=berita'>Berita</a></li>
			</ul>
		</li>
		<li><a href='#'>Jam Ibadah</a>
			<ul>
				<li><a href='index.php?menu=gbi_sc'>GBI SC</a></li>
				<li><a href='index.php?menu=gbi_thb'>GBI THB</a></li>
			</ul>
		</li>
		<li><a href='#'>Komunitas</a>
			<ul>
				<li><a href='index.php?menu=komunitas_wbi'>WBI</a></li>
				<li><a href='index.php?menu=komunitas_rumah_doa'>Rumah Doa</a></li>
				<li><a href='index.php?menu=komunitas_youth'>Youth</a></li>
				<li><a href='index.php?menu=komunitas_cool'>COOL</a></li>
			</ul>

		<li><a href='forum/index.php'>Forum</a></li>
	</ul>

	<table border="1" class="tabelisi" align="center">
		<tr>
		<td valign="top" width="250">
			<li class="cari"> <?php include 'cari.php'; ?> </li>		

	<div align="center" class="judul"> Berita Terhangat !!!</div>
	<div class="pinggir">
	
	<ul>
	<?php
$jumlahtampil=5;
	$head=mysql_query("select * from isi_berita order by tanggal desc limit $jumlahtampil");
	
	while($headline=mysql_fetch_array($head)){
		echo	"<li><a
	href='index.php?menu=detail_headline&id=$headline[id_berita]'>$headline[judul]<br><font size='2px' color='gray'> 
	$headline[tanggal]
	</font></li>";
	}
	?>
	</ul>
	
	</div>
		
		
		</td>
		<td valign="center" align="center">
		<!--fungsi pemanggilan halaman file !-->
		
		<?php
		if(isset($_GET['menu']))
		{
			$menu=$_GET['menu'];
			if($menu=="home"){include "headline.php";}
			if($menu=="kesaksian"){include "berita_kesaksian.php";}
			if($menu=="berita"){include "berita.php";}
			if($menu=="pesan_pastor"){include "berita_pesan_pastor.php";}
			
			if($menu=="detail_headline"){include "detail_headline.php";}
			if($menu=="detail_kesaksian"){include "detail_kesaksian.php";}
			if($menu=="detail_pesan_pastor"){include "detail_pesan_pastor.php";}
			if($menu=="detail_berita"){include "detail_berita.php";}
			
			if($menu=="gbi_sc"){include "ibadah_gbi_sc.php";}
			if($menu=="gbi_thb"){include "ibadah_gbi_thb.php";}

			if($menu=="komunitas_cool"){include "komunitas_cool.php";}
			if($menu=="komunitas_rumah_doa"){include "komunitas_rumah_doa.php";}
			if($menu=="komunitas_youth"){include "komunitas_youth.php";}
			if($menu=="komunitas_wbi"){include "komunitas_wbi.php";}
			
			
			if($menu=="tampil_cari"){include "tampil_cari.php";}
			if($menu=="detail_cari"){include "detail_cari.php";}
	
		}
		else{include"headline.php";}
		?>
		
		
		</td>
	</tr>
</table>


</body>


</html>