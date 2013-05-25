<?php
function recup_vid_auteur()
	{
		global $link;
		$test=null;
		$videos =array();
		$q='SELECT * FROM `videos`';
		$result=mysql_query($q,$link);
		
		if($result!=null)
		{
			while($rows=mysql_fetch_assoc($result))
			{
			array_push($videos, $rows['url']);
			}
			
		}
		else
		{
			$videos=null;
		}
		
		return $videos;
	}
	
		$videos=recup_vid_auteur();

	if($videos==null)
	{
		$erreur='Une erreur est survenue.';
	
	}
	else
	{
		include 'views/videos.php';
	}

	if(isset($views))
		include $view;
	
?>