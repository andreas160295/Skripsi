<link rel="stylesheet" type="text/css" href="css/style.css"/>

<?php
include 'koneksi.php';

$id=$_GET['id'];

if($id!="")
{

	$query="select * from isi_berita where id_berita='$id'";
	$sql=mysql_query($query);
	$tampil=mysql_fetch_array($sql);
?>

<p align="justify" class="boxdetail">
<img src="<?=$tampil['gambar'];?>" align="left" />
<font valign="top">

<strong> <font size="5">
<?php echo $tampil['judul'];?>
</font> </strong>
<br />

<?php echo $tampil['isi'];?>

<font size='2px' color='gray'>
<br />
berita diupload 
&nbsp; <?php echo $tampil['tanggal'];?>
</font>
</p>

<?php
}
else
{
?>

<script type="text/javascript">
alert ("Anda salah !!!!");
top.location="index.php";
</script>
<?php
}
?>