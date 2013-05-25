<?php

	$q='SELECT * FROM `contenu_temporaire` WHERE `id`="'.intval($_GET['id_article']).'"';
	$cont_temp= array (''=>'');
	
	$result=mysql_query($q,$link);
	$cont_temp=mysql_fetch_assoc($result);

	if($cont_temp)
	{
	
		if($cont_temp['id_affiche'])
		{
			$q='UPDATE `contenu_affiche` SET `contenu`="'.$cont_temp['contenu'].'" WHERE `id`="'.$cont_temp['id_affiche'].'"';
		}
		else 
		{
			$q='INSERT INTO `contenu_affiche` (`id_auteur`, `date` , `id_zone`, `contenu`) VALUES ("'.$cont_temp['id_auteur'].'" , "'.$cont_temp['date'].'" , "'.$cont_temp['id_zone'].'" , "'.mysql_real_escape_string($cont_temp['contenu']).'")';
		}
		
		$result=mysql_query($q,$link);
		
		if($result)
		{
			$rapport='L\'article à été validé. Il est maintenant visible sur le site.';
			$view='views/rapport.php';
			$result=mysql_query('DELETE `contenu_temporaire` FROM `contenu_temporaire` WHERE `id`="'.intval($_GET['id_article']).'"' , $link);	
		}
		else
		{
			$erreur='Une erreur est survenue. Veuillez recommencer.';
			$view='views/rapport.php';
		}		
	
	}
	else
	{
		$erreur='L\'article sélectionné n\'est pas valide';
		$view='views/rapport.php';
	}

?>