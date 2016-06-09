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

	<?php 
	
		if(isset($_SESSION['username']))
		{
			echo "
					<div class='content'>
						<p>
							<a href='/portal/forum/newtopic.php?cid=".$_GET['cid']."&scid=".$_GET['scid']."'>add new topic</a>
						</p>
					</div>";	
		}

	?>	


	<div class="content">
		 <?php disptopics($_GET['cid'],$_GET['scid']); ?>
	</div>


</body>


</html>


