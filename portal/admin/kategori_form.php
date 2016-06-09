<?php
include'../koneksi.php';
?>

<html>

<head>
<title>Form Kategori</title>
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>

	
<body>

<form name="kategori" method="post" action="kategori_aksi.php">

<table width="350" height="100" border="1" align="center" class="formkategori">
			
<caption align="center">
<h2>Kategori Berita</h2>
</caption>

<tr>
<td>ID KATEGORI</td>
<td><input type="text" name="idkategori"/></td>
</tr>

<tr>
<td>NAMA KATEGORI</td>
<td><input type="text" name="kategori"/></td>
</tr>

<tr>
<td colspan="2">
<input type="submit" name="simpan" value="SIMPAN"/>
<input type="reset" name="batal" value="BATAL"/>	
</td>
</tr>				

</table>				

</form>		

<br />
		
<table width="500" border="1" align="center" class="datakategori">
		
<th>ID KATEGORI</th>
<th>NAMA KATEGORI</th>
<th>AKSINYA</th>

<?php
$sql=mysql_query("select * from kategori");
while($tampil=mysql_fetch_array($sql))
{
?>			
	
<tr>
<td> <?=$tampil['id_kategori'];?> </td>
<td> <?=$tampil['nama_kategori'];?> </td>

<td>
<a href='home.php?menu=kategori&id=<?=$tampil['id_kategori'];?>'> EDIT //</a>
<a href='kategori_aksi.php?id=<?=$tampil['id_kategori'];?>'> HAPUS </a>
</td>	
			</tr>
			
				<?php
					}
				?>
		</table>
<!--/body-->
		

			<?php
				if(isset($_GET['id']))
				{
					$id=$_GET['id'];
					$sql=mysql_query("select * from kategori where id_kategori='$id'");
					$tampil=mysql_fetch_array($sql);
				?>

					<form name="isiberita" method="post" action="kategori_aksi.php">
					<table width="350" height="100" border="1" align="center" class="formkategori">
					
						<caption align="center">
							<h2>Editing Kategori Berita</h2>
						</caption>
					
						<tr>
							<td>ID KATEGORI</td>
							<td>
								<input type="text" name="idkategori" readonly="" value="<?=$tampil['id_kategori'];?>"/>								
							</td>
						</tr>

						<tr>
							<td>NAMA KATEGORI</td>
							<td>
								<input type="text" name="kategori" value="<?=$tampil['nama_kategori'];?>"/>								
							</td>
						</tr>						

						<tr>
							<td colspan="2">
								<input type="submit" name="edit" value="EDIT"/>
								<input type="reset" name="batal" value="BATAL"/>
							</td>
						</tr>

					</table>
				
					</form>
				<?php
				}
				else
				{
				?>
	</body>
</html>
				<?php
				}
				?>	