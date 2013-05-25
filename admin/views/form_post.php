<form method="post" action="index.php?action=editer_contenu">
			
	<table id="post">	
		
		<tr>
		
			<td>Article<br /><br /><br />
				<?php if(isset($erreur))
					echo '<p class="erreur">'.$erreurs.'</p>';
				?>
			</td>
		
		</tr>
		
		<tr>
		
			<td id="text_area">
				<script language="javascript" type="text/javascript">
					with (document.getElementById ("text_area")) 
					{
						with (appendChild (document.createElement ("TEXTAREA"))) 
						{
							name = "contenu";
							cols = 77;
							rows = 25;
							value = "Saisissez votre texte ici.";
						}
					}
				</script>
				
				<noscript>
					<p id="erreur" >Veuillez activer le javascript si vous voulez poster votre article.</p>
				</noscript>
			</td>
		
		</tr>
		
		<tr>
			 
			
			<td>
				Où poster cet article ?
				<select name="zone">
				<?php 
					foreach($droit AS $key => $value)
					{
						echo '<option value="'.$value.'">'.$zones[$value].'</option>';	
					}	
				?>
				</select>
			</td>
		
		</tr>
		
		<tr>
			
			<td>
				<input type="submit" value="Publier" />
			</td>
		
		</tr>
	
	</table>
				
</form>