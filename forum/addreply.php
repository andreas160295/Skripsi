<?php
session_start();
include "../koneksi.php";

	$comment=nl2br(addslashes($_POST['comment']));
	$cid=$_GET['cid'];
	$scid=$_GET['scid'];
	$tid=$_GET['tid'];

	$insert = mysql_query("insert into portal.replies (cat_id, subcat_id, topic_id, author, comment, date_posted) values ('$cid', '$scid', '$tid', '$_SESSION[username]', '$comment', now())");

	if ($insert)
	{

		header("location:/portal/forum/readtopic.php?cid=".$cid."&scid=".$scid."&tid=".$tid."");
	
	}
	else
	{
			die(mysql_error());
	}

?>