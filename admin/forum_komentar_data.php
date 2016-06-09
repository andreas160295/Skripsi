<?php
include '../koneksi.php';

if (!isset($_SESSION['current_user']))
{
	header('location:index.php');	
}
else
{
//combo box
$kategori = isset($_POST['cmbkategori']) ? $_POST['cmbkategori'] : '';
$subkategori = isset($_POST['cmbsub']) ? $_POST['cmbsub'] : '';
$topik = isset($_POST['cmbtopik']) ? $_POST['cmbtopik'] : '';

//filter
$filterSQL	= "";
if(isset($_POST['btnPilih1'])) 
	{
		$filterSQL = " WHERE replies.cat_id = '$kategori'";
	}
elseif(isset($_POST['btnPilih2'])) 
	{
		$filterSQL = " WHERE replies.cat_id = '$kategori' AND replies.subcat_id = '$subkategori'";
	}
elseif(isset($_POST['btnPilih3'])) 
	{
		$filterSQL = " WHERE replies.cat_id = '$kategori' AND replies.subcat_id = '$subkategori' AND replies.topic_id = '$topik'";
	}
else 
	{
		$filterSQL = "";
	}
	
//pembagian halaman
$baris	= 10;
$hal 	= isset($_GET['hal']) ? $_GET['hal'] : 1;
$pageSql= "SELECT * FROM replies $filterSQL ";
$pageQry= mysql_query($pageSql) or die ("error paging: ".mysql_error());
$jumlah	= mysql_num_rows($pageQry);
$maks	= ceil($jumlah/$baris);
$mulai	= $baris * ($hal-1); 
?>

<html>

	<head>
		<title>Lihat Komentar</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	</head>
	
	
	<table width="900" border="0" cellspacing="1" cellpadding="3">
		<tr>
			<td align="center"><h2>Data Komentar</h2></td>
		</tr>
		
		<tr>
			<td>
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self" id="form1">
				<table width="700" border="0" cellspacing="1" cellpadding="3">
					
					<tr>
					  <th colspan="3" bgcolor="#CCCCCC"><strong><center>FILTER DATA </center></strong></th>
					</tr>
					
					
					<tr>
					  <td width="110"><b>Pilih Kategori </b></td>
					  <td width="10"><b>:</b></td>
					  <td>
						<select name="cmbkategori">
							<option value="KOSONG">....</option>
							<?php
							$dataSql = "SELECT * FROM categories ORDER BY cat_title";
							$dataQry = mysql_query($dataSql) or die ("Gagal Query".mysql_error());
							
							while ($dataRow = mysql_fetch_array($dataQry)) 
							{
								if ($dataRow['cat_id'] == $kategori) 
								{
									$cek = " selected";
								} 
								else 
								{ 
									$cek=""; 
								}
								
								echo "<option value='$dataRow[cat_id]' $cek>$dataRow[cat_title]</option>";
							}
							?>
						</select>
						<input name="btnPilih1" type="submit" value=" Pilih " />
					 </td>
					</tr>

					<tr>
					  <td><b>Pilih Subkategori</b></td>
					  <td><b>:</b></td>
					  <td>
						<select name="cmbsub">
							<option value="KOSONG">....</option>
							<?php
							$dataSql = "SELECT subcategories.* FROM categories, subcategories 
									WHERE categories.cat_id = subcategories.parent_id
									AND subcategories.parent_id = '$kategori'
									";
							$dataQry = mysql_query($dataSql) or die ("Gagal Query".mysql_error());
							while ($dataRow = mysql_fetch_array($dataQry)) 
							{
								if ($dataRow['subcat_id'] == $subkategori) 
								{
									$cek = " selected";
								} 
								else
								{ 
									$cek=""; 
								}
								echo "<option value='$dataRow[subcat_id]' $cek> $dataRow[subcat_title]</option>";
							}
							?>
						</select>
						<input name="btnPilih2" type="submit" value=" Pilih " />
						</td>
					</tr>
					
					<tr>
					  <td><b>Pilih Topik</b></td>
					  <td><b>:</b></td>
					  <td>
						<select name="cmbtopik">
							<option value="KOSONG">....</option>
							<?php
							$dataSql = "SELECT topics.* FROM topics, subcategories 
									WHERE topics.subcat_id = subcategories.subcat_id
									AND subcategories.subcat_id = '$subkategori'
									";
							$dataQry = mysql_query($dataSql) or die ("Gagal Query".mysql_error());
							while ($dataRow = mysql_fetch_array($dataQry)) 
							{
								if ($dataRow['topic_id'] == $topik) 
								{
									$cek = " selected";
								} 
								else
								{ 
									$cek=""; 
								}
								echo "<option value='$dataRow[topic_id]' $cek> $dataRow[title]</option>";
							}
							?>
						</select>
						<input name="btnPilih3" type="submit" value=" Pilih " />
						</td>
					</tr>
					
				</table>
				</form>
			</td>
		</tr>
		
		
		<tr>
			<td>&nbsp;</td>
		</tr>
		
		<tr>
			<td>
			<table class="databerita"  width="100%" border="0" cellspacing="1" cellpadding="3">
				<tr>
					<th align="center" width="5%" bgcolor="#CCCCCC"><strong>No</strong></th>
					<th align="center" width="10%" bgcolor="#CCCCCC"><strong>Nama Kategori</strong></th>
					<th align="center" width="27%" bgcolor="#CCCCCC"><strong>Nama Subkategori</strong></th>
					<th align="center" width="10%" bgcolor="#CCCCCC"><strong>Nama Topik</strong></th>
					<th align="center" width="15%" bgcolor="#CCCCCC"><strong>Id komentar</strong></th>
					<th align="center" width="7%" bgcolor="#CCCCCC"><strong>Pembuat</strong></th>
					<th align="center" width="7%" bgcolor="#CCCCCC"><strong>Tanggal Posting</strong></th>
					<th align="center" width="7%" bgcolor="#CCCCCC"><strong>Komentar</strong></th>
					
					<th colspan="2" align="center" bgcolor="#CCCCCC"><strong>Pilihan</strong></th>
				</tr>
		
				<?php
				
					// Skrip menampilkan data topik
					$mySql = "SELECT replies.*, categories.cat_title, subcategories.subcat_title, topics.title FROM replies
								LEFT JOIN categories ON replies.cat_id = categories.cat_id
								LEFT JOIN subcategories ON replies.subcat_id = subcategories.subcat_id
								LEFT JOIN topics ON replies.topic_id = topics.topic_id
								$filterSQL ORDER BY cat_id ASC  LIMIT $mulai, $baris "; 
					$myQry = mysql_query($mySql)  or die ("Query salah : ".mysql_error());
					$nomor  = $mulai; 
					while ($myData = mysql_fetch_array($myQry)) 
					{
						$nomor++;
						$Kode = $myData['reply_id'];
				
				?>
		
				<tr>
					<td align="center"> <?php echo $nomor; ?> </td>
					<td align="center"> <?php echo $myData['cat_title']; ?> </td>
					<td align="center"> <?php echo $myData['subcat_title']; ?> </td>
					<td align="center"> <?php echo $myData['title']; ?> </td>
					<td align="center"> <?php echo $myData['reply_id']; ?> </td>
					<td align="center"> <?php echo $myData['author']; ?> </td>
					<td align="center"> <?php echo $myData['date_posted']; ?> </td>
					<td align="center"> <?php echo $myData['comment']; ?> </td>
					
					<td>
						<a href="forum_komentar_hapus.php?id=hapus&cal=<?=$myData['reply_id'];?>" onclick="return confirm('Anda yakin menghapus Topik ini?')" > Hapus </a>
					</td>
				
				</tr>
				<?php } ?>
			</table>
			</td>
		</tr>
	</table>
	
	
	<table>
		  <tr>
			<td width="334"><b>Jumlah Data : <?php echo $jumlah; ?></b></td>
			
			<td width="351" align="right"><b>Hal : </b>
			<?php
				for ($h = 1; $h <= $maks; $h++) 
				{
					echo " <a href='home.php?menu=data_forum_komentar&hal=$h'>$h</a> ";
				}
			?>
			</td>
		  </tr>
	</table>
  
</html>

<?php
}
?>