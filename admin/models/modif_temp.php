<?php

	$q='UPDATE  `contenu_temporaire` SET `contenu`="'.$_POST['contenu'].'" WHERE `id`="'.$_POST['id_article'].'"';
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