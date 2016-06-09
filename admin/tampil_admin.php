<?php
include'../koneksi.php';

if(!isset($_SESSION['current_user']))
{
//link jika user gagal dilemparkan ke halaman login

header('location:index.php');

}
else
{

$temp=$_SESSION['current_user'];


$sql=mysql_query("select * from admin where username='$temp'");
$query=mysql_fetch_array($sql);

?>

<html>

<head>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<title>USER TAMPIL </title>
</head>


<body>

<table border="1" width="50" height="50">
	
	<tr>
		<td width="60">ID
		</td>
		
		<td>
			<input type="text" value="<?=$query['id_admin'];?>" readonly=""/> 
		</td>
	</tr>
	
	<tr>
		<td>NAMA 
		</td>
		
		<td>
			<input type="text" value="<?=$query['username'];?>" readonly=""/>
		</td>
	</tr>
	
</table>

</body>

</html>

<?php
}
?>