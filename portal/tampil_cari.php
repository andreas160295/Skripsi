<link rel="stylesheet" type="text/css" href="css/style.css"/>

<?php
include 'koneksi.php';
$cari=$_POST['cari'];

$sql=mysql_query("select * from isi_berita where judul like '%$cari%' or isi like '%$cari%' order by tanggal limit 6");

echo"mencari:$cari";
echo"<br>";
if(mysql_numrows($sql)==0){
echo "data tidak ada";
}
else{
while($tampil=mysql_fetch_array($sql)){

echo"<div class='tampilcari'>";
echo"$tampil[judul]";
echo"<br>";
$data=substr($tampil['isi'],0,100);
echo"$data";
echo"<br>";
echo
"<a href='index.php?menu=detail_cari&id=$tampil[id_berita]'>Detail</a>";
echo"</div>";
}
}
?>