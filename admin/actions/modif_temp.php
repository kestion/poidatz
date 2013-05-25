<?php

	if(!isset($_POST['id_article']) || !isset($_POST['contenu']))
	{
		if(isset($_GET['id_article']) && is_numeric($_GET['id_article']))
		{
			$auteur=recup_auteur_temp($_GET['id_article']);
			
			if($auteur==$_SESSION['id'])
			{
				$contenu=recup_contenu_temp($_GET['id_article']);
				$view='views/form_modif_temp.php';
			}
		}
		else 
		{
			$erreur='L\'article est introuvable ou vous n\'avez pas le droit de le modifier.';
			$view='views/rapport.php';
		}
	}
	else
	{
		$auteur=recup_auteur_temp($_POST['id_article']);
		
		if($auteur==$_SESSION['id'])
		{
			include 'models/modif_temp.php';
		}
	}
	
	include $view;

?>