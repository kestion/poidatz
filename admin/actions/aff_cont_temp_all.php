<?php

	$contenu_temp=recup_temp_all();
	
	if($contenu_temp)
	{
		$view= 'views/affiche_temp.php';
	}
	else
	{
		$erreur='Il n\'y a pas de contenu en attente de validation.';
		$view= 'views/rapport.php';
	}
	
	include $view;

?>