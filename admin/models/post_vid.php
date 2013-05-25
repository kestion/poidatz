<?php

	$date=date("Y-m-d");
	$q='INSERT INTO `videos`(`date` , `url` , `id_auteur`, `temp`) VALUES ( "'.$date.'" , "'.mysql_real_escape_string($_POST['url']).'" , "'.$_SESSION['id'].'" , "1")';
	$result=mysql_query($q,$link);

	if($result)
	{
		$rapport='La vidéo a bien été enregistrée.';
		$view='views/rapport.php';
	}
	else 
	{
		$erreur='Une erreur est survenue.';
		$view='views/rapport.php';
	}
	
?>