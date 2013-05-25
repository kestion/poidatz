<?php

	if(isset($_POST['login']))
	{
		$nb_erreurs=null;	
		
		if(!ctype_alpha($_POST['login']) || !strlen($_POST['login'])>5)
		{
			$nb_erreurs++;
			$erreurs['login']='Votre login est faux.';
		}
		
		if(!isset($_POST['pass']) || !ctype_alnum($_POST['pass']) )
		{
			$nb_erreurs++;
			$erreurs['pass']="Le mot de passe n'est pas valide.";
		}
		
		if($nb_erreurs==null)
		{
			include 'models/db_connect.php';
		}
		else 
		{
			$view='/views/form_co.php';	
		}
	}
	else
	{
		$view='/views/form_co.php';	
	}

	include $view;
	
?>