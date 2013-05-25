<?php

	$q='INSERT INTO  `contenu_temporaire` (`id_auteur`, `id_affiche` , `contenu` ,`id_zone` ,`date` ) VALUES ("'.$_SESSION['id'].'" ,"'.$_POST['id_article'].'","'.$_POST['contenu'].'" , "'.$_POST['id_zone'].'" , "'.$_POST['date'].'"   )' ;
	$result=mysql_query($q,$link);
	
	if($result)
	{
		$rapport='L\'article à été modifié avec succés.';
		$view='views/rapport.php';
	}
	else
	{
		$erreur='Une erreur est survenue lors de la modification.';
		$view='views/rapport.php';
	}

?>