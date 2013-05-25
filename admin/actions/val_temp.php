<?php

	if($_SESSION['id']==1)
	{
		include 'models/val_temp.php';
	}
	else
	{
		$erreur="Vous n'avez pas le droit d'effectuer cette action.";
		$view='views/rapport.php';
	}

	include $view;

?>