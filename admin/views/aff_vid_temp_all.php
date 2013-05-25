<?php
		
	foreach($videos_temp AS $key=>$value)
	{	
		echo 
			'<div id="content">
				<ul class="width">
					<li><a href="index.php?action=suprimer_video&id_video='.$value['id'].'" >Supprimer</a></li>';
		echo 
					'<li><a href="index.php?action=valid_video&id_video='.$value['id'].'" >Valider</a></li>
				</ul>';
		echo 
				'<p class="contenu">Proposé par '.$value['id_auteur'].'<br />';
		echo $value['url'].'
				</p>
			</div>';
	}

?>