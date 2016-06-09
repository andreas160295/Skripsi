<link href="css/style.css" rel="stylesheet" type="text/css">

<?php
include 'koneksi.php';

$table="isi_berita";
$sql=mysql_query("select * from $table ORDER BY tanggal DESC LIMIT 3");

while($tampil=mysql_fetch_array($sql)){

echo "<div class='box'>";

echo "<p align='justify'>";
echo "<img src='$tampil[gambar]' align='left'>";
echo "<font valign='top'>";
echo "<strong> <font size='5'>";
echo "$tampil[judul] ";
echo "</strong> </font>";
echo "&nbsp; $tampil[tanggal] ";
echo "<br>";
$data=substr($tampil['isi'],0,150);
echo $data;
echo "<br>";

echo "<a href='index.php?menu=detail_headline&id=$tampil[id_berita]'> <p style='text-align:right'>Selengkapnya</p></a>";
echo"</font></p></div><br>";
}
?>
