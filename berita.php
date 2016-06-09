<link href="css/style.css" rel="stylesheet" type="text/css">

<?php
include 'koneksi.php';

$table1="isi_berita";
$table2="kategori";

$id=3;

$hal=isset($_GET['hal'])?$_GET['hal']:1;
if(!isset($_GET['hal']))
	{
	$page=1;
	}
	
	else
	{
	$page=$_GET['hal'];
	}
	
	
$max_results=2;

$from=(($page * $max_results) - $max_results);

$sql=mysql_query("select * from $table1,$table2 where $table1.id_kategori=$id  and $table1.id_kategori=$table2.id_kategori order by tanggal desc limit $from,$max_results");

echo "<h1 style=text-align:left>Berita</h1>";

while($tampil=mysql_fetch_array($sql))
{
	$data=substr($tampil['isi'],0,200);
?>
	
	<div class="box">
	<p align="justify">
	<img src="<?=$tampil['gambar'];?>"align="left">
	<font valign="top">
	<strong> <font size="5"> <?php echo $tampil['judul'];?> </font> </strong>
	<br />
	<?php echo $data;?>
	
 	<a href="index.php?menu=detail_berita&id=<?=$tampil['id_berita'];?>"><br /><p align="right">Selengkapnya</p></a>
	
		</font></p></div><br>
<?php
}

$total_results=mysql_result(mysql_query("select count(*) as num from $table1 where $table1.id_kategori=$id"),0);

$total_pages= ceil($total_results / $max_results);


	echo "<center>Pilih Halaman<br />";

	if($hal > 1)
		{ 
			$prev=($page - 1);
			echo "<a href=$_SERVER[PHP_SELF]?menu=berita&hal=$prev><-Sebelumnya</a>";
		}
	
	for($i=1; $i<=$total_pages; $i++)
		{
			if(($hal)==$i)
			{
				echo "$i";
			}
			else
			{
				echo "<a href=$_SERVER[PHP_SELF]?menu=berita&hal=$i>$i</a>";
			}
		}
		
			if($hal < $total_pages)
			{
				$next=($page + 1);
				echo "<a href=$_SERVER[PHP_SELF]?menu=berita&hal=$next>Selanjutnya-></a>";
			}
	echo"</center>";
	
?>