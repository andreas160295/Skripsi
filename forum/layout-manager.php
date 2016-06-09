<?php

	function loginform()
	{
	
		echo "
				<form action='/portal/forum/validatelogin.php' method='POST'>
				
					<p>Username :</p>
					<input type='text' id='usernameinput' name='usernameinput'/>

					<p>Password :</p>
					<input type='password' id='passwordinput' name='passwordinput'/>
					
					<input type='submit' value='login'/>
				</form>";
	}

	function welcomemessage()
	{

		echo nl2br ("<p> Welcome ".$_SESSION['username']."!\n Looking good today</p>");

	}

	function logout()
	{

		echo "
				<form action='/portal/forum/logout.php' method='GET'>
				<input type='submit' value='logout'/>
				</form>";
	
	}

?>