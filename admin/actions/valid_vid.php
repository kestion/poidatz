<?php
if($_SESSION['id']==1){
	$video=recup_vid_temp_id($_GET['id_video']);
	if($video){
		include 'models/valid_vid.php';
	}else{
		$erreur='La video est introuvable';
		$view='views/rapport.php';
	}
}else{
	$erreur='Vous n\'avez pas le droit d\'effectuer cette action.';
	$view='views/rapport.php';
}

include $view;
?>