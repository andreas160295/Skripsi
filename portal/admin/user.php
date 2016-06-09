<?php

include '../koneksi.php';

if (!isset($_SESSION['current_user']))
{
	header('location:index.php');	
}
else
{	
?>


<html>

	<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<title> Form User </title>
	</head>

	<body>
	
	<form name="inputuser" method="post" action="user_simpan.php" >
	
	<table border="1" align="center" cellpadding="1" cellspacing="1">
	
	<caption><h2>Form User</h2></caption>
	
		<tr>
			<td align="right">USER ID</td>
			
			<td align="left">
			<input type="text" name="id" />
			</td>
		</tr>
		
		<tr>
			<td align="right">USERNAME</td>
			
			<td align="left">
			<input type="text" name="user" />
			</td>
		</tr>
		
		<tr>
			<td align="right">PASSWORD</td>
			
			<td align="left">
			<input type="password" name="pass" />
			</td>
		</tr>
		
	
		<tr>
			<td colspan="2">
				
			<input type="submit" name="buat" value="SIMPAN"/>	
				
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
