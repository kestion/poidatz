<?php
    
	$num_article=0;
	
	if(array_key_exists($_GET['page'], $page))
	{
		$articles = array();
		$zone=$page[$_GET['page']];
		$q= mysql_query('SELECT * FROM `contenu_affiche` WHERE `id_zone`='.$zone.' ');
		
		while($rows=mysql_fetch_assoc($q))
		{
			array_push($articles, $rows['contenu']);
		}

	}
	
	if($articles)
		include "views/affiche_article.php";
	else	
		echo "Cette zone est vide.";	
    
?>