<?php

	$q='DELETE `contenu_temporaire` FROM `contenu_temporaire`  WHERE `id`="'.$_GET['id_article'].'"';
	$result=mysql_query($q,$link);
	
	if($result)
	{
		$rapport='L\'article à été supprimé avec succés.';
		$view='views/rapport.php';
	}
	else
	{
		$erreur='Une erreur est survenue lors de la suppression.';
		$view='views/rapport.php';
	}

?>