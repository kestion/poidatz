<?php

	$contenu_temp=recup_temp($_SESSION['id']);
	
	if($contenu_temp)
	{
		$view= 'views/affiche_temp.php';
	}
	else
	{
		$erreur='Vous n\'avez pas de contenu en attente de validation.';
		$view= 'views/rapport.php';
	}
	
	include $view;

?>