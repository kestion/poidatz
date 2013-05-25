<?php

	$videos=recup_vid_auteur($_SESSION['id']);

	if($videos==null)
	{
		$erreur='Une erreur est survenue.';
		$view='/views/rapport.php';
	}
	else
	{
		include 'views/affiche_vid.php';
	}

	if(isset($views))
		include $view;

?>