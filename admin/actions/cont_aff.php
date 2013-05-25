<?php

	$contenu_affiche=recup_affiche();
	
	if($contenu_affiche)
	{
		$view= 'views/affiche_valide.php';
	}
	else
	{
		$erreur='Vous n\'avez pas de contenu affiché.';
		$view= 'views/rapport.php';
	}

	include $view;

?>