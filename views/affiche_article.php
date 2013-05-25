<?php

	if(isset($articles))
	{	
		foreach($articles as $key => $value)
		{
			echo '<div class="contenu">';
			echo $value;
			echo '</div>';
		}
	}
	else
	{
		echo '<p>Il n\'y a pas de contenu.</p>';
	}

?>