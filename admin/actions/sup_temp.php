<?php

	if(isset($_GET['id_article']) && is_numeric($_GET['id_article']))
	{
		$auteur=recup_auteur_temp($_GET['id_article']);
	}
	
	if($auteur==$_SESSION['id'])
		include 'models/sup_temp.php';
	else 
	{
		$erreur='L\'article est introuvable ou vous n\'avez pas le droit de le supprimer.';
		$view='views/rapport.php';
	}

	include $view;

?>