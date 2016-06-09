<link href="css/style.css" rel="stylesheet" type="text/css">

<?php
include 'koneksi.php';

$id=$_GET['id'];

$query="select * from isi_berita where id_berita='$id'";

$sql=mysql_query($query);

$tampil=mysql_fetch_array($sql);
?>

<p align="justify" class="boxdetail">

<img src="<?=$tampil['gambar'];?>" align="left">

<font valign="top">

<strong> <font size="5"> <?php echo $tampil['judul'];?> </font> </strong>
<br />
<?php echo $tampil['isi'];?>

<font size='2px' color='gray'>
<br /> berita di upload
<?php echo $tampil['tanggal'];?>
</font> </font>
</p>

