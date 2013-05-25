<?php

	if($_SESSION['id']==1)
	{
		$videos_temp=recup_vid_temp();
	
		if($videos_temp)
		{
			$view= 'views/aff_vid_temp_all.php';
		}
		else
		{
			$erreur='Vous n\'avez pas de vidéo en attente de validation.';
			$view= 'views/rapport.php';
		}
	}
	else
	{
		$erreur='Vous n\'avez pas accés à cette zone.';
		$view= 'views/rapport.php';
	}
	
	include $view;

?>