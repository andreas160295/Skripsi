<?php
session_start();
include "../koneksi.php";

	$topic=addslashes($_POST['topic']);
	$content=nl2br(addslashes($_POST['content']));
	$cid=$_GET['cid'];
	$scid=$_GET['scid'];

	$insert = mysql_query("INSERT INTO portal.topics (cat_id,subcat_id,author,title,content,date_posted) values ('$cid','$scid','$_SESSION[username]', '$topic', '$content', now())");

	if ($insert)
	{
		header("location:/portal/forum/topics.php?cid=".$cid."&scid=".$scid."");
	
	}
	else
	{
			die(mysql_error());
	}

?>