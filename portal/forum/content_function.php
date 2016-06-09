<?php
include "../koneksi.php";

	function dispcategories()
	{
		
	
		$select = mysql_query("select * from categories");

		while($row=mysql_fetch_assoc($select))
		{

			echo "<table class='category-table'>";
			echo "
					<tr>
						<td class='main-category' colspan='2'>
							".$row['cat_title']."
						</td>
					</tr>";
			dispsubcategories($row['cat_id']);
			echo "</table>";
			
		}

	}

	
	function dispsubcategories($parent_id)
	{
	
		$select=mysql_query("select cat_id, subcat_id, subcat_title, subcat_desc from categories, subcategories where ($parent_id = categories.cat_id) AND ($parent_id = subcategories.parent_id)");
		
		echo "
				<tr>
					<th width='90%'>
						Categories
					</th>
					
					<th width='10%'>
						Topics
					</th>
				</tr>";

			if (! $select)
			{
   				die(mysql_error());
			}

		
		while ($row = mysql_fetch_assoc($select))
		{
		
			echo " 
					<tr>
						<td class='category_title'>
						<a href='/portal/forum/topics.php?cid=".$row['cat_id']."&scid=".$row['subcat_id']."'>".$row['subcat_title']."<br>";
			echo $row['subcat_desc']."</a>
						</td>";

			echo		"<td class='num-topics'>". 
							getnumtopics($parent_id, $row['subcat_id']).
						"</td>
					</tr>";
		}
		
	}

	function getnumtopics($cat_id, $subcat_id)
	{
		
		$select=mysql_query("select cat_id, subcat_id from topics where ".$cat_id." = cat_id AND ".$subcat_id." = subcat_id");

		return mysql_num_rows($select);

	}

	function disptopics($cid,$scid)
	{
		
		$select = mysql_query("select topic_id, author, title, date_posted, views, replies from categories, subcategories, topics where ($cid = topics.cat_id) AND ($scid = topics.subcat_id) AND ($cid = categories.cat_id) AND ($scid = subcategories.subcat_id) ORDER BY topic_id desc");

		if (mysql_num_rows($select) != 0)
		{
			echo "
					<table class='topic-table'>";
			echo "
					<tr>
						<th>
							Title
						</th>
			
						<th>
							Posted
						</th>
						
						<th>
							Date Posted
						</th>

						<th>
							Views
						</th>
			
						<th>
							Replies
						</th>
						
					</tr>";


				while ($row = mysql_fetch_array($select))
				{
					echo "
							<tr>
								<td> 
									<a href='/portal/forum/readtopic.php?cid=".$cid."&scid=".$scid."&tid=".$row['topic_id']."'>
									".$row['title']."</a>
								</td>
				
								<td>".$row['author'].
								"</td>
			
								<td>".$row['date_posted'].
								"</td>
	
								<td>".$row['views'].	
								"</td>
						
								<td>".$row['replies'].	
								"</td>
								
							</tr>";
				}

			echo "</table>";
				
		}
		else
		{
			echo "<p>This category has no topics yet ! <a href='/portal/forum/newtopic.php?cid=".$cid."&scid=".$scid."'>
					add the very first topic!</p>"; 
		}
	}

	function disptopic($cid, $scid, $tid)
	{
	
		$select = mysql_query("select categories.cat_id, subcategories.subcat_id, topics.topic_id, author, title, content, date_posted FROM categories, subcategories, topics WHERE ($cid = categories.cat_id) AND ($scid = subcategories.subcat_id) AND ($tid = topics.topic_id)");

		if (!$select) 
			{
  				die('Invalid query: ' . mysql_error());
			}

		$row = mysql_fetch_array($select);
	
		echo nl2br("
				<div class='content'> <h2 class='title'>".$row['title']."</h2> <p>".$row['author']."\n".$row['date_posted']."</p>
				</div>");

		echo 	"<div class='content'> <p>".$row['content']."</p></div>";		
	}
	
	//function add increment view
	function addview($cid, $scid, $tid)
	{
		$update=mysql_query("update topics set views = views + 1 where cat_id = ".$cid." AND subcat_id = ".$scid." AND topic_id = ".$tid."");
		if (!$update) 
			{
  				die('Invalid query: ' . mysql_error());
			}
	}
	
	function addreplies($cid, $scid, $tid)
	{
		$select = mysql_query("select cat_id, subcat_id, topic_id from replies where ".$cid." = cat_id AND ".$scid." = subcat_id AND ".$tid." = topic_id");
		$komentar=mysql_num_rows($select);	
		
		$update=mysql_query("update topics set replies = '$komentar' where cat_id = ".$cid." AND subcat_id = ".$scid." AND topic_id = ".$tid."");
		if (!$update) 
			{
  				die('Invalid query: ' . mysql_error());
			}
	}
	

	//function reply
		
	//reply link
	function replylink($cid, $scid, $tid)
	{
		echo "
				<p> <a href='/portal/forum/replyto.php?cid=".$cid."&scid=".$scid."&tid=".$tid."'>Reply to this post</a> </p>";
	}

	function replytopost($cid, $scid, $tid)
	{
		echo "
				<div class='content'>
					<form action='/portal/forum/addreply.php?cid=".$cid."&scid=".$scid."&tid=".$tid."' method='POST'>
					<p>Komentar: </p>
					<textarea cols='80' rows='5' id='comment' name='comment'></textarea> <br>
					
					<input type='submit' value='add comment' />
					</form>
				</div>";
	}

	function dispreplies($cid, $scid, $tid)
	{
		$select = mysql_query("select replies.author, comment, replies.date_posted from categories, subcategories, topics, replies WHERE ($cid = replies.cat_id) AND ($scid = replies.subcat_id) AND ($tid = replies.topic_id) AND ($cid = categories.cat_id) AND ($scid = subcategories.subcat_id) AND ($tid = topics.topic_id) ORDER BY reply_id desc");
		
		if (mysql_num_rows($select) != 0 )
		{
			echo "
					<div class='content'> <table class='reply-table'>";
			
			while ($row=mysql_fetch_array($select))
			{
				echo ("
								<tr>
									<th width='15%'>".$row['author']."
									</th>
								
									<td>".$row['date_posted']." <br> ".$row['comment']."\n\n
									</td>
								</tr>");
			}
				echo " </table>
						</div>";

		}
	}

	function countreplies($cid, $scid, $tid)
	{
		$select = mysql_query("select cat_id, subcat_id, topic_id from replies where ".$cid." = cat_id AND ".$scid." = subcat_id AND ".$tid." = topic_id");

		return mysql_num_rows($select);	
	}

?>