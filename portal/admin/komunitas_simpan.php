<?php
{
include '../koneksi.php';	

		
		
		$id=($_POST['idkomunitas']);
		$nama=($_POST['namakomunitas']);

		$sql1=mysql_query("select id_komunitas from komunitas where id_komunitas='$id'");
		$lihatid=mysql_fetch_array($sql1);
		
		if($id=="")
		{
		?>
			<script type="text/javascript">
			alert("Id komunitas harus diisi");
			top.location="home.php?menu=komunitas";
			</script>
		<?php
		}
		else
		if($nama=="")
		{
		?>
			<script type="text/javascript">
			alert("Nama komunitas harus diisi");
			top.location="home.php?menu=komunitas";
			</script>
		<?php
		}
		
		else
		if (!$lihatid['id_komunitas'])
		{	
		$sql="insert into komunitas values('{$id}', '{$nama}')";	
		
		$query=mysql_query($sql) or die(mysql_error());
		header('location:home.php?menu=data_komunitas');	
		}	
		else
		{
		?>
			<script>
			alert("data sudah ada");
			</script>
		<?php 
		header('location:home.php?menu=data_komunitas');	
		} 
	
}