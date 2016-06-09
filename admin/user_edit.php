<?php
session_start();
include '../koneksi.php';

if (!isset($_SESSION['current_user']))
{
	header('location:index.php');	
}
else
{	

	//input editan data
	if (isset($_POST['buat']))
	{	
		
		$id=mysql_real_escape_string($_POST['id']);
		$user=mysql_real_escape_string($_POST['user']);
		$pass=mysql_real_escape_string($_POST['pass']);

		$sql1=mysql_query("select id_user from user where id_user='$id'");
		$lihatid=mysql_fetch_array($sql1);
		
		if ($lihatid['id_user'])
		{	
		$sql="update user set username='$user', password='$pass' where id_user='$id'";	
		
		$query=mysql_query($sql) or die(mysql_error());
		
		header('location:home.php?menu=data_user');
		}	
		else
		{
		?>
			<script>
			alert("inputan salah");
			</script>
		<?php } 
	}

//ambil data
$cal=$_GET['cal'];
$sql=mysql_query("select * from user where id_user='$cal'");
$array=mysql_fetch_array($sql);
	
?>



<html>

	<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<title> Form User </title>
	</head>

	<body>

	
	<form name="inputuser" method="post" >
	
	<table border="1" align="center" cellpadding="1" cellspacing="1">
	
	<caption><h2>Form Edit User</h2></caption>
	
		<tr>
			<td align="right">USER ID</td>
			
			<td align="left">
			<input type="text" name="id" readonly="" value="<?=$array['id_user'];?>" />
			</td>
		</tr>
		
		<tr>
			<td align="right">USERNAME</td>
			
			<td align="left">
			<input type="text" name="user" value="<?=$array['username'];?>"  />
			</td>
		</tr>
		
		<tr>
			<td align="right">PASSWORD</td>
			
			<td align="left">
			<input type="password" name="pass" value="<?=$array['password'];?>" />
			</td>
		</tr>
		
	
		<tr>
			<td colspan="2">
				
			<input type="submit" name="buat" value="EDIT"/>
				
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