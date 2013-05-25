<?php
	
	$nb_erreurs=null;	
		
	if(!isset ($_POST['date']) || !preg_match( '`^\d{1,2}/\d{1,2}/\d{4}$`', $_POST['date']))
	{
		$nb_erreurs++;
		$erreurs['date']='Veuillez renseigner une date au format jj/mm/aaaa!';
	}
		
	if(!isset ($_POST['corres']) || !ctype_alpha(str_replace(array(' ',"î", "ï", "ê", "ë", "é", "è", "â", "ô",".", '-'), '',$_POST['corres'])))
	{
		$nb_erreurs++;
		$erreurs['corres']='Veuillez renseigner un correspondant!';
	}
	
	if(!isset ($_POST['etablissement']) || !ctype_alpha(str_replace(array(' ',"î", "ï", "ê", "ë", "é", "è", "â", "ô",".", '-'), '',$_POST['etablissement'])))
	{
		$nb_erreurs++;
		$erreurs['etablissement']='Veuillez renseigner un établissement!';
	}
	
	if(!isset ($_POST['consult_ext']) || !ctype_alpha(str_replace(array(' ',"î", "ï", "ê", "ë", "é", "è", "â", "ô",".", '-'), '',$_POST['consult_ext'])))
	{
		$nb_erreurs++;
		$erreurs['consult_ext']='Veuillez renseigner une consultation externe!';
	}
	
	if(!isset ($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
		$nb_erreurs++;
		$erreurs['email']='Veuillez renseigner un email au format bob@exemple.com!';
	}
	
	if(!isset ($_POST['doc']) || !ctype_alpha(str_replace(array(' ',"î", "ï", "ê", "ë", "é", "è", "â", "ô",".", '-'), '',$_POST['doc'])))
	{
		$nb_erreurs++;
		$erreurs['doc']='Veuillez renseigner un docteur!';
	}
	
	if(!isset ($_POST['date_jour']) || !preg_match( '`^\d{1,2}/\d{1,2}/\d{4}$`', $_POST['date_jour']))
	{
		$nb_erreurs++;
		$erreurs['date_jour']='Veuillez renseigner une date au format jj/mm/aaaa!';
	}
	
	//etat civil
	
	if(!isset ($_POST['nom']) || !ctype_alpha(str_replace(array(' ',"î", "ï", "ê", "ë", "é", "è", "â", "ô", '-'), '',$_POST['nom'])))
	{
		$nb_erreurs++;
		$erreurs['nom']='Veuillez renseigner un nom!';
	}
	
	if(!isset ($_POST['prenom']) || !ctype_alpha($_POST['prenom']))
	{
		$nb_erreurs++;
		$erreurs['prenom']='Veuillez renseigner un prenom!';
	}
	
	if(!isset ($_POST['date_naissance']) || !preg_match( '`^\d{1,2}/\d{1,2}/\d{4}$`', $_POST['date_naissance']))
	{	
		$nb_erreurs++;
		$erreurs['date_naissance']='Veuillez renseigner une date au format jj/mm/aaaa!!';
	}
	
	if(!isset ($_POST['tel']) || !preg_match( '`[0-9]{10}`', $_POST['tel']))
	{
		$nb_erreurs++;
		$erreurs['tel']='Veuillez renseigner un numéro de téléphone!';
	}
	
	if(!isset ($_POST['adresse']) || !ctype_alnum(str_replace(array(' ', ",","î", "ï", "ê", "ë", "é", "è", "â", "ô", '-'), '',$_POST['adresse'])))
	{
		$nb_erreurs++;
		$erreurs['adresse']='Veuillez renseigner une adresse!';
	}
	
	if(!isset ($_POST['cp']) || !preg_match( '`[0-9]{5}`', $_POST['cp']))
	{
		$nb_erreurs++;
		$erreurs['cp']='Veuillez renseigner un code postal!';
	}
	
	if(!isset ($_POST['ville']) || !ctype_alpha(str_replace(array(' ',"î", "ï", "ê", "ë", "é", "è", "â", "ô", '-'), '',$_POST['ville'])))
	{
		$nb_erreurs++;
		$erreurs['ville']='Veuillez renseigner une ville!';
	}
	
	if(!isset ($_POST['pays']) || !ctype_alpha(str_replace(array(' ',"î", "ï", "ê", "ë", "é", "è", "â", "ô", '-'), '',$_POST['pays'])))
	{
		$nb_erreurs++;
		$erreurs['pays']='Veuillez renseigner un pays!';
	}
	
	//etat civil père
	
	if(!isset ($_POST['nom_pere']) || !ctype_alpha(str_replace(array(' ',"î", "ï", "ê", "ë", "é", "è", "â", "ô", '-'), '',$_POST['nom_pere'])))
	{
		$nb_erreurs++;
		$erreurs['nom_pere']='Veuillez renseigner un nom!';
	}
	
	if(!isset ($_POST['prenom_pere']) || !ctype_alpha(str_replace(array(' ',"î", "ï", "ê", "ë", "é", "è", "â", "ô", '-'), '',$_POST['prenom_pere'])))
	{
		$nb_erreurs++;
		$erreurs['prenom_pere']='Veuillez renseigner un prenom!';
	}
	
	if(!isset ($_POST['date_naissance_pere']) || !preg_match( '`^\d{1,2}/\d{1,2}/\d{4}$`', $_POST['date_naissance_pere']))
	{	
		$nb_erreurs++;
		$erreurs['date_naissance_pere']='Veuillez renseigner une date au format jj/mm/aaaa!!';
	}
	
	if(!isset ($_POST['tel_pere']) || !preg_match( '`[0-9]{10}`', $_POST['tel_pere']))
	{
		$nb_erreurs++;
		$erreurs['tel_pere']='Veuillez renseigner un numéro de téléphone!';
	}
	
	if(!isset ($_POST['adresse_pere']) || !ctype_alnum(str_replace(array(' ', ",","î", "ï", "ê", "ë", "é", "è", "â", "ô", '-'), '',$_POST['adresse_pere'])))
	{
		$nb_erreurs++;
		$erreurs['adresse_pere']='Veuillez renseigner une adresse!';
	}
	
	if(!isset ($_POST['cp_pere']) || !preg_match( '`[0-9]{5}`', $_POST['cp_pere']))
	{
		$nb_erreurs++;
		$erreurs['cp_pere']='Veuillez renseigner un code postal!';
	}
	
	if(!isset ($_POST['ville_pere']) || !ctype_alpha(str_replace(array(' ', "'","î", "ï", "ê", "ë", "é", "è", "â", "ô", '-'), '',$_POST['ville_pere'])))
	{
		$nb_erreurs++;
		$erreurs['ville_pere']='Veuillez renseigner une ville!';
	}
	
	if(!isset ($_POST['pays_pere']) || !ctype_alpha(str_replace(array(' ', "'","î", "ï", "ê", "ë", "é", "è", "â", "ô", '-'), '',$_POST['pays_pere'])))
	{
		$nb_erreurs++;
		$erreurs['pays_pere']='Veuillez renseigner un pays!';
	}
	
	//etat civil mère
	
	if(!isset ($_POST['nom_mere']) || !ctype_alpha(str_replace(array(' ', "'","î", "ï", "ê", "ë", "é", "è", "â", "ô", '-'), '',$_POST['nom_mere'])))
	{
		$nb_erreurs++;
		$erreurs['nom_mere']='Veuillez renseigner un nom!';
	}
	
	if(!isset ($_POST['prenom_mere']) || !ctype_alpha(str_replace(array(' ', "'","î", "ï", "ê", "ë", "é", "è", "â", "ô", '-'), '',$_POST['prenom_mere'])))
	{
		$nb_erreurs++;
		$erreurs['prenom_mere']='Veuillez renseigner un prenom!';
	}
	
	if(!isset ($_POST['date_naissance_mere']) || !preg_match( '`^\d{1,2}/\d{1,2}/\d{4}$`', $_POST['date_naissance_mere']))
	{	
		$nb_erreurs++;
		$erreurs['date_naissance_mere']='Veuillez renseigner une date au format jj/mm/aaaa!!';
	}
	
	if(!isset ($_POST['tel_mere']) || !preg_match( '`[0-9]{10}`', $_POST['tel_mere']))
	{
		$nb_erreurs++;
		$erreurs['tel_mere']='Veuillez renseigner un numéro de téléphone!';
	}
	
	if(!isset ($_POST['adresse_mere']) || !ctype_alnum(str_replace(array(' ', "î", "ï", "ê", "ë", "é", "è", "â", "ô",",", '-'), '',$_POST['adresse_mere'])))
	{
		$nb_erreurs++;
		$erreurs['adresse_mere']='Veuillez renseigner une adresse!';
	}
	
	if(!isset ($_POST['cp_mere']) || !preg_match( '`[0-9]{5}`', $_POST['cp_mere']))
	{
		$nb_erreurs++;
		$erreurs['cp_mere']='Veuillez renseigner un code postal!';
	}
	
	if(!isset ($_POST['ville_mere']) || !ctype_alpha(str_replace(array(' ', "'","î", "ï", "ê", "ë", "é", "è", "â", "ô", '-'), '',$_POST['ville_mere'])))
	{
		$nb_erreurs++;
		$erreurs['ville_mere']='Veuillez renseigner une ville!';
	}
	
	if(!isset ($_POST['pays_mere']) || !ctype_alpha($_POST['pays_mere']))
	{
		$nb_erreurs++;
		$erreurs['pays_mere']='Veuillez renseigner un pays!';
	}
	
	// etat civil responsable légal
	
	if(!isset ($_POST['nom_rl']) || !ctype_alpha(str_replace(array(' ', "'","î", "ï", "ê", "ë", "é", "è", "â", "ô", '-'), '',$_POST['nom_rl'])))
	{
		$nb_erreurs++;
		$erreurs['nom_rl']='Veuillez renseigner un nom!';
	}
	
	if(!isset ($_POST['prenom_rl']) || !ctype_alpha(str_replace(array(' ', "'","î", "ï", "ê", "ë", "é", "è", "â", "ô", '-'), '',$_POST['prenom_rl'])))
	{
		$nb_erreurs++;
		$erreurs['prenom_rl']='Veuillez renseigner un prenom!';
	}
	
	if(!isset ($_POST['date_naissance_rl']) || !preg_match( '`^\d{1,2}/\d{1,2}/\d{4}$`', $_POST['date_naissance_rl']))
	{	
		$nb_erreurs++;
		$erreurs['date_naissance_rl']='Veuillez renseigner une date au format jj/mm/aaaa!!';
	}
	
	if(!isset ($_POST['tel_rl']) || !preg_match( '`[0-9]{10}`', $_POST['tel_rl']))
	{
		$nb_erreurs++;
		$erreurs['tel_rl']='Veuillez renseigner un numéro de téléphone!';
	}
	
	if(!isset ($_POST['adresse_rl']) || !ctype_alnum(str_replace(array(' ', ",","î", "ï", "ê", "ë", "é", "è", "â", "ô", '-'), '',$_POST['adresse_rl'])))
	{
		$nb_erreurs++;
		$erreurs['adresse_rl']='Veuillez renseigner une adresse!';
	}
	
	if(!isset ($_POST['cp_rl']) || !preg_match( '`[0-9]{5}`', $_POST['cp_rl']))
	{
		$nb_erreurs++;
		$erreurs['cp_rl']='Veuillez renseigner un code postal!';
	}
	
	if(!isset ($_POST['ville_rl']) || !ctype_alpha(str_replace(array(' ', "'","î", "ï", "ê", "ë", "é", "è", "â", "ô", '-'), '',$_POST['ville_rl'])))
	{
		$nb_erreurs++;
		$erreurs['ville_rl']='Veuillez renseigner une ville!';
	}
	
	if(!isset ($_POST['pays_rl']) || !ctype_alpha(str_replace(array(' ', "'","î", "ï", "ê", "ë", "é", "è", "â", "ô", '-'), '',$_POST['pays_rl'])))
	{
		$nb_erreurs++;
		$erreurs['pays_rl']='Veuillez renseigner un pays!';
	}
	
	if (!isset ($_POST['secu']))
	{
		$nb_erreurs++;
		$erreurs['secu']='Veuillez choisir une option!';
	}
	
	if (!isset ($_POST['secu_100']))
	{
		$nb_erreurs++;
		$erreurs['secu_100']='Veuillez choisir une option!';
	}
	
	if (!isset ($_POST['aes']))
	{
		$nb_erreurs++;
		$erreurs['aes']='Veuillez choisir une option!';
	}
	
	if (!isset ($_POST['mutuelle']))
	{
		$nb_erreurs++;
		$erreurs['mutuelle']='Veuillez choisir une option!';
	}
	
	//social
	
	if(!isset ($_POST['social']) || !ctype_alpha(str_replace(array(' ', "'","î", "ï", "ê", "ë", "é", "è", "â", "ô", '-'), '',$_POST['social'])))
	{
		$nb_erreurs++;
		$erreurs['social']='Veuillez renseigner ce champ!';
	}
	
	if(!isset ($_POST['assistance_soc']) || !ctype_alpha(str_replace(array(' ', "'","î", "ï", "ê", "ë", "é", "è", "â", "ô", '-'), '',$_POST['assistance_soc'])))
	{
		$nb_erreurs++;
		$erreurs['assistance_soc']='Veuillez renseigner ce champ!';
	}
	
	if(!isset ($_POST['tel_soc']) || !preg_match( '`[0-9]{10}`', $_POST['tel_soc']))
	{
		$nb_erreurs++;
		$erreurs['tel_soc']='Veuillez renseigner un numéro de téléphone!';
	}
	
	//scolarité
	
	if (!isset ($_POST['milieu_scol']))
	{
		$nb_erreurs++;
		$erreurs['milieu_scol']='Veuillez choisir une option!';
	}
	
	if(!isset ($_POST['classe']) || !ctype_alnum(str_replace(array(' ', "'","î", "ï", "ê", "ë", "é", "è", "â", "ô", '-'), '',$_POST['classe'])))
	{
		$nb_erreurs++;
		$erreurs['classe']='Veuillez renseigner ce champ!';
	}
	
	if (!isset ($_POST['ordinateur']))
	{
		$nb_erreurs++;
		$erreurs['ordinateur']='Veuillez choisir une option!';
	}
	
	if(!isset ($_POST['etablissement_scol']) || !ctype_alpha(str_replace(array(' ', "î", "ï", "ê", "ë", "é", "è", "â", "ô","'", ',', '-', '.'), '',$_POST['etablissement_scol'])))
	{
		$nb_erreurs++;
		$erreurs['etablissement_scol']='Veuillez renseigner l\établissement!';
	}
	
	if(!isset ($_POST['tel_scol']) || !preg_match( '`[0-9]{10}`', $_POST['tel_scol']))
	{
		$nb_erreurs++;
		$erreurs['tel_scol']='Veuillez renseigner un numéro de téléphone!';
	}
	
		if(!isset ($_POST['adresse_scol']) || !ctype_alnum(str_replace(array(' ',"î", "ï", "ê", "ë", "é", "è", "â", "ô", "'", '-', ',', '.'), '',$_POST['adresse_scol'])))
	{
		$nb_erreurs++;
		$erreurs['adresse_scol']='Veuillez renseigner une adresse!';
	}
	
	if(!isset ($_POST['cp_scol']) || !preg_match( '`[0-9]{5}`', $_POST['cp_scol']))
	{
		$nb_erreurs++;
		$erreurs['cp_scol']='Veuillez renseigner un code postal!';
	}
	
	if(!isset ($_POST['ville_scol']) || !ctype_alpha(str_replace(array(' ', "î", "ï", "ê", "ë", "é", "è", "â", "ô","'", '-'), '',$_POST['ville_scol'])))
	{
		$nb_erreurs++;
		$erreurs['ville_scol']='Veuillez renseigner un numéro de téléphone!';
	}
	
	//logement
	
	if (!isset ($_POST['access']))
	{
		$nb_erreurs++;
		$erreurs['access']='Veuillez choisir au moins une option!';
	}
	
	if (!isset ($_POST['amenagement']))
	{
		$nb_erreurs++;
		$erreurs['amenagement']='Veuillez choisir au moins une option!';
	}
	
	if(!isset ($_POST['logement']) || !ctype_alpha(str_replace(array(' ', "î", "ï", "ê", "ë", "é", "è", "â", "ô",'.', ',', "'", '-'), '',$_POST['logement'])))
	{
		$nb_erreurs++;
		$erreurs['logement']='Veuillez renseigner ce champ!';
	}
	
	//renseignement médicaux
	
	if(!isset ($_POST['motif']) || !ctype_alpha(str_replace(array(' ', "î", "ï", "ê", "ë", "é", "è", "â", "ô",'.', ',', "'", '-'), '',$_POST['motif'])))
	{
		$nb_erreurs++;
		$erreurs['motif']='Veuillez renseigner ce champ!';
	}
	
	if(!isset ($_POST['diagnostic']) || !ctype_alpha(str_replace(array(' ', "î", "ï", "ê", "ë", "é", "è", "â", "ô",'.', ',', "'", '-'), '',$_POST['diagnostic'])))
	{
		$nb_erreurs++;
		$erreurs['diagnostic']='Veuillez renseigner ce champ!';
	}
	
	if(!isset ($_POST['handicaps']) || !ctype_alpha(str_replace(array(' ', "î", "ï", "ê", "ë", "é", "è", "â", "ô",'.', ',', "'", '-'), '',$_POST['handicaps'])))
	{
		$nb_erreurs++;
		$erreurs['handicaps']='Veuillez renseigner ce champ!';
	}
	
	if(!isset ($_POST['traitement']) || !ctype_alpha(str_replace(array(' ', "î", "ï", "ê", "ë", "é", "è", "â", "ô",'.', ',', "'", '-'), '',$_POST['traitement'])))
	{
		$nb_erreurs++;
		$erreurs['traitement']='Veuillez renseigner ce champ!';
	}
	
	if(!isset ($_POST['psycho']) || !ctype_alpha(str_replace(array(' ', "î", "ï", "ê", "ë", "é", "è", "â", "ô",'.', ',', "'", '-'), '',$_POST['psycho'])))
	{
		$nb_erreurs++;
		$erreurs['psycho']='Veuillez renseigner ce champ!';
	}

	//intervention
		
	if(!isset ($_POST['date_entree']) || !preg_match( '`^\d{1,2}/\d{1,2}/\d{4}$`', $_POST['date_entree']))
	{
		$nb_erreurs++;
		$erreurs['date_entree']='Veuillez renseigner une date au format jj/mm/aaaa!';
	}
	
	if(!isset ($_POST['date_intervention']) || !preg_match( '`^\d{1,2}/\d{1,2}/\d{4}$`', $_POST['date_intervention']))
	{
		$nb_erreurs++;
		$erreurs['date_intervention']='Veuillez renseigner une date au format jj/mm/aaaa!';
	}

	if(!isset ($_POST['date_sortie']) || !preg_match( '`^\d{1,2}/\d{1,2}/\d{4}$`', $_POST['date_sortie']))
	{
		$nb_erreurs++;
		$erreurs['date_sortie']='Veuillez renseigner une date au format jj/mm/aaaa!';
	}

	if(!isset ($_POST['intervention']) || !ctype_alpha(str_replace(array(' ',"î", "ï", "ê", "ë", "é", "è", "â", "ô", '.', ',', "'", '-'), '',$_POST['intervention'])))
	{
		$nb_erreurs++;
		$erreurs['intervention']='Veuillez renseigner ce champ!';
	}

	if(!isset ($_POST['chirurgien']) || !ctype_alpha(str_replace(array(' ',"î", "ï", "ê", "ë", "é", "è", "â", "ô", '.', ',', "'", '-'), '',$_POST['chirurgien'])))
	{
		$nb_erreurs++;
		$erreurs['chirurgien']='Veuillez renseigner un docteur!';
	}
	
	//Points médicaux particuliers
	
	if(!isset ($_POST['allergies']) || !ctype_alpha(str_replace(array(' ', "î", "ï", "ê", "ë", "é", "è", "â", "ô",'.', ',', "'", '-'), '',$_POST['allergies'])))
	{
		$nb_erreurs++;
		$erreurs['allergies']='Veuillez renseigner ce champ!';
	}
		
	if (!isset ($_POST['peau']))
	{
		$nb_erreurs++;
		$erreurs['peau']='Veuillez choisir au moins une option!';
	}
		
	if (!isset ($_POST['sphincters']))
	{
		$nb_erreurs++;
		$erreurs['sphincters']='Veuillez choisir au moins une option!';
	}
		
	if(!isset ($_POST['regime_aliments']) || !ctype_alpha(str_replace(array(' ', "î", "ï", "ê", "ë", "é", "è", "â", "ô",'.', ',', "'", '-'), '',$_POST['regime_aliments'])))
	{
		$nb_erreurs++;
		$erreurs['regime_aliments']='Veuillez renseigner ce champ!';
	}
			
	if (!isset ($_POST['aliments']))
	{
		$nb_erreurs++;
		$erreurs['aliments']='Veuillez choisir au moins une option!';
	}
			
	if (!isset ($_POST['gastrostomie']))
	{
		$nb_erreurs++;
		$erreurs['gastrostomie']='Veuillez choisir au moins une option!';
	}
			
	if (!isset ($_POST['ventilation']))
	{
		$nb_erreurs++;
		$erreurs['ventilation']='Veuillez choisir au moins une option!';
	}
			
	if (!isset ($_POST['perfusion']))
	{
		$nb_erreurs++;
		$erreurs['perfusion']='Veuillez choisir au moins une option!';
	}
			
	if(!isset ($_POST['autres_medic']) || !ctype_alpha(str_replace(array(' ', "î", "ï", "ê", "ë", "é", "è", "â", "ô",'.', ',', "'", '-'), '',$_POST['autres_medic'])))
	{
		$nb_erreurs++;
		$erreurs['autres_medic']='Veuillez renseigner ce champ!';
	}
	
	//autonomie

	if(!isset ($_POST['install_jour']) || !ctype_alpha(str_replace(array(' ',"î", "ï", "ê", "ë", "é", "è", "â", "ô", '.', ',', "'", '-'), '',$_POST['install_jour'])))
	{
		$nb_erreurs++;
		$erreurs['install_jour']='Veuillez renseigner ce champ!';
	}
	
	if(!isset ($_POST['install_nuit']) || !ctype_alpha(str_replace(array(' ', "î", "ï", "ê", "ë", "é", "è", "â", "ô",'.', ',', "'", '-'), '',$_POST['install_nuit'])))
	{
		$nb_erreurs++;
		$erreurs['install_nuit']='Veuillez renseigner ce champ!';
	}
	
	if (!isset ($_POST['marche']))
	{
		$nb_erreurs++;
		$erreurs['marche']='Veuillez choisir au moins une option!';
	}
		
	if (!isset ($_POST['fauteil']))
	{
		$nb_erreurs++;
		$erreurs['fauteil']='Veuillez choisir au moins une option!';
	}
		
	if (!isset ($_POST['toilette']))
	{
		$nb_erreurs++;
		$erreurs['toilette']='Veuillez choisir au moins une option!';
	}
		
	if (!isset ($_POST['corset']))
	{
		$nb_erreurs++;
		$erreurs['corset']='Veuillez choisir au moins une option!';
	}
		
	if (!isset ($_POST['habillage']))
	{
		$nb_erreurs++;
		$erreurs['habillage']='Veuillez choisir au moins une option!';
	}
		
	if (!isset ($_POST['repas']))
	{
		$nb_erreurs++;
		$erreurs['repas']='Veuillez choisir au moins une option!';
	}
		
	if (!isset ($_POST['sphincters_aide']))
	{
		$nb_erreurs++;
		$erreurs['sphincters_aide']='Veuillez choisir au moins une option!';
	}	
	if (!isset ($_POST['vision']))
	{
		$nb_erreurs++;
		$erreurs['vision']='Veuillez choisir au moins une option!';
	}
		
	if (!isset ($_POST['audition']))
	{
		$nb_erreurs++;
		$erreurs['audition']='Veuillez choisir au moins une option!';
	}
			
	if (!isset ($_POST['communication']))
	{
		$nb_erreurs++;
		$erreurs['communication']='Veuillez choisir au moins une option!';
	}
			
	if (!isset ($_POST['comportement']))
	{
		$nb_erreurs++;
		$erreurs['comportement']='Veuillez choisir au moins une option!';
	}
	
	if($nb_erreurs==null)
	{
		include 'views/form.php';	
	}
	
	else
	{
		include 'views/form.php';	
	}
	
?>