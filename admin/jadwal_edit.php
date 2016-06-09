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
		$idjadwal=$_POST['idjadwal'];
		$tempat=$_POST['tempat'];
		$ibadah=$_POST['ibadah'];
		$hari=$_POST['hari'];
		$keterangan=$_POST['ket'];
		$mulai=$_POST['mulai'];
		$selesai=$_POST['selesai'];

		$sql1=mysql_query("select id_jadwal from jadwal where id_jadwal='$idjadwal'");
		$lihatid=mysql_fetch_array($sql1);
		
		if ($lihatid['id_jadwal'])
		{	
		$sql="update jadwal set id_jadwal='$idjadwal', id_tempat='$tempat', ibadah='$ibadah', hari='$hari', keterangan='$keterangan', mulai='$mulai', selesai='$selesai' where id_jadwal='$idjadwal'";	
		
		$query=mysql_query($sql) or die(mysql_error());
		
		header('location:home.php?menu=data_jadwal');
		}	
		else
		{
		?>
			<script>
			alert("inputan salah");
			</script>
		<?php } 
	}

//penambahan script edit
$cal=$_GET['cal'];
$sql=mysql_query("select * from jadwal where id_jadwal='$cal'");
$array=mysql_fetch_array($sql);
?>


<html>

	<head>
		<title> Input Isi Berita </title>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	</head>

	<body>
		
<link rel="stylesheet" type="text/css" href="../time/clockpicker.css" />
<link rel="stylesheet" type="text/css" href="../time/jquery-clockpicker.css" />


<script src="../time/jquery.js"></script>
<script src="../time/jquery-clockpicker.js"></script>



		<form name="isiberita" method="post" enctype="multipart/form-data">
		<form name="isiberita" method="post" enctype="multipart/form-data">
			
			<table width="500" height="300" border="1" align="center" class="formberita">
				<caption align="center">
				<h2>Edit Berita</h2>
				</caption>

				<tr>
					<td>Kode Jadwal</td>
					<td>
						<input type="text" name="idjadwal" readonly="" value="<?=$array['id_jadwal'];?>" />
					</td>
				</tr>

				<tr>
					<td>Kode Gereja</td>
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
					<td>Ibadah</td>
					<td>
						<input type="text" name="ibadah" maxlength="32" value="<?=$array['ibadah'];?>" />
					</td>
				</tr>
				
				<tr>
					<td>Hari</td>
					<td>
						<input type="text" name="hari" maxlength="10" value="<?=$array['hari'];?>" />
					</td>
				</tr>

				<tr>
					<td>Keterangan</td>
					<td>
						<input type="text" name="ket" value="<?=$array['keterangan'];?>" >
						</textarea>
					</td>
				</tr>				

				<tr>
					<td>Jam Mulai</td>
					<td>

					<div class="input-group clockpicker">
					<input type="text" name="mulai" class="form-control" readonly=""  value="<?=substr($array['mulai'],0,5);?>" >
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
					<td>Jam Selesai</td>
					<td>

					<div class="input-group clockpicker">							
					<input type="text" name="selesai" class="form-control" readonly=""  value="<?=substr($array['selesai'],0,5);?>" >
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
