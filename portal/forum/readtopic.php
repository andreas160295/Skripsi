<?php 
include "../koneksi.php";
include "./layout-manager.php";
include "./content_function.php";
addview($_GET['cid'], $_GET['scid'], $_GET['tid']);
addreplies($_GET['cid'], $_GET['scid'], $_GET['tid']);
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

			replylink($_GET['cid'], $_GET['scid'], $_GET['tid']);			

		?>
	</div>
		

	<?php 
		disptopic($_GET['cid'], $_GET['scid'], $_GET['tid']);
		
		echo "
				<div class='content'>
				<p>All Replies (".countreplies($_GET['cid'], $_GET['scid'], $_GET['tid']).")
				</p>
				</div>";
					
		dispreplies($_GET['cid'], $_GET['scid'], $_GET['tid']);
	?>
	</div>
</body>


</html>


