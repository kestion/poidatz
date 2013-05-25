<?php

	if(isset($rapport))
	{
		echo '<p class="rap">'.$rapport.'</p>';
	}
	
	if(isset($erreur))
	{
		echo '<p class="err">'.$erreur.'</p>';
	}
	
	echo '<a href="index.php">Retour</a>';

?>