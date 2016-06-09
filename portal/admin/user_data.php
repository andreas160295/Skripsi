<?php

include '../koneksi.php';

if (!isset($_SESSION['current_user']))
{
	header('location:index.php');	
}
else
{
	//tampilan jika user sudah masuk
	$sql=mysql_query("select * from user");
	
?>

<html>

	<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<title>DATA USER</title>
	</head>

	<body>
	
	
	<table border="1" align="center" width="600">
	
		<caption><h2>Data User</h2></caption>
	
		<th>USER ID</th>
		<th>USERNAME</th>
		<th>PASSWORD</th>
		<th colspan="2">AKSINYA</th>
		
		<?php
		$no=1;
		
		if (mysql_num_rows($sql))
		{
		while($aray=mysql_fetch_array($sql))
		{
		
			
		?>
		
		<tr bgcolor="00FFFF">
			<td> <?=$aray['id_user'];?> </td>
			<td> <?=$aray['username'];?> </td>
			<td> <?=$aray['password'];?> </td>
			
			
			<!--membuat link edit untuk mengalihkan ke link form-->
			<td>
				<a href="home.php?menu=edit_user&cal=<?=$aray['id_user'];?>">EDIT</a>
			</td>	
			
			<!--membuat link hapus-->
			<td>
				<a href="user_hapus.php?id=hapus&cal=<?=$aray['id_user'];?>">HAPUS</a>
			</td>
			
		</tr>
	
		
		
			
		
			
			<?php
			}
			}
			?>
			
			
			
			
		
	</table>
	
	</body>

</html>

<?php
}
?>