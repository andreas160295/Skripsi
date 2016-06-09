<?php 
include "../koneksi.php";
include "./layout-manager.php";
include "./content_function.php";
?>


<html>

<head>
	<title> Forum GBI </title>
	<link href="style/style.css" type="text/css" rel="stylesheet"/>
</head>

<body>

	<div class="pane">
		<div class="header"> <h1> <a href="index.php">Forum GBI</a></h1>
		</div>

		<div class="loginpane">
			<?php
				session_start();
				if(isset($_SESSION['username']))
				{
					welcomemessage();
					logout();
				}
				else
				{
					loginform();
				}


			?>	

	</div>

	<div class="forumdesc">
		<p> Selamat datang di forum GBI SC</p>
	</div>




	<div class="content">
		<?php 

			if (isset($_SESSION['username']))
			{
				echo"
						<form action='/portal/forum/addnewtopic.php?cid=".$_GET['cid']."&scid=".$_GET['scid']."' method='POST'>
						<p>Judul Topik: </p>
						<input type='text' id='topic'  name='topic' maxlength='32' size='100'/>
						<p>Isi Konten: </p>
						<textarea id='content' name='content'> </textarea> <br/>
						<input type='submit' value='add new post'/>
						</form>";
			}
			else
			{

				echo "<p>Harap login terlebih dahulu!.</p>";
			
			}
		?>
	</div>


</body>


</html>


