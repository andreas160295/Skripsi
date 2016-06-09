<?php
{
include '../koneksi.php';	

		
		
		$id=($_POST['idjabatan']);
		$nama=($_POST['namajabatan']);

		$sql1=mysql_query("select id_jabatan from jabatan where id_jabatan='$id'");
		$lihatid=mysql_fetch_array($sql1);
		
		if($id=="")
		{
		?>
			<script type="text/javascript">
			alert("Id jabatan harus diisi");
			top.location="home.php?menu=jabatan";
			</script>
		<?php
		}
		else
		if($nama=="")
		{
		?>
			<script type="text/javascript">
			alert("Nama jabatan harus diisi");
			top.location="home.php?menu=jabatan";
			</script>
		<?php
		}
		
		else
		if (!$lihatid['id_jabatan'])
		{	
		$sql="insert into jabatan values('{$id}', '{$nama}')";	
		
		$query=mysql_query($sql) or die(mysql_error());
		header('location:home.php?menu=data_jabatan');	
		}	
		else
		{
		?>
			<script>
			alert("data sudah ada");
			</script>
		<?php 
		header('location:home.php?menu=data_jabatan');	
		} 
	
}