<?php

	//assignation des templates
	$pages =array (
		'1' => 'menu',
		'2' => 'simple_div',
		'3' => 'simple_div',
		'4' => 'simple_div',
		'5' => 'simple_div',
		'6' => 'simple_div',
		'7' => 'simple_div',
		'8' => 'simple_div',
		'9' => 'simple_div',
		'10' => 'simple_div',
		'11' => 'simple_div',
		'12' => 'simple_div',
		'13' => 'simple_div',
		'14' => 'simple_div',
		'15' => 'simple_div',
		'16' => 'simple_div',
		'17' => 'simple_div',
		'18' => 'simple_div',
		'19' => 'simple_div',
		'20' => 'simple_div',
		'21' => 'simple_div',
		'22' => 'simple_div',
		'23' => 'simple_div',
		'24' => 'simple_div',
		'25' => 'simple_div',
		'26' => 'simple_div',
		'27' => 'simple_div',
		'28' => 'simple_div',
		'29' => 'simple_div',
		'30' => 'simple_div',
		'31' => 'simple_div',
		'32' => 'simple_div'
		);

	//assignation des actions	
	$actions= array (
		'connect' => 'verif_form_co',
		'editer_contenu' => 'post',
		'contenu_en_attente' => 'affiche_temp',
		'sup_temp'=>'sup_temp',
		'modifier_temp' => 'modif_temp',
		'valider_temp' => 'val_temp',
		'contenu_affiche' => 'cont_aff',
		'sup_affiche' => 'sup_aff', 
		'modifier_affiche' => 'modif_aff',
		'poster_video'=>'post_vid',
		'afficher_video' => 'aff_vid',
		'suprimer_video' => 'sup_vid',
		'afficher_video_attente' => 'aff_vid_temp',
		'afficher_videos_attentes' => 'aff_vid_temp_all',
		'afficher_contenu_attente' => 'aff_cont_temp_all',
		'deco'=>'deco',
		'valid_video'=> 'valid_vid'
		);
		
		$titres= array ('editer_contenu' => 'Poster un article',
				 'contenu_en_attente' => 'Article en attente de validation',
				 'sup_temp'=>'Supprimer un article en attente de validation',
				  'modifier_temp' => 'Modifier un article en attente de validation',
				  'contenu_affiche' => 'Vos article en ligne',
				   'sup_affiche' => 'Supprimer un article en ligne', 
				   'modifier_affiche' => 'Modifier un article en ligne',
				   'poster_video'=>'Poster une vidéo',
				   'afficher_video' => 'Vidéos en ligne',
				   'suprimer_video' => 'Supprimer une vidéo',
				   'afficher_video_attente' => 'Vos vidéos en attente de validation',
				   'afficher_videos_attentes' => 'Vidéos en attente de validation',
				   'afficher_contenu_attente' => 'Article en attente de validation'
				   );

	//bdd
	$link=mysql_connect( "localhost","root","");
	mysql_select_db('poidatz');

?>