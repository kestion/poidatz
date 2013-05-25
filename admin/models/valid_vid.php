<?php
	
	$q='UPDATE `videos` SET `temp`="null" WHERE `id`="'.$_GET['id_video'].'"';
	$result=mysql_query($q,$link);
	
	if($result)
	{
		$rapport='La video est visible sur le site';
		$view='views/rapport.php';
	}
	else
	{
		$erreur='Une erreure est survenue.';
		$view='views/rapport.php';
	}

?>