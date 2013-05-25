<?php

	foreach($contenu_temp AS $key)
	{
		echo 
			'<div id="content">
				<ul>
					<li><a href="index.php?action=sup_temp&id_article='.$key['id'].'">Supprimer</a></li>
					<li><a href="index.php?action=modifier_temp&id_article='.$key['id'].'">Modifier</a></li>';
				if($_SESSION['id']==1)
				{
					echo 
					'<li><a href="index.php?action=valider_temp&id_article='.$key['id'].'">Valider</a></li>
				</ul>';
				}
				echo
				'<br />
				<table class="contenu">
					<tr>
						<td>Zone:</td>
						<td>'.$key['zone'].'</td>
					</tr>
					<tr>
						<td>Contenu:</td>
						<td>'.$key['contenu'].'</td>
					</tr>
					<tr>
						<td>Date d\'édition:</td>
						<td>'.$key['date'].'</td>
					</tr>
				</table>
			</div>';
	}

?>