<?php
include'../koneksi.php';
error_reporting(0);
if(!isset($_SESSION['current_user']))
{
//link jika user gagal dilemparkan ke halaman login

header('location:index.php');
}
else
{
//memanggil fungsi tanggal
$tanggal=date("d-m-y");
//penambahan script edit


$cal=$_GET['cal'];
$sql=mysql_query("select * from isi_berita where id_berita='$cal'");
$array=mysql_fetch_array($sql);
?>


<html>

	<head>
		<title> Input Isi Artikel </title>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	</head>

	<body>

		<form name="isiberita" method="post" action="berita_simpan.php" enctype="multipart/form-data">
			
			<table width="500" height="300" border="1" align="center" class="formberita">
				<caption align="center">
				<h2>Input Artikel</h2>
				</caption>

				<tr>
					<td>Kode Berita</td>
					<td>
						<input type="text" name="idberita" onkeypress="return isnumberkey(event)" maxlength="5" value="<?=$array['id_berita'];?>"/>
					</td>
				</tr>

				<tr>
					<td>Kategori Berita</td>
					<td>
						<select name="kategori">
						<option value="KOSONG">....</option>
						
						<?php
								$sql=mysql_query("select * from kategori");
								while($kategori=mysql_fetch_array($sql))
								{
									if ($array['id_kategori'] == $kategori['id_kategori'])
									{
										$cek = " selected";
									}
									else
									{
										$cek="";
									}
									
									echo " <option value='$kategori[id_kategori]' $cek>$kategori[nama_kategori] </option>";
									
								}
						?>
						
						</select>
					</td>
				</tr>

				<tr>
					<td>Judul</td>
					<td>
						<input type="text" name="judul" maxlength="32" value="<?=$array['judul'];?>" size="40"  />
					</td>
				</tr>


				<tr>
					<td>Tanggal</td>
					<td>
						<input type="text" name="tanggal" readonly="" value="<?=$tanggal;?>"/>
					</td>
				</tr>

				<tr>
					<td>Gambar</td>
					<td>
						<input type="file" name="file_gambar" size="40"/>
					</td>
				</tr>

				<tr>
					<td>Isi Berita</td>
					<td>
						<textarea name="isi" rows="8" cols="40"><?=$array['isi'];?></textarea>
					</td>
				</tr>

				<tr>
					<td colspan="2">
						<input type="submit" name="simpan" value="SIMPAN"/>
						<input type="reset" name="batal" value="BATAL"/>
					</td>
				</tr>

			</table>

		</form>

	</body>

</html>




<?php
}
?>
