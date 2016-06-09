<?php
include'../koneksi.php';

$subcatid=$_POST['idsubkategori'];
$catid=$_POST['kategori'];
$subcattitle=$_POST['namasubkategori'];
$subcatdesc=$_POST['namadescsubkategori'];


$sql1=mysql_query("select subcat_id from subcategories where subcat_id='$subcatid'");
$lihatid=mysql_fetch_array($sql1);
		
		if($subcatid=="")
		{
		?>
			<script type="text/javascript">
			alert("Id subkategori harus diisi");
			top.location="home.php?menu=forum_subkategori";
			</script>
		<?php
		}
		else
		if($subcattitle=="")
		{
		?>
			<script type="text/javascript">
			alert("Nama subkategori harus diisi");
			top.location="home.php?menu=forum_subkategori";
			</script>
		<?php
		}
		else
		if($subcatdesc=="")
		{
		?>
			<script type="text/javascript">
			alert("Subkategori deskripsi harus diisi");
			top.location="home.php?menu=forum_subkategori";
			</script>
		<?php
		}
		
		else
		if (!$lihatid['subcat_id'])
		{	
		$sql="insert into subcategories values('{$subcatid}', '{$catid}', '{$subcattitle}', '{$subcatdesc}')";	
		
		$query=mysql_query($sql) or die(mysql_error());
		header('location:home.php?menu=data_forum_subkategori');	
		}	
		else
		{
		?>
			<script>
			alert("data sudah ada");
			</script>
		<?php 
		header('location:home.php?menu=data_forum_subkategori');	
		} 
?>