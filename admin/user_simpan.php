<?php
{
include '../koneksi.php';	

		
		
		$id=mysql_real_escape_string($_POST['id']);
		$user=mysql_real_escape_string($_POST['user']);
		$pass=mysql_real_escape_string($_POST['pass']);

		$sql1=mysql_query("select id_user from user where id_user='$id'");
		$lihatid=mysql_fetch_array($sql1);
		
		if (!$lihatid['id_user'])
		{	
		$sql="insert into user values('{$id}', '{$user}' , '{$pass}')";	
		
		$query=mysql_query($sql) or die(mysql_error());
		header('location:home.php?menu=data_user');	
		}	
		else
		{
		?>
			<script>
			alert("data sudah ada");
			</script>
		<?php 
		header('location:home.php?menu=data_user');	
		} 
	
}