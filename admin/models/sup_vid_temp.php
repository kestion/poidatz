<?php

	$q='DELETE `videos` FROM `videos`  WHERE `id`="'.$_GET['id_video'].'"';
	$result=mysql_query($q,$link);
	
	if($result)
	{
		$rapport='La vidéo à été supprimé avec succés.';
		$view='views/rapport.php';
	}
	else
	{
		$erreur='Une erreur est survenue lors de la suppression.';
		$view='views/rapport.php';
	}

?>