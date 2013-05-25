<?php
	
	function recup_droits_zone($id)
	{
		$key=0;
		global $link;
		
		$q='SELECT `id_zone` FROM `droits` WHERE `id_droits`="'.$id.'"';	
		$result=mysql_query($q,$link);
		while($rows =mysql_fetch_assoc($result))
		{	
			$droit[$key]=$rows['id_zone'];
			$key++;
		}
		
		return $droit;
	}
	
	function recup_id_zone()
	{
		global $link;
	
		$q="SELECT * FROM `zones`";
		$result=mysql_query($q,$link);
		while($rows=mysql_fetch_assoc($result))
		{
			$zones[$rows['id']]=$rows['nom'];
		}
		
		return $zones;
	}

	function recup_nom_zone()
	{
		global $link;
		
		$q="SELECT * FROM `zones`";
		$result=mysql_query($q,$link);
		while($rows=mysql_fetch_assoc($result))
		{
			$zones[$rows['nom']]=$rows['id'];
		}
		
		return $zones;
	}

	function recup_temp($id)
	{
		global $link;
		global $zones;
		$article=null;
		
		$q='SELECT * FROM `contenu_temporaire` WHERE `id_auteur`="'.$id.'"';
		$result=mysql_query($q,$link);
		
		if($result)
		{
			while($rows =mysql_fetch_assoc($result))
			{
				$article[$rows['id']]['id']=$rows['id'];
				$article[$rows['id']]['contenu']=$rows['contenu'];
				$article[$rows['id']]['date']=$rows['date'];
				$article[$rows['id']]['zone']=$zones[$rows['id_zone']];
			}
			
			return $article;
		}
		else
			return null;		
	}

	function recup_auteur_temp($id)
	{
		global $link;
		$auteur=null;
	
		$q='SELECT `id_auteur` FROM `contenu_temporaire` WHERE `id`="'.$id.'"';
		$result=mysql_query($q,$link);
		
		if($result)
		{	
			while($rows =mysql_fetch_assoc($result))
			{
				$auteur=$rows['id_auteur'];			
			}
		}
		
		return $auteur;
	}

	function recup_contenu_temp($id)
	{
		global $link;
		
		$q='SELECT `id`, `contenu` FROM `contenu_temporaire` WHERE `id`="'.$_GET['id_article'].'"';
		$result=mysql_query($q,$link);
		while($rows=mysql_fetch_assoc($result))
		{
			$article['contenu']=$rows['contenu'];
			$article['id_article']=$rows['id'];
		}
		
		return $article;
	}
	
	function recup_affiche()
	{
		global $link;
		global $zones;
		$article=null;
	
		$q='SELECT * FROM `contenu_affiche` WHERE `id_auteur`="'.$_SESSION['id'].'"';
		$result=mysql_query($q,$link);
		
		if($result)
		{
			while($rows =mysql_fetch_assoc($result))
			{
				$article[$rows['id']]['id']=$rows['id'];
				$article[$rows['id']]['contenu']=$rows['contenu'];
				$article[$rows['id']]['date']=$rows['date'];
				$article[$rows['id']]['zone']=$zones[$rows['id_zone']];
			}
			
			return $article;
		}
		else
			return null;
	}
	
	function recup_auteur_aff($id)
	{
		global $link;
		$auteur=null;
	
		$q='SELECT `id_auteur` FROM `contenu_affiche` WHERE `id`="'.$id.'"';
		$result=mysql_query($q,$link);
		
		if($result)
		{	
			while($rows =mysql_fetch_assoc($result))
			{
				$auteur=$rows['id_auteur'];			
			}
		}
		
		return $auteur;
	}
	
	function recup_contenu_aff($id)
	{
		global $link;
		
		$q='SELECT `id`, `contenu`, `date`, `id_zone`  FROM `contenu_affiche` WHERE `id`="'.$_GET['id_article'].'"';
		$result=mysql_query($q,$link);
		while($rows=mysql_fetch_assoc($result))
		{
			$article['contenu']=$rows['contenu'];
			$article['id_article']=$rows['id'];
			$article['id_zone']=$rows['id_zone'];
			$article['date']=$rows['date'];
		}
		
		return $article;
	}

	function recup_vid_auteur($id)
	{
		global $link;
		$test=null;
		
		$q='SELECT * FROM `videos` WHERE `id_auteur`="'.$id.'" ';
		$result=mysql_query($q,$link);
		
		if($result!=null)
		{
			while($rows=mysql_fetch_assoc($result))
			{
				$test=1;
				$videos[$rows['id']]=$rows['url'];
			}
			if($test==null)
				$videos=null;
		}
		else
		{
			$videos=null;
		}
		
		return $videos;
	}
	
	function recup_auteur_vid_temp($id)
	{
		global $link;
		$auteur=null;
	
		$q='SELECT `id_auteur` FROM `videos` WHERE `id`="'.$id.'" AND `temp`="1"';
		$result=mysql_query($q,$link);
		
		if($result)
		{	
			while($rows =mysql_fetch_assoc($result))
			{
				$auteur=$rows['id_auteur'];			
			}
		}
		
		return $auteur;
	}

	function recup_vid_temp_by_auteur($id)
	{
		global $link;
		$videos=null;
	
		$q='SELECT * FROM `videos` WHERE `id_auteur`="'.$id.'" AND `temp`="1"';
		$result=mysql_query($q,$link);
		
		if($result)
		{			
			while($rows=mysql_fetch_assoc($result))
			{	
				$videos['id']['url']=$rows['url'];
				$videos['id']['id']=$rows['id']	;	
				$videos['id']['id_auteur']=$rows['id_auteur'];	
			}			
		}
		
		return $videos;
	}

	function recup_vid_temp()
	{
		global $link;
		$videos=null;
	
		$q='SELECT * FROM `videos` WHERE `temp`="1"';
		$result=mysql_query($q,$link);
		
		if($result)
		{			
			while($rows=mysql_fetch_assoc($result))
			{	
				$videos['id']['url']=$rows['url'];
				$videos['id']['id']=$rows['id']	;	
				$videos['id']['id_auteur']=$rows['id_auteur'];	
			}
		}
		
		return $videos;
	}

	function recup_temp_all()
	{
		global $link;
		global $zones;
		$article=null;
		
		$q='SELECT * FROM `contenu_temporaire` ';
		$result=mysql_query($q,$link);
		
		if($result)
		{
			while($rows =mysql_fetch_assoc($result))
			{
				$article[$rows['id']]['id']=$rows['id'];
				$article[$rows['id']]['contenu']=$rows['contenu'];
				$article[$rows['id']]['date']=$rows['date'];
				$article[$rows['id']]['zone']=$zones[$rows['id_zone']];
			}
		}
		
		return $article;	
	}
	function recup_vid_temp_id($id){
	global $link;
	$videos=null;
	$q='SELECT * FROM `videos` WHERE `id`="'.$id.'" AND `temp`="1"';
	$result=mysql_query($q,$link);
	
	
	return $result;
}

?>