<?php
include '../koneksi.php';	

		
		
		$id=($_POST['idtempat']);
		$tempat=($_POST['tempat']);
		$alamat=($_POST['alamat']);

		
		$sql1=mysql_query("select id_tempat from tempat where id_tempat='$id'");
		$lihatid=mysql_fetch_array($sql1);

		if($id=="")
		{
		?>
			<script type="text/javascript">
			alert("Id tempat harus diisi");
			top.location="home.php?menu=tempat";
			</script>
		<?php
		}
		
		if($tempat=="")
		{
		?>
			<script type="text/javascript">
			alert("Nama tempat harus diisi");
			top.location="home.php?menu=tempat";
			</script>
		<?php
		}
		
		if($alamat=="")
		{
		?>
			<script type="text/javascript">
			alert("Alamat tempat harus diisi");
			top.location="home.php?menu=tempat";
			</script>
		<?php
		}
		
		else
		if (!$lihatid['id_tempat'])
		{
			
		$sql="insert into tempat values('{$id}', '{$tempat}' , '{$alamat}')";	
		
		$query=mysql_query($sql) or die(mysql_error());
		header('location:home.php?menu=data_tempat');	
		}	
		else
		{	
		?>
			<script>
			alert("data sudah ada");
			</script>
		<?php 
		header('location:home.php?menu=data_tempat');	
		} 
	

?>