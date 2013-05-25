<?php

	require_once 'models/fonctions.php';
	include 'includes/configs.php';
	
	$template=null;
	
	$action=null;
	
	$zone=1;
	$zones=recup_id_zone();
	
	$page=recup_nom_zone();

	if(isset($_GET['action']) && isset($action[$_GET['action']]))
	{
		$action= '/actiongroups/'.$_GET['action'].'.php';
	}

	if(isset($_GET['page']) )
	{
		$zone=$page[$_GET['page']];
		$template= '/templates/'.$pages[$zone].'.php';	
	}
	else
	{	
		$template= '/templates/'.$pages[$zone].'.php';
	}

	include 'views/main.php';

?>