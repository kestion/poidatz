<?php

	$q="SELECT  `password` , `id` FROM `personnel` WHERE `login`='".$_POST['login']."'";
	$result=mysql_query($q,$link);

	if($result!=null)
	{
		$result=mysql_fetch_assoc($result);
		
		if($_POST['pass']== $result['password'])
		{
			
		}
		else
		{
			$nb_erreurs++;
			$erreurs['pass']='Mot de passe éronné.';
		}
	}
	else
	{
		$nb_erreurs++;
		$erreurs['login']="Votre login est inconnu.";
	}
	
	if($nb_erreurs!=0)
	{
		$view='/views/form_co.php';	
	}
	else
	{
		$_SESSION['id']=$result['id'];
		$rapport='connexion réussie';
		$view='/views/rapport.php';
	}

?>