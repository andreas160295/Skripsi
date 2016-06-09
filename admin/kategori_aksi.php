<?php
include'../koneksi.php';

//menyimpan nilai id kategori dari form
$idkategori=$_POST['idkategori'];

//menyimpan nilai kategori dari form
$kategori=$_POST['kategori'];

//........
$id=$_GET['id'];


if($_POST['simpan'])
{
	if($idkategori=="" or $kategori=="")
	{
	?>
	
		<script type="text/javascript">
		alert("Isian masih ada yang kosong");
		top.location="home.php?menu=kategori";
		</script>
	<?php
	}
	else
	{
		$query="insert into kategori(id_kategori,nama_kategori) values ('$idkategori','$kategori')";
		$sql=mysql_query($query);
		header('location:home.php?menu=kategori');
	}
}
		
		elseif($_POST['edit'])
		{
			$query="update kategori set nama_kategori='$kategori' where id_kategori='$idkategori'";
			$sql=mysql_query($query);
			header('location:home.php?menu=kategori');
		}
		
		else
		{
			$query="delete from kategori where id_kategori='$id'";
			$sql=mysql_query($query);
			header('location:home.php?menu=kategori');
		}
?>
