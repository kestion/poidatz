<?php

	$video_temp=recup_vid_temp_by_auteur($_SESSION['id']);
	
	if($video_temp)
	{
		$view= 'views/affiche_vid_temp.php';
	}
	else
	{
		$erreur='Vous n\'avez pas de vidéo en attente de validation.';
		$view= 'views/rapport.php';
	}
	
	include $view;

?>