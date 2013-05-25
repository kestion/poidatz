<?php

	if(isset($_POST['contenu']))
	{
		$nb_err=1;
		
		if(!isset($_POST['zone']))
		{
			foreach($droit AS $key => $value)
			{
				if($value == $_POST['zone'])
					$nb_err=null;
			}
			if($nb_err)
			{
				$erreur='Vous n\'avez pas le droit de publier dans cette zone ou la zone est inconnue.';
				$view='views/form_post.php';
			}				
		}
		else
		{	
			include 'models/db_post.php';
		}
	
	}
	else
	{	
		$view='views/form_post.php';
	}

	include $view;
	
?>