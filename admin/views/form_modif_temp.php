<form method="post" action="index.php?action=modifier_temp">

	<table id="post">	

		<tr>

			<td>
				Article<br /><br /><br />
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
							value = <?php echo '"'.$contenu['contenu'].'"'; ?>
						}
					}
				</script>
				<noscript>
					<p id="erreur" >Veuillez activer le javascript si vous voulez poster votre article.</p>
				</noscript>
			</td>
			
			
		</tr>
		
		<tr>
			<td>Où poster cet article ? 
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
				<input type="hidden" value=<?php echo '"'.$contenu['id_article'].'"';?> name="id_article" />
				<input type="submit" value="Publier" />
			</td>
					
		</tr>
				
	</table>

</form>