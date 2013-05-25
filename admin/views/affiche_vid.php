<?php

	foreach($videos AS $key=>$value)
	{
		echo '<a href="index.php?action=suprimer_video&id_video='.$key.'" >Supprimer</a><br />';
		echo $value.'<br />';
	}

?>