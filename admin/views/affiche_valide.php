<?php

	foreach($contenu_affiche AS $key)
	{	
		echo 
		'<div id="content">
		
			<ul>
				<li><a href="index.php?action=sup_affiche&id_article='.$key['id'].'">Supprimer</a></li>
				<li><a href="index.php?action=modifier_affiche&id_article='.$key['id'].'">Modifier</a></li>
			</ul>
			<br />
			
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