<?php

include'../koneksi.php';

if(!isset($_SESSION['current_user']))
{
//link jika user gagal dilemparkan ke halaman login

header('location:index.php');
}
else
{



//input editan data
	if (isset($_POST['simpan']))
	{	
		$idjadwal=$_POST['idkegiatan'];
		$kegiatan=$_POST['kegiatan'];
		$komunitas=$_POST['komunitas'];
		$tempat=$_POST['tempat'];
		$pelayan=$_POST['pelayan'];
		$hari=$_POST['hari'];
		$waktu=$_POST['jam'];

		$sql1=mysql_query("select id_kegiatan from kegiatan_komunitas where id_kegiatan='$idjadwal'");
		$lihatid=mysql_fetch_array($sql1);
		
		if ($lihatid['id_kegiatan'])
		{	
		$sql="update kegiatan_komunitas set nama_kegiatan='$kegiatan', id_komunitas='$komunitas', id_tempat='$tempat', id_pelayan='$pelayan', hari='$hari', waktu='$waktu' where id_kegiatan='$idjadwal'";	
		
		$query=mysql_query($sql) or die(mysql_error());
		
		header('location:home.php?menu=data_komunitas_jadwal');
		}	
		else
		{
		?>
			<script>
			alert("inputan salah");
			</script>
		<?php } 
	}

//baca data
$cal=$_GET['cal'];
$sql=mysql_query("select * from kegiatan_komunitas where id_kegiatan='$cal'");
$array=mysql_fetch_array($sql);

?>


<html>

	<head>
		<title> Input Jadwal Komunitas</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	</head>

	<body>
		
<link rel="stylesheet" type="text/css" href="../time/clockpicker.css" />
<link rel="stylesheet" type="text/css" href="../time/jquery-clockpicker.css" />


<script src="../time/jquery.js"></script>
<script src="../time/jquery-clockpicker.js"></script>



		<form name="jadwal_komunias" method="post" enctype="multipart/form-data">
			
			<table width="500" height="300" border="1" align="center" class="formberita">
				<caption align="center">
				<h2>Input Jadwal</h2>
				</caption>

				<tr>
					<td>Id Jadwal</td>
					<td>
						<input type="text" name="idkegiatan" readonly="" value="<?=$array['id_kegiatan'];?>" />
					</td>
				</tr>
				
				<tr>
					<td>Nama Kegiatan</td>
					<td>
						<input type="text" name="kegiatan" maxlength="32" value="<?=$array['nama_kegiatan'];?>" />
					</td>
				</tr>

				<tr>
					<td>Nama Komunitas</td>
					<td>
						<select name="komunitas">
						<option value="KOSONG">....</option>
						
							<?php
								$sql=mysql_query("select * from komunitas");
								while($komunitas=mysql_fetch_array($sql))
								{
									if ($array['id_komunitas'] == $komunitas['id_komunitas'])
									{
										$cek = " selected";
									}
									else
									{
										$cek="";
									}
									
									echo " <option value='$komunitas[id_komunitas]' $cek>$komunitas[nama_komunitas] </option>";
								}
							?>
							
						</select>
					</td>
				</tr>
				
				<tr>
					<td>Nama Pelayan</td>
					<td>
						<select name="pelayan">
						<option value="KOSONG">....</option>
						
							<?php
								$sql=mysql_query("select * from pelayan");
								while($pelayan=mysql_fetch_array($sql))
								{
									if ($array['id_pelayan'] == $pelayan['id_pelayan'])
									{
										$cek = " selected";
									}
									else
									{
										$cek="";
									}
									
									echo " <option value='$pelayan[id_pelayan]' $cek>$pelayan[nama_pelayan] </option>";
								}
							?>
							
						</select>
					</td>
				</tr>
				
				<tr>
					<td>Nama Tempat</td>
					<td>
						<select name="tempat">
						<option value="KOSONG">....</option>
						
							<?php
								$sql=mysql_query("select * from tempat");
								while($tempat=mysql_fetch_array($sql))
								{
									if ($array['id_tempat'] == $tempat['id_tempat'])
									{
										$cek = " selected";
									}
									else
									{
										$cek="";
									}
									echo " <option value='$tempat[id_tempat]' $cek>$tempat[nama_tempat] </option>";
								}
							?>
							
						</select>
					</td>
				</tr>
				
				<tr>
					<td>Hari</td>
					<td>
						<input type="text" name="hari" maxlength="10" value="<?=$array['hari'];?>" />
					</td>
				</tr>

				<tr>
					<td>Jam</td>
					<td>

					<div class="input-group clockpicker">
					<input type="text" name="jam" class="form-control" readonly="" value="<?=substr($array['waktu'],0,5);?>" >
					<span class="input-group-addon">
					<span class="glyphicon glyphicon-time"></span>
					</span>
					</div>
					<script type="text/javascript">
					$('.clockpicker').clockpicker({
					placement: 'top',
					align: 'left',
					donetext: 'masukan'
					});
					</script>


					</td>
				</tr>

				<tr>
					<td colspan="2">
						<input type="submit" name="simpan" value="SIMPAN"/>
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
