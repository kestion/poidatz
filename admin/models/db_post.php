<?php

	$date=date("Y-m-d");
	$zone=$_POST['zone'];
	
	$q='INSERT INTO `contenu_temporaire` (`id_auteur`, `id_zone` , `contenu` , `date`) VALUES ("'.$_SESSION['id'].'", "'.$zone.'" , "'.mysql_real_escape_string($_POST['contenu']).'" , "'.$date.'")';
	$result=mysql_query($q,$link);

	$rapport='Le contenu à bien été enregistré. Il est en attente de validation.';
	$view='/views/rapport.php';

?>