<?php
include '../koneksi.php';

if (!isset($_SESSION['current_user']))
{
	header('location:index.php');	
}
else
{
?>

<head>
<title>Data Komunitas</title>
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>

	
<body>

	<table width="500" border="1" align="center" class="datakategori">
	
	<caption align="center">
		<h2>Data Komunitas</h2>
	</caption>
	
	<th>ID KOMUNITAS</th>
	<th>NAMA KOMUNITAS</th>
	<th>AKSINYA</th>

	<?php
	$sql=mysql_query("select * from komunitas");
	while($tampil=mysql_fetch_array($sql))
	{
	?>			
		
	<tr>
		<td> <?=$tampil['id_komunitas'];?> </td>
		<td> <?=$tampil['nama_komunitas'];?> </td>

		<td>
			<a href='home.php?menu=edit_komunitas&cal=<?=$tampil['id_komunitas'];?>'> EDIT //</a>
			<a href='komunitas_hapus.php?id=hapus&cal=<?=$tampil['id_komunitas'];?>'> HAPUS </a>
		</td>	
	</tr>
			
	<?php
	}
	?>
	
	</table>
		
<?php
}
?>