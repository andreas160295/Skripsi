<?php 
include "../koneksi.php";
include "./layout-manager.php";
include "./content_function.php";
addview($_GET['cid'], $_GET['scid'], $_GET['tid']);
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
	
		<?php
			if(!isset($_SESSION['username']))
			{
				echo "<p>Harap login terlebih dahulu!</p>";
			}		
		?>

	</div>

	<?php
		if(isset($_SESSION['username']))
		{
			replytopost($_GET['cid'], $_GET['scid'], $_GET['tid']);
		}
	?>
		

	<div class="content">

		<?php disptopic($_GET['cid'], $_GET['scid'], $_GET['tid']); ?>

	</div>

	</div>

</body>


</html>


