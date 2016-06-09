<?php
{
include '../koneksi.php';	

		
		
		$id=($_POST['idpelayan']);
		$nama=($_POST['namapelayan']);
		$jabatan=($_POST['jabatan']);
		$kontak=($_POST['kontak']);

		$sql1=mysql_query("select id_pelayan from pelayan where id_pelayan='$id'");
		$lihatid=mysql_fetch_array($sql1);
		
		if($id=="")
		{
		?>
			<script type="text/javascript">
			alert("Id pelayan harus diisi");
			top.location="home.php?menu=pelayan";
			</script>
		<?php
		}
		else
		if($nama=="")
		{
		?>
			<script type="text/javascript">
			alert("Nama pelayan harus diisi");
			top.location="home.php?menu=pelayan";
			</script>
		<?php
		}
		else
		if($kontak=="")
		{
		?>
			<script type="text/javascript">
			alert("Kontak pelayan harus diisi");
			top.location="home.php?menu=pelayan";
			</script>
		<?php
		}
		else
		if (!$lihatid['id_pelayan'])
		{	
		$sql="insert into pelayan values('{$id}', '{$jabatan}', '{$nama}' , '{$kontak}')";	
		
		$query=mysql_query($sql) or die(mysql_error());
		header('location:home.php?menu=data_pelayan');	
		}	
		else
		{
		?>
			<script>
			alert("data sudah ada");
			</script>
		<?php 
		header('location:home.php?menu=data_pelayan');	
		} 
	
}