<form method="post" action="index.php?action=connect">
	
	<fieldset>
	
		<legend>Connectez-vous</legend><br />
		
		<table>
		
			<tr>
			
				<td>
					<label for="login">Utilisateur </label>
				</td>
				
				<td>
					<input name="login" id="login" type="text" <?php if(isset($_POST['login']) && !isset($erreurs['login'])){ echo 'value="'.$_POST['login'].'"';} ?>>
				</td>
				
			</tr>
			
			<tr>
				
				<td>
					<label for="pass">Mot de passe &nbsp;</label>
				</td>
				
				<td>
					<input name="pass" id="pass" type="password">
				</td>
				
			</tr>
			
			<tr>
				
				<td>
					&nbsp;
				</td>
				<td>
					<input type="submit" value="Connexion">
				</td>
				
			</tr>
			
		</table>
						
	</fieldset>
	
</form>