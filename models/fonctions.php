<?php

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

?>