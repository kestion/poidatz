<?php

	if(isset($_GET['id_video']) && is_numeric($_GET['id_video']))
	{
		$auteur=recup_auteur_vid_temp($_GET['id_video']);
	}
	
	if($auteur==$_SESSION['id'])
		include 'models/sup_vid_temp.php';
	else 
	{
		$erreur='La vidéo est introuvable ou vous n\'avez pas le droit de la supprimer.';
		$view='views/rapport.php';
	}

	include $view;

?>