<?php

	if(isset($_GET['id_article']) && is_numeric($_GET['id_article']))
	{
		$auteur=recup_auteur_aff($_GET['id_article']);
	}
	
	if($auteur==$_SESSION['id'])
		include 'models/sup_aff.php';
	else 
	{
		$erreur='L\'article est introuvable ou vous n\'avez pas le droit de la supprimer.';
		$view='views/rapport.php';
	}

	include $view;

?>