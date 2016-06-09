<?php
include'../koneksi.php';

$idberita=$_POST['idberita'];
$kategori=$_POST['kategori'];
$judul=$_POST['judul'];
$tanggal=$_POST['tanggal'];
$tgl=date('Y-m-d');
$isi=$_POST['isi'];

$cek=mysql_query("select * from isi_berita where id_berita='$idberita'");
$gam=mysql_fetch_array($cek);

if($gam['id_berita'])
{
	$gambare=$_FILES['file_gambar']['size'];
	
	if($gambare>0)
	{
		//$bk_gambar_size=filesize($file_gambar);
		$path="img/file_gambar_name";
		$path2=$_FILES['file_gambar']['name'];
		copy($_FILES['file_gambar']['tmp_name'],"../img/$path2");

		$queriubah="update isi_berita set id_kategori='$kategori',judul='$judul',tanggal='$tgl',gambar='img/$path2,isi='$isi' where id_berita='$idberita'";
		$ubah=mysql_query($queriubah);
		?>
			<script type="text/javascript">
			alert("Data berhasil diubah");
			top.location="home.php?menu=data_berita";
			</script>
		<?php
	}
	else
	{
		$queriubah="update isi_berita set id_kategori='$kategori',judul='$judul',tanggal='$tgl',isi='$isi' where id_berita='$idberita'";
		$ubah=mysql_query($queriubah);		
		?>
			<script type="text/javascript">
			alert("Data berhasil disimpan");
			top.location="home.php?menu=data_berita";
			</script>
		<?php
	}
}

if($idberita=="")
{
		?>
			<script type="text/javascript">
			alert("Id berita harus diisi");
			top.location="home.php?menu=input_berita";
			</script>
		<?php
}
if($judul=="")
{
		?>
			<script type="text/javascript">
			alert("Judul berita harus diisi");
			top.location="home.php?menu=input_berita";
			</script>
		<?php
}
if($isi=="")
{
		?>
			<script type="text/javascript">
			alert("Isis berita harus diisi");
			top.location="home.php?menu=input_berita";
			</script>
		<?php
}

else
{
	//$bk_gambar_size=filesize($file_gambar); // - file size code hal 233 dan echo berhasil simpan berita ganti javascript
	$path="img/file_gambar_name";
	$path2=$_FILES['file_gambar']['name'];
	copy($_FILES['file_gambar']['tmp_name'],"../img/$path2");

	$query="insert portal.isi_berita(id_berita,id_kategori,judul,tanggal,gambar,isi) values('$idberita','$kategori','$judul','$tgl','img/$path2','$isi')";
	$sql=mysql_query($query);
	
?>
	<script type="text/javascript">
	alert("Data berhasil disimpan");
	top.location="home.php?menu=data_berita";
	</script>
<?php
}
?>
