<!DOCTYPE HTML>

<html>

	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Admin</title>
		
		<link rel="stylesheet" type="text/css" href="style/admin.css" />
		
		<script src="tinymce/jscripts/tiny_mce/tiny_mce.js" type="text/javascript" >  <!-- balise pour le tinymce -->  </script>
		<script type="text/javascript">
			tinyMCE.init({
			mode:"textareas",
			elements:"billet",//le nom du texterea
			theme:"advanced",
			language:"fr",//langue
			plugins:"advimage,fullscreen,preview,emotions,insertdatetime,save", //les plugins 
			//les barres de boutons de 1  3
			theme_advanced_buttons1:
			"bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,bullist,numlist,|,sub,sup,charmap,|,undo,redo,|,outdent,indent,|,link,unlink,save,|,insertdate",
			theme_advanced_buttons2:
			"forecolor,backcolor,|,fontsizeselect,fontselect,formatselect,|,image,emotions,|,cleanup,removeformat,|,fullscreen,preview",
			theme_advanced_buttons3:"",
		
			theme_advanced_toolbar_location:"top", // place la toolbar,
			theme_advanced_toolbar_align:"left", //alignement tooblar
			theme_advanced_statusbar_location:"bottom", //position barre de statut
			content_css:"../templates/TinyMCE.css", //lien  css 
			plugin_insertdate_dateFormat:"%d/%m/%Y", // le format de la date pour le plugin insertdatetime
			plugin_insertdate_timeFormat:"%H:%M:%S", // format de l'heure
			//les attributs autorise
			extended_valid_elements:
			"hr[class|width|size|noshade],font[face|size|color|style],span[class|align|style],a[href|name]",
			theme_advanced_resize_horizontal:true, 
			theme_advanced_resizing : true 
			});
		</script>
		
	</head>
	
	<body>
		
		<header>
			<a href="index.php"><img src="images/logo.png" /></a>
		</header>
		
		<?php 
			if(isset($_SESSION['id']))
			{ 
				echo '<p><a href="index.php?action=deco" class="deco">déconnexion</a></p>'; 
			} 
		?>
		
		<div class="clear"></div>
		
		<nav>
			<ul>
				<li><a href="index.php?action=editer_contenu">Créer du contenu</a></li>
				<li><a href="index.php?action=contenu_en_attente">En attente de validation</a></li>
				<li><a href="index.php?action=contenu_affiche">Mes articles</a></li>
				<li><a href="index.php?action=poster_video">Poster une vidéo</a></li>
				<li><a href="index.php?action=afficher_video">Mes vidéos</a></li>
				<li><a href="index.php?action=afficher_video_attente">Mes vidéos en attente</a></li>
				<?php if(isset($_SESSION['id']) && $_SESSION['id']==1) { ?>
					<li><a href="index.php?action=afficher_videos_attentes">Toutes les vidéos en attente</a></li>
					<li><a href="index.php?action=afficher_contenu_attente">Tous les contenus en attente</a></li>
				<?php } ?>
			</ul>
		</nav> 
		
		<div id="wrapper">
				<h2><?php if(isset ($titre)){echo '<br />'.$titre;} ?></h2>

			<?php include $action; ?>
		</div>
		
		<footer>
			<img src="images/footer.png" />
		</footer>
		
	</body>
	
</html>