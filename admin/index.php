<?php

	require_once 'includes/configs.php';
	require_once 'models/fonctions.php';

	session_start();

	if(isset($_SESSION['id']))
	{
		$zones=recup_id_zone();
		$page=recup_nom_zone();
		$droit=recup_droits_zone($_SESSION['id']);
		
		if(isset ($_GET['action']) && array_key_exists($_GET['action'], $titres))
		{
			$titre=$titres[$_GET['action']];
		}
		else
		{
			$action='';
		}
		
		
		if(isset ($_GET['action']) && array_key_exists($_GET['action'], $actions))
		{
			$action='actions/'.$actions[$_GET['action']].'.php';
		}
		else
		{
			$action='actions/post.php';
		}
	}
	else
	{	
		$action='actions/verif_form_co.php';
	}

	include 'views/layout.php';

?>