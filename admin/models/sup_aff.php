<?php

	$q='DELETE `contenu_affiche` FROM `contenu_affiche`  WHERE `id`="'.$_GET['id_article'].'"';
	$result=mysql_query($q,$link);
	
	if($result)
	{
		$rapport='L\'article à bien été supprimé.';
		$view='views/rapport.php';
	}
	else
	{
		$erreur='Une erreur est survenue lors de la suppression.';
		$view='views/rapport.php';
	}

?>