<?php
{
include '../koneksi.php';	

		
		
		$id=($_POST['idkategori']);
		$nama=($_POST['namakategori']);

		$sql1=mysql_query("select cat_id from categories where cat_id='$id'");
		$lihatid=mysql_fetch_array($sql1);
		
		if($id=="")
		{
		?>
			<script type="text/javascript">
			alert("Id kategori harus diisi");
			top.location="home.php?menu=forum_kategori";
			</script>
		<?php
		}
		
		if($nama=="")
		{
		?>
			<script type="text/javascript">
			alert("Nama kategori harus diisi");
			top.location="home.php?menu=forum_kategori";
			</script>
		<?php
		}
		
		else
		if (!$lihatid['cat_id'])
		{	
		$sql="insert into categories values('{$id}', '{$nama}')";	
		
		$query=mysql_query($sql) or die(mysql_error());
		header('location:home.php?menu=data_forum_kategori');	
		}	
		else
		{
		?>
			<script>
			alert("data sudah ada");
			</script>
		<?php 
		header('location:home.php?menu=data_forum_kategori');	
		} 
	
}