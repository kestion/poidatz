<!DOCTYPE html>

<html>

	<head>
	
		<link rel="stylesheet" type="text/css" href="styles/formStyle.css" />
	
	</head>
	
	<body>
	
		<form action="index.php?page=formulaire_admission&action=form_verif" method="post" enctype="multipart/form-data">
		
			<fieldset>
				
				<legend>Demande d'admission</legend>
				<p>à ne remplir que par un professionel de santé</p><br />
				
				<table>
				
					<tr class="width1">
					
						<td>	
							<label for="date">Date de la demande : </label>
						</td>
						<td>
							<input type="text" name="date" id="date" value="<?php if (isset ($_POST['date']) && !isset ($erreurs['date'])) { echo $_POST['date'];}?>" />
						</td>
						
						<td>
							<label for="corres">Correspondant : </label>
						</td>
						<td>
							<input type="text" name="corres" id="corres" value="<?php if (isset ($_POST['corres']) && !isset ($erreurs['corres'])) { echo $_POST['corres'];}?>" /><br />
						</td>
					
					</tr>
					
					<tr>
						
						<td>
							<p>&nbsp;</p>
						</td>
						<td>
							<?php if(isset($erreurs['date']))echo '<p class="erreur">'.$erreurs['date'].'</p>';?>
						</td>
						
						<td>
							<p>&nbsp;</p>
						</td>
						<td>
							<?php if(isset($erreurs['corres']))echo '<p class="erreur">'.$erreurs['corres'].'</p>';?>
						</td>
						
					</tr>

					<tr class="width1">
						
						<td>
							<p>&nbsp;</p>
						</td>
						<td>
							<p>&nbsp;</p>
						</td>
						
					
						<td>
							<label for="etablissement">&Eacute;tablissement : </label>
						</td>
						<td>
							<input type="text" name="etablissement" id="etablissement" value="<?php if (isset ($_POST['etablissement']) && !isset ($erreurs['etablissement'])) { echo $_POST['etablissement'];}?>" /><br />
						</td>
					
					</tr>	
					
					<tr>
						
						<td>
							<p>&nbsp;</p>
						</td>
						<td>
							<p>&nbsp;</p>
						</td>
						
						<td>
							<p>&nbsp;</p>
						</td>
						<td>
							<?php if(isset($erreurs['etablissement']))echo '<p class="erreur">'.$erreurs['etablissement'].'</p>';?>
						</td>
						
					</tr>
					
					<tr class="width1">

						<td>
							<label for="upload">Envoie de pièce jointe : </label>
						</td>
						<td>
							<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
							<input type="file" name="upload" id="upload" />
						</td>	
							
						<td>	
							<label for="consult_ext">Consultation externe : </label>
						</td>
						<td>
							<input type="text" name="consult_ext" id="consult_ext" value="<?php if (isset ($_POST['consult_ext']) && !isset ($erreurs['consult_ext'])) { echo $_POST['consult_ext'];}?>" /><br />
						</td>
					
					</tr>
					
					<tr>
						
						<td>
							<p>&nbsp;</p>
						</td>
						<td>
							<p>&nbsp;</p>
						</td>
						
						<td>
							<p>&nbsp;</p>
						</td>
						<td>
							<?php if(isset($erreurs['consult_ext']))echo '<p class="erreur">'.$erreurs['consult_ext'].'</p>';?>
						</td>
						
					</tr>
					
					<tr>
						
						<td>
							<label for="email">E-mail : </label>
						</td>
						<td>
							<input type="text" name="email" id="email" value="<?php if (isset ($_POST['email']) && !isset ($erreurs['email'])) { echo $_POST['email'];}?>" />
						</td>

						<td>
							<label for="doc">Docteur : </label>
						</td>
						<td>
							<input type="text" name="doc" id="doc" value="<?php if (isset ($_POST['doc']) && !isset ($erreurs['doc'])) { echo $_POST['doc'];}?>" /><br />
						</td>
					
					</tr>
					
					<tr>
						
						<td>
							<p>&nbsp;</p>
						</td>
						<td>
							<?php if(isset($erreurs['email']))echo '<p class="erreur">'.$erreurs['email'].'</p>';?>
						</td>						
						
						<td>
							<p>&nbsp;</p>
						</td>
						<td>
							<?php if(isset($erreurs['doc']))echo '<p class="erreur">'.$erreurs['doc'].'</p>';?>
						</td>
						
					</tr>
					
					<tr>
					
						<td>
							<p>&nbsp;</p>
						</td>
						<td>
							<p>&nbsp;</p>
						</td>
						
						<td>
							<label for="date_jour">Date : </label>
						</td>
						<td>
							<input type="text" name="date_jour" id="date_jour" value="<?php if (isset ($_POST['date_jour']) && !isset ($erreurs['date_jour'])) { echo $_POST['date_jour'];}?>" /><br />
						</td>
					
					</tr>
					
					<tr>
						
						<td>
							<p>&nbsp;</p>
						</td>
						<td>
							<p>&nbsp;</p>
						</td>						
						
						<td>
							<p>&nbsp;</p>
						</td>
						<td>
							<?php if(isset($erreurs['date_jour']))echo '<p class="erreur">'.$erreurs['date_jour'].'</p>';?>
						</td>
						
					</tr>
			
				</table>
				
				<fieldset>
					
					<legend>&Eacute;tat Civil</legend>
					
					<table class="width1 decalage">
					
						<tr>
							
							<td>
								<label for="nom">Nom : </label>
							</td>
							<td>
								<input type="text" name="nom" id="nom" value="<?php if (isset ($_POST['nom']) && !isset ($erreurs['nom'])) { echo $_POST['nom'];}?>" />
							</td>

							<td>
								<label for="prenom">Prénom : </label>
							</td>
							<td>
								<input type="text" name="prenom" id="prenom" value="<?php if (isset ($_POST['prenom']) && !isset ($erreurs['prenom'])) { echo $_POST['prenom'];}?>" /><br />
							</td>
						
						</tr>
						
						<tr>
							
							<td>
								<p>&nbsp;</p>
							</td>
							<td>
								<?php if(isset($erreurs['nom']))echo '<p class="erreur">'.$erreurs['nom'].'</p>';?>
							</td>						
							
							<td>
								<p>&nbsp;</p>
							</td>
							<td>
								<?php if(isset($erreurs['prenom']))echo '<p class="erreur">'.$erreurs['prenom'].'</p>';?>
							</td>
							
						</tr>
					
						<tr>
							
							<td>
								<label for="date_naissance">Date de naissance : </label>
							</td>
							<td>
								<input type="text" name="date_naissance" id="date_naissance" value="<?php if (isset ($_POST['date_naissance']) && !isset ($erreurs['date_naissance'])) { echo $_POST['date_naissance'];}?>" />
							</td>

							<td>
								<label for="tel">Numéro de téléphone : </label>
							</td>
							<td>
								<input type="text" name="tel" id="tel" value="<?php if (isset ($_POST['tel']) && !isset ($erreurs['tel'])) { echo $_POST['tel'];}?>" /><br />
							</td>
						
						</tr>
					
						<tr>
							
							<td>
								<p>&nbsp;</p>
							</td>
							<td>
								<?php if(isset($erreurs['date_naissance']))echo '<p class="erreur">'.$erreurs['date_naissance'].'</p>';?>
							</td>						
							
							<td>
								<p>&nbsp;</p>
							</td>
							<td>
								<?php if(isset($erreurs['tel']))echo '<p class="erreur">'.$erreurs['tel'].'</p>';?>
							</td>
							
						</tr>
					
						<tr>
							
							<td>
								<label for="adresse">Adresse : </label>
							</td>
							<td>
								<input type="text" name="adresse" id="adresse" value="<?php if (isset ($_POST['adresse']) && !isset ($erreurs['adresse'])) { echo $_POST['adresse'];}?>" />
							</td>

							<td>
								<label for="cp">Code Postal : </label>
							</td>
							<td>
								<input type="text" name="cp" id="cp" value="<?php if (isset ($_POST['cp']) && !isset ($erreurs['cp'])) { echo $_POST['cp'];}?>" /><br />
							</td>
						
						</tr>

						<tr>
							
							<td>
								<p>&nbsp;</p>
							</td>
							<td>
								<?php if(isset($erreurs['adresse']))echo '<p class="erreur">'.$erreurs['adresse'].'</p>';?>
							</td>						
							
							<td>
								<p>&nbsp;</p>
							</td>
							<td>
								<?php if(isset($erreurs['cp']))echo '<p class="erreur">'.$erreurs['cp'].'</p>';?>
							</td>
							
						</tr>
						
						<tr>
							
							<td>
								<label for="ville">Ville : </label>
							</td>
							<td>
								<input type="text" name="ville" id="ville" value="<?php if (isset ($_POST['ville']) && !isset ($erreurs['ville'])) { echo $_POST['ville'];}?>" />
							</td>

							<td>
								<label for="pays">Pays : </label>
							</td>
							<td>
								<input type="text" name="pays" id="pays" value="<?php if (isset ($_POST['pays']) && !isset ($erreurs['pays'])) { echo $_POST['pays'];}?>" /><br />
							</td>
						
						</tr>

						<tr>
							
							<td>
								<p>&nbsp;</p>
							</td>
							<td>
								<?php if(isset($erreurs['ville']))echo '<p class="erreur">'.$erreurs['ville'].'</p>';?>
							</td>						
							
							<td>
								<p>&nbsp;</p>
							</td>
							<td>
								<?php if(isset($erreurs['pays']))echo '<p class="erreur">'.$erreurs['pays'].'</p>';?>
							</td>
							
						</tr>
						
					</table>
					
					<fieldset>
					
						<legend>Père ou Tuteur</legend>
						
						<table class="width1">
						
							<tr>
								
								<td>
									<label for="nom_pere">Nom : </label>
								</td>
								<td>
									<input type="text" name="nom_pere" id="nom_pere" value="<?php if (isset ($_POST['nom_pere']) && !isset ($erreurs['nom_pere'])) { echo $_POST['nom_pere'];}?>" />
								</td>

								<td>
									<label for="prenom_pere">Prénom : </label>
								</td>
								<td>
									<input type="text" name="prenom_pere" id="prenom_pere" value="<?php if (isset ($_POST['prenom_pere']) && !isset ($erreurs['prenom_pere'])) { echo $_POST['prenom_pere'];}?>" /><br />
								</td>
							
							</tr>

							<tr>
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['nom_pere']))echo '<p class="erreur">'.$erreurs['nom_pere'].'</p>';?>
								</td>						
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['prenom_pere']))echo '<p class="erreur">'.$erreurs['prenom_pere'].'</p>';?>
								</td>
								
							</tr>
						
							<tr>
								
								<td>
									<label for="date_naissance_pere">Date de naissance : </label>
								</td>
								<td>
									<input type="text" name="date_naissance_pere" id="date_naissance_pere" value="<?php if (isset ($_POST['date_naissance_pere']) && !isset ($erreurs['date_naissance_pere'])) { echo $_POST['date_naissance_pere'];}?>" />
								</td>

								<td>
									<label for="tel_pere">Numéro de téléphone : </label>
								</td>
								<td>
									<input type="text" name="tel_pere" id="tel_pere" value="<?php if (isset ($_POST['tel_pere']) && !isset ($erreurs['tel_pere'])) { echo $_POST['tel_pere'];}?>" /><br />
								</td>
							
							</tr>

							<tr>
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['date_naissance_pere']))echo '<p class="erreur">'.$erreurs['date_naissance_pere'].'</p>';?>
								</td>						
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['tel_pere']))echo '<p class="erreur">'.$erreurs['tel_pere'].'</p>';?>
								</td>
								
							</tr>
						
							<tr>
								
								<td>
									<label for="adresse_pere">Adresse : </label>
								</td>
								<td>
									<input type="text" name="adresse_pere" id="adresse_pere" value="<?php if (isset ($_POST['adresse_pere']) && !isset ($erreurs['adresse_pere'])) { echo $_POST['adresse_pere'];}?>" />
								</td>

								<td>
									<label for="cp_pere">Code Postal : </label>
								</td>
								<td>
									<input type="text" name="cp_pere" id="cp_pere" value="<?php if (isset ($_POST['cp_pere']) && !isset ($erreurs['cp_pere'])) { echo $_POST['cp_pere'];}?>" /><br />
								</td>
							
							</tr>

							<tr>
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['adresse_pere']))echo '<p class="erreur">'.$erreurs['adresse_pere'].'</p>';?>
								</td>						
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['cp_pere']))echo '<p class="erreur">'.$erreurs['cp_pere'].'</p>';?>
								</td>
								
							</tr>
						
							<tr>
								
								<td>
									<label for="ville_pere">Ville : </label>
								</td>
								<td>
									<input type="text" name="ville_pere" id="ville_pere" value="<?php if (isset ($_POST['ville_pere']) && !isset ($erreurs['ville_pere'])) { echo $_POST['ville_pere'];}?>" />
								</td>

								<td>
									<label for="pays_pere">Pays : </label>
								</td>
								<td>
									<input type="text" name="pays_pere" id="pays_pere" value="<?php if (isset ($_POST['pays_pere']) && !isset ($erreurs['pays_pere'])) { echo $_POST['pays_pere'];}?>" /><br />
								</td>
							
							</tr>
							
							<tr>
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['ville_pere']))echo '<p class="erreur">'.$erreurs['ville_pere'].'</p>';?>
								</td>						
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['pays_pere']))echo '<p class="erreur">'.$erreurs['pays_pere'].'</p>';?>
								</td>
								
							</tr>
						
						</table>
						
					</fieldset>
					
					<fieldset>
						
						<legend>Mère ou Tutrice</legend>
						
						<table class="width1">
						
							<tr>
								
								<td>
									<label for="nom_mere">Nom : </label>
								</td>
								<td>
									<input type="text" name="nom_mere" id="nom_mere" value="<?php if (isset ($_POST['nom_mere']) && !isset ($erreurs['nom_mere'])) { echo $_POST['nom_mere'];}?>" />
								</td>

								<td>
									<label for="prenom_mere">Prénom : </label>
								</td>
								<td>
									<input type="text" name="prenom_mere" id="prenom_mere" value="<?php if (isset ($_POST['prenom_mere']) && !isset ($erreurs['prenom_mere'])) { echo $_POST['prenom_mere'];}?>" /><br />
								</td>
							
							</tr>
							
							<tr>
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['nom_mere']))echo '<p class="erreur">'.$erreurs['nom_mere'].'</p>';?>
								</td>						
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['prenom_mere']))echo '<p class="erreur">'.$erreurs['prenom_mere'].'</p>';?>
								</td>
								
							</tr>
						
							<tr>
								
								<td>
									<label for="date_naissance_mere">Date de naissance : </label>
								</td>
								<td>
									<input type="text" name="date_naissance_mere" id="date_naissance_mere" value="<?php if (isset ($_POST['date_naissance_mere']) && !isset ($erreurs['date_naissance_mere'])) { echo $_POST['date_naissance_mere'];}?>" />
								</td>

								<td>
									<label for="tel_mere">Numéro de téléphone : </label>
								</td>
								<td>
									<input type="text" name="tel_mere" id="tel_mere" value="<?php if (isset ($_POST['tel_mere']) && !isset ($erreurs['tel_mere'])) { echo $_POST['tel_mere'];}?>" /><br />
								</td>
							
							</tr>
							
							<tr>
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['date_naissance_mere']))echo '<p class="erreur">'.$erreurs['date_naissance_mere'].'</p>';?>
								</td>						
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['tel_mere']))echo '<p class="erreur">'.$erreurs['tel_mere'].'</p>';?>
								</td>
								
							</tr>
						
							<tr>
								
								<td>
									<label for="adresse_mere">Adresse : </label>
								</td>
								<td>
									<input type="text" name="adresse_mere" id="adresse_mere" value="<?php if (isset ($_POST['adresse_mere']) && !isset ($erreurs['adresse_mere'])) { echo $_POST['adresse_mere'];}?>" />
								</td>

								<td>
									<label for="cp_mere">Code Postal : </label>
								</td>
								<td>
									<input type="text" name="cp_mere" id="cp_mere" value="<?php if (isset ($_POST['cp_mere']) && !isset ($erreurs['cp_mere'])) { echo $_POST['cp_mere'];}?>" /><br />
								</td>
							
							</tr>
							
							<tr>
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['adresse_mere']))echo '<p class="erreur">'.$erreurs['adresse_mere'].'</p>';?>
								</td>						
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['cp_mere']))echo '<p class="erreur">'.$erreurs['cp_mere'].'</p>';?>
								</td>
								
							</tr>
						
							<tr>
								
								<td>
									<label for="ville_mere">Ville : </label>
								</td>
								<td>
									<input type="text" name="ville_mere" id="ville_mere" value="<?php if (isset ($_POST['ville_mere']) && !isset ($erreurs['ville_mere'])) { echo $_POST['ville_mere'];}?>" />
								</td>

								<td>
									<label for="pays_mere">Pays : </label>
								</td>
								<td>
									<input type="text" name="pays_mere" id="pays_mere" value="<?php if (isset ($_POST['pays_mere']) && !isset ($erreurs['pays_mere'])) { echo $_POST['pays_mere'];}?>" /><br />
								</td>
							
							</tr>
							
							<tr>
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['ville_mere']))echo '<p class="erreur">'.$erreurs['ville_mere'].'</p>';?>
								</td>						
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['pays_mere']))echo '<p class="erreur">'.$erreurs['pays_mere'].'</p>';?>
								</td>
								
							</tr>
						
						</table>
						
					</fieldset>

					<fieldset>
					
						<legend>Responsable légal</legend>
						
						<table class="width1">
						
							<tr>
								
								<td>
									<label for="nom_rl">Nom : </label>
								</td>
								<td>
									<input type="text" name="nom_rl" id="nom_rl" value="<?php if (isset ($_POST['nom_rl']) && !isset ($erreurs['nom_rl'])) { echo $_POST['nom_rl'];}?>" />
								</td>

								<td>
									<label for="prenom_rl">Prénom : </label>
								</td>
								<td>
									<input type="text" name="prenom_rl" id="prenom_rl" value="<?php if (isset ($_POST['prenom_rl']) && !isset ($erreurs['prenom_rl'])) { echo $_POST['prenom_rl'];}?>" /><br />
								</td>
							
							</tr>
							
							<tr>
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['nom_rl']))echo '<p class="erreur">'.$erreurs['nom_rl'].'</p>';?>
								</td>						
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['prenom_rl']))echo '<p class="erreur">'.$erreurs['prenom_rl'].'</p>';?>
								</td>
								
							</tr>
						
							<tr>
								
								<td>
									<label for="date_naissance_rl">Date de naissance : </label>
								</td>
								<td>
									<input type="text" name="date_naissance_rl" id="date_naissance_rl" value="<?php if (isset ($_POST['date_naissance_rl']) && !isset ($erreurs['date_naissance_rl'])) { echo $_POST['date_naissance_rl'];}?>" />
								</td>

								<td>
									<label for="tel_rl">Numéro de téléphone : </label>
								</td>
								<td>
									<input type="text" name="tel_rl" id="tel_rl" value="<?php if (isset ($_POST['tel_rl']) && !isset ($erreurs['tel_rl'])) { echo $_POST['tel_rl'];}?>" /><br />
								</td>
							
							</tr>
							
							<tr>
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['date_naissance_rl']))echo '<p class="erreur">'.$erreurs['date_naissance_rl'].'</p>';?>
								</td>						
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['tel_rl']))echo '<p class="erreur">'.$erreurs['tel_rl'].'</p>';?>
								</td>
								
							</tr>
						
							<tr>
								
								<td>
									<label for="adresse_rl">Adresse : </label>
								</td>
								<td>
									<input type="text" name="adresse_rl" id="adresse_rl" value="<?php if (isset ($_POST['adresse_rl']) && !isset ($erreurs['adresse_rl'])) { echo $_POST['adresse_rl'];}?>" />
								</td>

								<td>
									<label for="cp_rl">Code Postal : </label>
								</td>
								<td>
									<input type="text" name="cp_rl" id="cp_rl" value="<?php if (isset ($_POST['cp_rl']) && !isset ($erreurs['cp_rl'])) { echo $_POST['cp_rl'];}?>" /><br />
								</td>
							
							</tr>
							
							<tr>
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['adresse_rl']))echo '<p class="erreur">'.$erreurs['adresse_rl'].'</p>';?>
								</td>						
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['cp_rl']))echo '<p class="erreur">'.$erreurs['cp_rl'].'</p>';?>
								</td>
								
							</tr>
						
							<tr>
								
								<td>
									<label for="ville_rl">Ville : </label>
								</td>
								<td>
									<input type="text" name="ville_rl" id="ville_rl" value="<?php if (isset ($_POST['ville_rl']) && !isset ($erreurs['ville_rl'])) { echo $_POST['ville_rl'];}?>" />
								</td>

								<td>
									<label for="pays_rl">Pays : </label>
								</td>
								<td>
									<input type="text" name="pays_rl" id="pays_rl" value="<?php if (isset ($_POST['pays_rl']) && !isset ($erreurs['pays_rl'])) { echo $_POST['pays_rl'];}?>" /><br />
								</td>
							
							</tr>
							
							<tr>
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['ville_rl']))echo '<p class="erreur">'.$erreurs['ville_rl'].'</p>';?>
								</td>						
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['pays_rl']))echo '<p class="erreur">'.$erreurs['pays_rl'].'</p>';?>
								</td>
								
							</tr>
						
						</table>
					
					</fieldset>

					<table class="width1">
					
						<tr>
						
							<td>
								<label for="secu">Sécurité Sociale : </label>
							</td>
							<td>
								<input type="radio" name="secu" value="oui" /> Oui
							</td>
							<td>
								<input type="radio" name="secu" value="non" checked /> Non
							</td>
							
							<td>
								<?php if(isset($erreurs['secu']))echo '<p class="erreur">'.$erreurs['secu'].'</p>';?>
							</td>
							
							<td>
								<label for="secu_100">100% : </label>
							</td>
							<td>
								<input type="radio" name="secu_100" value="oui" /> Oui
							</td>
							<td>
								<input type="radio" name="secu_100" value="non" checked /> Non
							</td>
							
							<td>
								<?php if(isset($erreurs['secu_100']))echo '<p class="erreur">'.$erreurs['secu_100'].'</p>';?>
							</td>
						
						</tr>
						
						<tr>
						
							<td>
								<label for="aes">AES ou carte d'invalidité : </label>
							</td>
							<td>
								<input type="radio" name="aes" value="oui" /> Oui
							</td>
							<td>
								<input type="radio" name="aes" value="non" checked /> Non
							</td>
							
							<td>
								<?php if(isset($erreurs['aes']))echo '<p class="erreur">'.$erreurs['aes'].'</p>';?>
							</td>

							<td>
								<label for="mutuelle">Mutuelle : </label>
							</td>
							<td>
								<input type="radio" name="mutuelle" value="oui" /> Oui
							</td>
							<td>
								<input type="radio" name="mutuelle" value="non" checked /> Non
							</td>
							
							<td>
								<?php if(isset($erreurs['mutuelle']))echo '<p class="erreur">'.$erreurs['mutuelle'].'</p>';?>
							</td>

						</tr>
						
					</table>
					
				</fieldset>
				
				<fieldset>
				
					<legend>Social</legend>
				
					<table class="width1">
					
						<tr>
							
							<td colspan="2">
								<label for="social">Mesures sociales particulières (AEMO, placement) : </label>
							</td>
							<td>
								<input type="text" name="social" id="social" value="<?php if (isset ($_POST['social']) && !isset ($erreurs['social'])) { echo $_POST['social'];}?>" /><br />
							</td>
							
							<td>
								<?php if(isset($erreurs['social']))echo '<p class="erreur">'.$erreurs['social'].'</p>';?>
							</td>
							
						</tr>
						
						<tr>
							
							<td>
								<label for="assistance_soc">Assistante sociale ou service intervenant : </label>
							</td>
							<td>
								<input type="text" name="assistance_soc" id="assistance_soc" value="<?php if (isset ($_POST['assistance_soc']) && !isset ($erreurs['assistance_soc'])) { echo $_POST['assistance_soc'];}?>" /><br />
							</td>
							
							<td>
								<label for="tel_soc">Téléphone : </label>
							</td>
							<td>
								<input type="text" name="tel_soc" id="tel_soc" value="<?php if (isset ($_POST['tel_soc']) && !isset ($erreurs['tel_soc'])) { echo $_POST['tel_soc'];}?>" /><br />
							</td>
							
						</tr>
					
						<tr>
						
							<td>
								<p>&nbsp;</p>
							</td>
							<td>
								<?php if(isset($erreurs['assistance_soc']))echo '<p class="erreur">'.$erreurs['assistance_soc'].'</p>';?>
							</td>
							
							<td>
								<p>&nbsp;</p>
							</td>
							<td>
								<?php if(isset($erreurs['tel_soc']))echo '<p class="erreur">'.$erreurs['tel_soc'].'</p>';?>
							</td>
						
						</tr>
					
					</table>
				
				</fieldset>
				
				<fieldset>
				
					<legend>Scolarité</legend>
					
					<table class="personnalise">
					<!--gestion taille des cases du tableau au cas par cas -->
						
						<tr>
						
							<td>
								<label for="milieu_scol">Milieu : </label>
							</td>
							<td>
								<input type="radio" name="milieu_scol" value="ord" /> Ordinaire
								<input type="radio" name="milieu_scol" value="spe" checked/> Spécialisé
							</td>
							
							<td class="champgauche">
								<label for="classe">Classe : </label>
							</td>
							<td>
								<input type="text" name="classe" id="classe" value="<?php if (isset ($_POST['classe']) && !isset ($erreurs['classe'])) { echo $_POST['classe'];}?>" /><br />
							</td>
						
						</tr>
						
						<tr>
						
							<td colspan="2">
								<?php if(isset($erreurs['milieu_scol']))echo '<p class="erreur">'.$erreurs['milieu_scol'].'</p>';?>
							</td>
							
							<td class="champgauche">
								<p>&nbsp;</p>
							</td>
							<td>
								<?php if(isset($erreurs['classe']))echo '<p class="erreur">'.$erreurs['classe'].'</p>';?>
							</td>
						
						</tr>
						
						<tr>
						
							<td>
								<label for="ordinateur">Saisie autonome sur ordinateur : </label>
							</td>
							<td>
								<input type="radio" name="ordinateur" value="oui" /> Oui
								<input type="radio" name="ordinateur" value="non" checked/> Non
							</td>
						
							<td class="champgauche">
								<label for="etablissement_scol">&Eacute;tablissement : </label>
							</td>
							<td>
								<input type="text" name="etablissement_scol" id="etablissement_scol" value="<?php if (isset ($_POST['etablissement_scol']) && !isset ($erreurs['etablissement_scol'])) { echo $_POST['etablissement_scol'];}?>" /><br />
							</td>
						
						</tr>
						
						<tr>
						
							<td colspan="2">
								<?php if(isset($erreurs['ordinateur']))echo '<p class="erreur">'.$erreurs['ordinateur'].'</p>';?>
							</td>
							
							<td class="champgauche">
								<p>&nbsp;</p>
							</td>
							<td>
								<?php if(isset($erreurs['etablissement_scol']))echo '<p class="erreur">'.$erreurs['etablissement_scol'].'</p>';?>
							</td>
						
						</tr>
						
						<tr>
						
							<td>
								<label for="tel_scol">Téléphone : </label>
							</td>
							<td>
								<input type="text" name="tel_scol" id="tel_scol" value="<?php if (isset ($_POST['tel_scol']) && !isset ($erreurs['tel_scol'])) { echo $_POST['tel_scol'];}?>" /><br />
							</td>
							
							<td class="champgauche">
								<label for="adresse_scol">Adresse : </label>
							</td>
							<td>
								<input type="text" name="adresse_scol" id="adresse_scol" value="<?php if (isset ($_POST['adresse_scol']) && !isset ($erreurs['adresse_scol'])) { echo $_POST['adresse_scol'];}?>" /><br />
							</td>
						
						</tr>
						
						<tr>
						
							<td colspan="2">
								<?php if(isset($erreurs['tel_scol']))echo '<p class="erreur">'.$erreurs['tel_scol'].'</p>';?>
							</td>
							
							<td class="champgauche">
								<p>&nbsp;</p>
							</td>
							<td>
								<?php if(isset($erreurs['adresse_scol']))echo '<p class="erreur">'.$erreurs['adresse_scol'].'</p>';?>
							</td>
						
						</tr>
						
						<tr>
						
							<td>
								<label for="cp_scol">Code Postal : </label>
							</td>
							<td>
								<input type="text" name="cp_scol" id="cp_scol" value="<?php if (isset ($_POST['cp_scol']) && !isset ($erreurs['cp_scol'])) { echo $_POST['cp_scol'];}?>" /><br />
							</td>
							
							<td class="champgauche">
								<label for="ville_scol">Ville : </label>
							</td>
							<td>
								<input type="text" name="ville_scol" id="ville_scol" value="<?php if (isset ($_POST['ville_scol']) && !isset ($erreurs['ville_scol'])) { echo $_POST['ville_scol'];}?>" /><br />
							</td>
						
						</tr>
						
						<tr>
						
							<td colspan="2">
								<?php if(isset($erreurs['cp_scol']))echo '<p class="erreur">'.$erreurs['cp_scol'].'</p>';?>
							</td>
							
							<td class="champgauche">
								<p>&nbsp;</p>
							</td>
							<td>
								<?php if(isset($erreurs['ville_scol']))echo '<p class="erreur">'.$erreurs['ville_scol'].'</p>';?>
							</td>
						
						</tr>
						
					</table>
				
				</fieldset>
				
				<fieldset>
				
					<legend>Logement</legend>
					
					<table class="width1">
					
						<tr>
							
							<td>	
								<label for="access">Accesibilité : </label>
							</td>
							<td>
								<input type="checkbox" name="access" value="ascenseur" checked /> Ascenseur
							</td>
							<td>
								<input type="checkbox" name="access" value="escalier" /> Escalier
							</td>
							<td>
								<input type="checkbox" name="access" value="etage" /> &Eacute;tage
							</td>
							<td>
								<input type="checkbox" name="access" value="appart" /> Appartement
							</td>
							<td>
								<input type="checkbox" name="access" value="pavillon" /> Pavillon
							</td>
							
						</tr>
						
						<tr>
							<td colspan="6">
								<?php if(isset($erreurs['access']))echo '<p class="erreur">'.$erreurs['access'].'</p>';?>
							</td>
						</tr>
						
						<tr>
						
							<td>	
								<label for="amenagement">Aménagements spécifiques : </label>
							</td>
							<td>
								<input type="checkbox" name="amenagement" value="wc" checked /> WC
							</td>
							<td>
								<input type="checkbox" name="amenagement" value="sdb" /> Salle de bain
							</td>
							<td>
								<input type="checkbox" name="amenagement" value="chaise" /> Chaise garde-robe
							</td>
							<td>
								<input type="checkbox" name="amenagement" value="lit" /> Lit médicalisé
							</td>
							<td>
								<input type="checkbox" name="amenagement" value="leve_personne" /> Lève personne
							</td>
							
						</tr>
						
						<tr>
							<td colspan="6">
								<?php if(isset($erreurs['amenagement']))echo '<p class="erreur">'.$erreurs['amenagement'].'</p>';?>
							</td>
						</tr>
						
						<tr>
							<td>
								<label for="logement">Autres : </label>
							</td>
							<td colspan="5">
								<input type="text" name="logement" id="logement" style="width:100%;" value="<?php if (isset ($_POST['logement']) && !isset ($erreurs['logement'])) { echo $_POST['logement'];}?>" /><br />
							</td>
						</tr>
						
						<tr>
							<td colspan="6">
								<?php if(isset($erreurs['logement']))echo '<p class="erreur">'.$erreurs['logement'].'</p>';?>
							</td>
						</tr>
				
					</table>
				
				</fieldset>
				
				<fieldset>
				
					<legend>Renseignements Médicaux</legend>
					
					<table class="width1 decalage">
						
						<tr>
							<td>
								<label for="motif">Motif du séjour : </label>
							</td>
							<td colspan="3">
								<input type="text" name="motif" id="motif" style="width:100%;" value="<?php if (isset ($_POST['motif']) && !isset ($erreurs['motif'])) { echo $_POST['motif'];}?>" /><br />
							</td>
						</tr>
						
						<tr>
							<td colspan="4">
								<?php if(isset($erreurs['motif']))echo '<p class="erreur">'.$erreurs['motif'].'</p>';?>
							</td>
						</tr>
				
						<tr>
							<td>
								<label for="diagnostic">Diagnostic : </label>
							</td>
							<td>
								<input type="text" name="diagnostic" id="diagnostic" value="<?php if (isset ($_POST['diagnostic']) && !isset ($erreurs['diagnostic'])) { echo $_POST['diagnostic'];}?>" /><br />
							</td>
							
							<td>
								<label for="handicaps">Handicaps associés : </label>
							</td>
							<td>
								<input type="text" name="handicaps" id="handicaps" value="<?php if (isset ($_POST['handicaps']) && !isset ($erreurs['handicaps'])) { echo $_POST['handicaps'];}?>" /><br />
							</td>
							
						</tr>
						
						<tr>
							<td colspan="2">
								<?php if(isset($erreurs['diagnostic']))echo '<p class="erreur">'.$erreurs['diagnostic'].'</p>';?>
							</td>
							
							<td>
								<p>&nbsp;</p>
							</td>
							<td>
								<?php if(isset($erreurs['handicaps']))echo '<p class="erreur">'.$erreurs['handicaps'].'</p>';?>
							</td>
						</tr>
						
						<tr>
							<td>
								<label for="traitement">Traitement médical en cours : </label>
							</td>
							<td>
								<input type="text" name="traitement" id="traitement" value="<?php if (isset ($_POST['traitement']) && !isset ($erreurs['traitement'])) { echo $_POST['traitement'];}?>" /><br />
							</td>
							
							<td>
								<label for="psycho">Suivi psychologique : </label>
							</td>
							<td>
								<input type="text" name="psycho" id="psycho" value="<?php if (isset ($_POST['psycho']) && !isset ($erreurs['psycho'])) { echo $_POST['psycho'];}?>" /><br />
							</td>
						</tr>
						
						<tr>
							<td colspan="2">
								<?php if(isset($erreurs['traitement']))echo '<p class="erreur">'.$erreurs['traitement'].'</p>';?>
							</td>
							
							<td>
								<p>&nbsp;</p>
							</td>
							<td>
								<?php if(isset($erreurs['psycho']))echo '<p class="erreur">'.$erreurs['psycho'].'</p>';?>
							</td>
						</tr>
						
					</table>
				
					<fieldset>
					
						<legend>Intervention : </legend>
					
						<table class="width1">
							
							<tr>
							
								<td>
									<label for="date_entree">Date d'entrée souhaitée : </label>
								</td>
								<td>
									<input type="text" name="date_entree" id="date_entree" value="<?php if (isset ($_POST['date_entree']) && !isset ($erreurs['date_entree'])) { echo $_POST['date_entree'];}?>" /><br />
								</td>
							
								<td>
									<label for="date_intervention">Date de l'intervention : </label>
								</td>
								<td>
									<input type="text" name="date_intervention" id="date_intervention" value="<?php if (isset ($_POST['date_intervention']) && !isset ($erreurs['date_intervention'])) { echo $_POST['date_intervention'];}?>" /><br />
								</td>
							
							</tr>
						
							<tr>
							
								<td colspan="2">
									<?php if(isset($erreurs['date_entree']))echo '<p class="erreur">'.$erreurs['date_entree'].'</p>';?>
								</td>
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['date_intervention']))echo '<p class="erreur">'.$erreurs['date_intervention'].'</p>';?>
								</td>
								
							</tr>
						
							<tr>
							
								<td>
									<label for="date_sortie">Date de sortie souhaitée : </label>
								</td>
								<td>
									<input type="text" name="date_sortie" id="date_sortie" value="<?php if (isset ($_POST['date_sortie']) && !isset ($erreurs['date_sortie'])) { echo $_POST['date_sortie'];}?>" /><br />
								</td>
							
								<td>
									<label for="intervention">Type d'intervention : </label>
								</td>
								<td>
									<input type="text" name="intervention" id="intervention" value="<?php if (isset ($_POST['intervention']) && !isset ($erreurs['intervention'])) { echo $_POST['intervention'];}?>" /><br />
								</td>
							
							</tr>
						
							<tr>
							
								<td colspan="2">
									<?php if(isset($erreurs['date_sortie']))echo '<p class="erreur">'.$erreurs['date_sortie'].'</p>';?>
								</td>
								
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<?php if(isset($erreurs['intervention']))echo '<p class="erreur">'.$erreurs['intervention'].'</p>';?>
								</td>
								
							</tr>
						
							<tr>
							
								<td>
									<label for="chirurgien">Chirurgien : </label>
								</td>
								<td>
									<input type="text" name="chirurgien" id="chirurgien" value="<?php if (isset ($_POST['chirurgien']) && !isset ($erreurs['chirurgien'])) { echo $_POST['chirurgien'];}?>" /><br />
								</td>
							
								<td>
									<p>&nbsp;</p>
								</td>
								<td>
									<p>&nbsp;</p>
								</td>
							
							</tr>
						
							<tr>
							
								<td colspan="4">
									<?php if(isset($erreurs['chirurgien']))echo '<p class="erreur">'.$erreurs['chirurgien'].'</p>';?>
								</td>
								
							</tr>
						
						</table>
					
					</fieldset>
				
				</fieldset>
				
				<fieldset>
				
					<legend>Points médicaux particuliers</legend>
					
					<table class="widthpersonnalise">
					<!-- gestion taille des cases du tableau au cas par cas -->
						
						<tr>
							
							<td>
								<label for="allergies">Allergies : </label>
							</td>
							<td>
								<input type="text" name="allergies" id="allergies" value="<?php if (isset ($_POST['allergies']) && !isset ($erreurs['allergies'])) { echo $_POST['allergies'];}?>" /><br />
							</td>
							
						</tr>
						
						<tr>
							
							<td colspan="2">
								<?php if(isset($erreurs['allergies']))echo '<p class="erreur">'.$erreurs['allergies'].'</p>';?>
							</td>
								
						</tr>
						
						<tr>
							
							<td>
								<label for="peau">Surveillance de la peau : </label>
							</td>
							<td>
								<input type="radio" name="peau" value="fragile" /> Fragile
								<input type="radio" name="peau" value="escarre" checked /> Escarre
							</td>
							
						</tr>
						
						<tr>
							
							<td colspan="2">
								<?php if(isset($erreurs['peau']))echo '<p class="erreur">'.$erreurs['peau'].'</p>';?>
							</td>
								
						</tr>
						
						<tr>
							
							<td>
								<label for="sphincters">Sphincters : </label>
							</td>
							<td>
								<input type="radio" name="sphincters" value="continence" /> Continence
								<input type="radio" name="sphincters" value="couche" /> Couche
								<input type="radio" name="sphincters" value="sondage" checked /> Sondage
							</td>
							
						</tr>
						
						<tr>
							
							<td colspan="2">
								<?php if(isset($erreurs['sphincters']))echo '<p class="erreur">'.$erreurs['sphincters'].'</p>';?>
							</td>
								
						</tr>
						
						<tr>
							
							<td>
								<label for="regime_aliments">Régime alimentaire (sans-sel, hypocalorique, religieu etc.) : </label>
							</td>
							<td>
								<input type="text" name="regime_aliments" id="regime_aliments" value="<?php if (isset ($_POST['regime_aliments']) && !isset ($erreurs['regime_aliments'])) { echo $_POST['regime_aliments'];}?>" /><br />
							</td>
							
						</tr>
						
						<tr>
							
							<td colspan="2">
								<?php if(isset($erreurs['regime_aliments']))echo '<p class="erreur">'.$erreurs['regime_aliments'].'</p>';?>
							</td>
								
						</tr>
						
						<tr>
							
							<td>
								<label for="aliments">Présentation des aliments : </label>
							</td>
							<td>
								<input type="radio" name="aliments" value="normale" /> Normale
								<input type="radio" name="aliments" value="hachee" /> Hachée
								<input type="radio" name="aliments" value="mixee" checked /> Mixée
							</td>
							
						</tr>
						
						<tr>
							
							<td colspan="2">
								<?php if(isset($erreurs['aliments']))echo '<p class="erreur">'.$erreurs['aliments'].'</p>';?>
							</td>
								
						</tr>
						
						<tr>
							
							<td>
								<label for="gastrostomie">Gastrostomie  : </label>
							</td>
							<td>
								<input type="radio" name="gastrostomie" value="oui" /> Oui
								<input type="radio" name="gastrostomie" value="non" checked /> Non
							</td>
							
						</tr>
						
						<tr>
							
							<td colspan="2">
								<?php if(isset($erreurs['gastrostomie']))echo '<p class="erreur">'.$erreurs['gastrostomie'].'</p>';?>
							</td>
								
						</tr>
						
						<tr>
							
							<td>
								<label for="ventilation">Ventilation assistée : </label>
							</td>
							<td>
								<input type="radio" name="ventilation" value="non" /> Non
								<input type="radio" name="ventilation" value="bird" /> Bird
								<input type="radio" name="ventilation" value="masque" /> Masque
								<input type="radio" name="ventilation" value="tracheotomie" /> Trachéotomie
								<input type="radio" name="ventilation" value="eole" checked /> &Eacute;ole
							</td>
							
						</tr>
						
						<tr>
							
							<td colspan="2">
								<?php if(isset($erreurs['ventilation']))echo '<p class="erreur">'.$erreurs['ventilation'].'</p>';?>
							</td>
								
						</tr>
						
						<tr>
							
							<td>
								<label for="perfusion">Perfusion : </label>
							</td>
							<td>
								<input type="radio" name="perfusion" value="oui" /> Oui
								<input type="radio" name="perfusion" value="non" checked /> Non
							</td>
							
						</tr>
						
						<tr>
							
							<td colspan="2">
								<?php if(isset($erreurs['perfusion']))echo '<p class="erreur">'.$erreurs['perfusion'].'</p>';?>
							</td>
								
						</tr>
						
						<tr>
							
							<td>
								<label for="autres_medic">Autres : </label>
							</td>
							<td>
								<input type="text" name="autres_medic" id="autres_medic" value="<?php if (isset ($_POST['autres_medic']) && !isset ($erreurs['autres_medic'])) { echo $_POST['autres_medic'];}?>" /><br />
							</td>
							
						</tr>
						
						<tr>
							
							<td colspan="2">
								<?php if(isset($erreurs['autres_medic']))echo '<p class="erreur">'.$erreurs['autres_medic'].'</p>';?>
							</td>
								
						</tr>
						
					</table>
				
				</fieldset>
				
				<fieldset>
				
					<legend>Autonomie</legend>

					<fieldset>
				
						<legend>Installations particulières</legend>
				
						<table class="width1">
						
						<tr>
							
							<td>
								<label for="install_jour">Jour : </label>
							</td>
							<td>
								<input type="text" name="install_jour" id="install_jour" value="<?php if (isset ($_POST['install_jour']) && !isset ($erreurs['install_jour'])) { echo $_POST['install_jour'];}?>" /><br />
							</td>
							
						</tr>
						
						<tr>
							
							<td colspan="2">
								<?php if(isset($erreurs['install_jour']))echo '<p class="erreur">'.$erreurs['install_jour'].'</p>';?>
							</td>
								
						</tr>
						
						<tr>
							
							<td>
								<label for="install_nuit">Nuit : </label>
							</td>
							<td>
								<input type="text" name="install_nuit" id="install_nuit" value="<?php if (isset ($_POST['install_nuit']) && !isset ($erreurs['install_nuit'])) { echo $_POST['install_nuit'];}?>" /><br />
							</td>
							
						</tr>
						
						<tr>
							
							<td colspan="2">
								<?php if(isset($erreurs['install_nuit']))echo '<p class="erreur">'.$erreurs['install_nuit'].'</p>';?>
							</td>
								
						</tr>
						
						</table>
				
					</fieldset>
				
					<table class="widthpersonnalise2">
					<!-- gestion taille des cases du tableau au cas par cas -->
					
						<tr>
							
							<td>
								<label for="marche">Marche : </label>
							</td>
							<td>
								<input type="radio" name="marche" value="auto" /> Autonome
								<input type="radio" name="marche" value="canne" /> Cannes
								<input type="radio" name="marche" value="deambulateur" /> Déambulateur
								<input type="radio" name="marche" value="appareillage" checked /> Appareillage
							</td>
							
						</tr>
						
						<tr>
							
							<td colspan="2">
								<?php if(isset($erreurs['marche']))echo '<p class="erreur">'.$erreurs['marche'].'</p>';?>
							</td>
								
						</tr>
						
						<tr>
							
							<td>
								<label for="fauteil">Fauteil : </label>
							</td>
							<td>
								<input type="radio" name="fauteil" value="manuel" /> Manuel
								<input type="radio" name="fauteil" value="mecanique" /> Mécanique
								<input type="radio" name="fauteil" value="non" checked /> Non
							</td>
							
						</tr>
						
						<tr>
							
							<td colspan="2">
								<?php if(isset($erreurs['fauteil']))echo '<p class="erreur">'.$erreurs['fauteil'].'</p>';?>
							</td>
								
						</tr>
						
						<tr>
							
							<td>
								<label for="toilette">Toilette : </label>
							</td>
							<td>
								<input type="radio" name="toilette" value="sans" /> Sans aide
								<input type="radio" name="toilette" value="partielle" /> Aide partielle
								<input type="radio" name="toilette" value="totale" checked /> Aide totale
							</td>
							
						</tr>
						
						<tr>
							
							<td colspan="2">
								<?php if(isset($erreurs['toilette']))echo '<p class="erreur">'.$erreurs['toilette'].'</p>';?>
							</td>
								
						</tr>
						
						<tr>
							
							<td>
								<label for="corset">Corset/Appareillage : </label>
							</td>
							<td>
								<input type="radio" name="corset" value="sans" /> Sans aide
								<input type="radio" name="corset" value="partielle" /> Aide partielle
								<input type="radio" name="corset" value="totale" checked /> Aide totale
							</td>
							
						</tr>
						
						<tr>
							
							<td colspan="2">
								<?php if(isset($erreurs['corset']))echo '<p class="erreur">'.$erreurs['corset'].'</p>';?>
							</td>
								
						</tr>
						
						<tr>
							
							<td>
								<label for="habillage">Habillage : </label>
							</td>
							<td>
								<input type="radio" name="habillage" value="sans" /> Sans aide
								<input type="radio" name="habillage" value="partielle" /> Aide partielle
								<input type="radio" name="habillage" value="totale" checked /> Aide totale
							</td>
							
						</tr>
						
						<tr>
							
							<td colspan="2">
								<?php if(isset($erreurs['habillage']))echo '<p class="erreur">'.$erreurs['habillage'].'</p>';?>
							</td>
								
						</tr>
						
						<tr>
							
							<td>
								<label for="repas">Repas : </label>
							</td>
							<td>
								<input type="radio" name="repas" value="sans" /> Sans aide
								<input type="radio" name="repas" value="partielle" /> Aide partielle
								<input type="radio" name="repas" value="totale" checked /> Aide totale
							</td>
							
						</tr>
						
						<tr>
							
							<td colspan="2">
								<?php if(isset($erreurs['repas']))echo '<p class="erreur">'.$erreurs['repas'].'</p>';?>
							</td>
								
						</tr>
						
						<tr>
							
							<td>
								<label for="sphincters_aide">Sphincters : </label>
							</td>
							<td>
								<input type="radio" name="sphincters_aide" value="sans" /> Sans aide
								<input type="radio" name="sphincters_aide" value="partielle" /> Aide partielle
								<input type="radio" name="sphincters_aide" value="totale" checked /> Aide totale
							</td>
							
						</tr>
						
						<tr>
							
							<td colspan="2">
								<?php if(isset($erreurs['sphincters_aide']))echo '<p class="erreur">'.$erreurs['sphincters_aide'].'</p>';?>
							</td>
								
						</tr>
						
						<tr>
							
							<td>
								<label for="vision">Vision : </label>
							</td>
							<td>
								<input type="radio" name="vision" value="normale" /> Normale 
								<input type="radio" name="vision" value="appareillee" /> Appareillée 
								<input type="radio" name="vision" value="cecite" checked /> Cécité 
							</td>
							
						</tr>
						
						<tr>
							
							<td colspan="2">
								<?php if(isset($erreurs['vision']))echo '<p class="erreur">'.$erreurs['vision'].'</p>';?>
							</td>
								
						</tr>
						
						<tr>
							
							<td>
								<label for="audition">Audition : </label>
							</td>
							<td>
								<input type="radio" name="audition" value="normale" /> Normale 
								<input type="radio" name="audition" value="appareillee" /> Appareillée 
								<input type="radio" name="audition" value="surdite" checked /> Surdité 
							</td>
							
						</tr>
						
						<tr>
							
							<td colspan="2">
								<?php if(isset($erreurs['audition']))echo '<p class="erreur">'.$erreurs['audition'].'</p>';?>
							</td>
								
						</tr>
						
						<tr>
							
							<td>
								<label for="communication">Communication : </label>
							</td>
							<td>
								<input type="radio" name="communication" value="facile" /> Verbale facile 
								<input type="radio" name="communication" value="difficile" /> Non verbale difficile 
								<input type="radio" name="communication" value="absente" checked /> Absente 
							</td>
							
						</tr>
						
						<tr>
							
							<td colspan="2">
								<?php if(isset($erreurs['communication']))echo '<p class="erreur">'.$erreurs['communication'].'</p>';?>
							</td>
								
						</tr>
						
						<tr>
							
							<td>
								<label for="comportement">Comportement : </label>
							</td>
							<td>
								<input type="radio" name="comportement" value="adapte" />  Adapté
								<input type="radio" name="comportement" value="deprime" />  Déprimé
								<input type="radio" name="comportement" value="agite" checked />  Agité
							</td>
							
						</tr>
						
						<tr>
							
							<td colspan="2">
								<?php if(isset($erreurs['comportement']))echo '<p class="erreur">'.$erreurs['comportement'].'</p>';?>
							</td>
								
						</tr>
						
					</table>
				
				</fieldset>
				
			 <input type="submit" name="submit" value="Envoyer" />
			 
			</fieldset>

		</form>
	
	</body>

</html>