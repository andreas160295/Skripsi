<?php

include'../koneksi.php';

if(!isset($_SESSION['current_user']))
{
//link jika user gagal dilemparkan ke halaman login

header('location:index.php');
}
else
{
?>


<html>

	<head>
		<title> Input Jadwal Ibadah </title>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	</head>

	<body>
		
<link rel="stylesheet" type="text/css" href="../time/clockpicker.css" />
<link rel="stylesheet" type="text/css" href="../time/jquery-clockpicker.css" />


<script src="../time/jquery.js"></script>
<script src="../time/jquery-clockpicker.js"></script>



		<form name="isiberita" method="post" action="jadwal_simpan.php" enctype="multipart/form-data">
			
			<table width="500" height="300" border="1" align="center" class="formberita">
				<caption align="center">
				<h2>Input Jadwal Ibadah</h2>
				</caption>

				<tr>
					<td>Kode Jadwal</td>
					<td>
						<input type="text" name="idjadwal" onkeypress="return isnumberkey(event)" maxlength="5" />
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
									echo " <option value='$tempat[id_tempat]' $cek>$tempat[nama_tempat] </option>";
								}
							?>
							
						</select>
					</td>
				</tr>

				<tr>
					<td>Ibadah</td>
					<td>
						<input type="text" name="ibadah" maxlength="32"  />
					</td>
				</tr>
				
				<tr>
					<td>Hari</td>
					<td>
						<input type="text" name="hari" maxlength="10"  />
					</td>
				</tr>

				<tr>
					<td>Keterangan</td>
					<td>
						<input type="text" name="ket"  >
						</textarea>
					</td>
				</tr>				

				<tr>
					<td>Jam Mulai</td>
					<td>

					<div class="input-group clockpicker">
					<input type="text" name="mulai" class="form-control" readonly="" >
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
					<input type="text" name="selesai" class="form-control" readonly="" >
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
