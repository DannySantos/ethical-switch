<?php include 'header.php'; ?>

	<div class="bg-header">
	
		<h3>Showing Results for <?php 
		if (isset($_SESSION['chosenStateCaps'])) {
			echo $_SESSION['chosenStateCaps']; 
		}
		?>:</h3>
		
	</div>
	
	
	<div class="tablet-desktop">
		<p class="scroll-right">Scroll Right For More >></p>
	
		<form id="toggler" class="clearfix">
			
			<div class="cta">Compare your providers:</div>
			
			<?php 
				$i = 0;
				foreach($powerProvidersArray AS $providerKey => $providerKeyArray) {
					
					if(!empty($providerKeyArray[$_SESSION['chosenState']])) {
					?>
					<div class="checkboxItem">
						<input type="checkbox" id="<?php echo strtolower(str_replace(' ', '', $providerKeyArray['Name'])) ?>" <?php if($providerKeyArray['Disabled'] === 'y'){echo 'disabled'; } ?> class="<?php if($providerKeyArray['Prechecked'] === 'y'){echo 'prechecked'; } ?>" name="<?php echo strtolower(str_replace(' ', '', $providerKeyArray['Name'])) ?>" value="<?php echo $providerKeyArray['Name'] ?>">
						<label for="<?php echo strtolower(str_replace(' ', '', $providerKeyArray['Name'])) ?>"><?php echo $providerKeyArray['Name'] ?></label><!-- <br> -->
					</div>
					<?
					}
				}
			?>
		</form>
	
	
	
		<div id="power-results" class="results">
		
			<table class="vert-table">
		
			  <tr>
				<th class="vert-cell vert-cell-supplier"><?php echo $powerProvidersArray['tableHeaderArray']['Name']; ?></th>
				<?php 
					foreach($powerProvidersArray AS $providerKey => $providerKeyArray) {
							$label = strtolower(str_replace(' ', '', $providerKeyArray['Name']));
							
							if(!empty($providerKeyArray[$_SESSION['chosenState']])) {
								echo '<th class="'.$label.' vert-cell vert-cell-supplier">'.$providerKeyArray['Name'].'</th>';
							}
					}
				?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Logo']; ?></td>
				<?php 
					foreach($powerProvidersArray AS $providerKey => $providerKeyArray) {
							$label = strtolower(str_replace(' ', '', $providerKeyArray['Name']));
							
							if(!empty($providerKeyArray[$_SESSION['chosenState']])) {
								echo '<td class="'.$label.' vert-cell">'.$providerKeyArray['Logo'].'</td>';
							}
					}
				?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Major Shareholder']; ?></td>
				<?php 
					foreach($powerProvidersArray AS $providerKey => $providerKeyArray) {
							$label = strtolower(str_replace(' ', '', $providerKeyArray['Name']));
							
							if(!empty($providerKeyArray[$_SESSION['chosenState']])) {
								echo '<td class="'.$label.' vert-cell">'.$providerKeyArray['Major Shareholder'].'</td>';
							}
					}
				?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Major Shareholder/Parent Company Base']; ?></td>
				<?php 
					foreach($powerProvidersArray AS $providerKey => $providerKeyArray) {
							$label = strtolower(str_replace(' ', '', $providerKeyArray['Name']));
							
							if(!empty($providerKeyArray[$_SESSION['chosenState']])) {
								echo '<td class="'.$label.' vert-cell">'.$providerKeyArray['Major Shareholder/Parent Company Base'].'</td>';
							}
					}
				?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Primary Fuel Source']; ?></td>
				<?php 
					foreach($powerProvidersArray AS $providerKey => $providerKeyArray) {
							$label = strtolower(str_replace(' ', '', $providerKeyArray['Name']));
							
							if(!empty($providerKeyArray[$_SESSION['chosenState']])) {
								echo '<td class="'.$label.' vert-cell">'.$providerKeyArray['Primary Fuel Source'].'</td>';
							}
					}
				?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Carbon Emissions']; ?></td>
				<?php 
					foreach($powerProvidersArray AS $providerKey => $providerKeyArray) {
							$label = strtolower(str_replace(' ', '', $providerKeyArray['Name']));
							
							if(!empty($providerKeyArray[$_SESSION['chosenState']])) {
								echo '<td class="'.$label.' vert-cell">'.$providerKeyArray['Carbon Emissions'].'</td>';
							}
					}
				?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Renewable Energy']; ?></td>
				<?php 
					foreach($powerProvidersArray AS $providerKey => $providerKeyArray) {
							$label = strtolower(str_replace(' ', '', $providerKeyArray['Name']));
							
							if(!empty($providerKeyArray[$_SESSION['chosenState']])) {
								echo '<td class="'.$label.' vert-cell">'.$providerKeyArray['Renewable Energy'].'</td>';
							}
					}
				?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['New Renewable Energy Investment']; ?></td>
				<?php 
					foreach($powerProvidersArray AS $providerKey => $providerKeyArray) {
							$label = strtolower(str_replace(' ', '', $providerKeyArray['Name']));
							
							if(!empty($providerKeyArray[$_SESSION['chosenState']])) {
								echo '<td class="'.$label.' vert-cell">'.$providerKeyArray['New Renewable Energy Investment'].'</td>';
							}
					}
				?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['RET Support']; ?></td>
				<?php 
					foreach($powerProvidersArray AS $providerKey => $providerKeyArray) {
							$label = strtolower(str_replace(' ', '', $providerKeyArray['Name']));
							
							if(!empty($providerKeyArray[$_SESSION['chosenState']])) {
								echo '<td class="'.$label.' vert-cell">'.$providerKeyArray['RET Support'].'</td>';
							}
					}
				?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['No CSG Investment']; ?></td>
				<?php 
					foreach($powerProvidersArray AS $providerKey => $providerKeyArray) {
							$label = strtolower(str_replace(' ', '', $providerKeyArray['Name']));
							
							if(!empty($providerKeyArray[$_SESSION['chosenState']])) {
								echo '<td class="'.$label.' vert-cell">'.$providerKeyArray['No CSG Investment'].'</td>';
							}
					}
				?>
			  </tr>
			  
			  <tr class="tr-carbon-neutral">
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Carbon Neutral']; ?></td>
				<?php 
					foreach($powerProvidersArray AS $providerKey => $providerKeyArray) {
							$label = strtolower(str_replace(' ', '', $providerKeyArray['Name']));
							
							if(!empty($providerKeyArray[$_SESSION['chosenState']])) {
								echo '<td class="'.$label.' vert-cell">'.$providerKeyArray['Carbon Neutral'].'</td>';
							}
					}
				?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['100% GreenPower Available']; ?></td>
				<?php 
					foreach($powerProvidersArray AS $providerKey => $providerKeyArray) {
							$label = strtolower(str_replace(' ', '', $providerKeyArray['Name']));
							
							if(!empty($providerKeyArray[$_SESSION['chosenState']])) {
								echo '<td class="'.$label.' vert-cell">'.$providerKeyArray['100% GreenPower Available'].'</td>';
							}
					}
				?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Ombudsman Complaints']; ?></td>
				<?php 
					foreach($powerProvidersArray AS $providerKey => $providerKeyArray) {
							$label = strtolower(str_replace(' ', '', $providerKeyArray['Name']));
							
							if(!empty($providerKeyArray[$_SESSION['chosenState']])) {
								echo '<td class="'.$label.' vert-cell">'.$providerKeyArray['Ombudsman Complaints'].'</td>';
							}
					}
				?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Greenpeace Ranking']; ?></td>
				<?php 
					foreach($powerProvidersArray AS $providerKey => $providerKeyArray) {
							$label = strtolower(str_replace(' ', '', $providerKeyArray['Name']));
							
							if(!empty($providerKeyArray[$_SESSION['chosenState']])) {
								echo '<td class="'.$label.' vert-cell">'.$providerKeyArray['Greenpeace Ranking'].'</td>';
							}
					}
				?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Likely Termination Fee']; ?></td>
				<?php 
					foreach($powerProvidersArray AS $providerKey => $providerKeyArray) {
							$label = strtolower(str_replace(' ', '', $providerKeyArray['Name']));
							
							if(!empty($providerKeyArray[$_SESSION['chosenState']])) {
								echo '<td class="'.$label.' vert-cell">'.$providerKeyArray['Likely Termination Fee'][$_SESSION['chosenState']].'</td>';
							}
					}
				?>
			  </tr>
	<!--		  
			  <tr>
				<td class="vert-cell vert-cell-header">Parent Company</td>
			  </tr>
	-->		  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Ethical Switch Rating']; ?></td>
				<?php 
					foreach($powerProvidersArray AS $providerKey => $providerKeyArray) {
							$label = strtolower(str_replace(' ', '', $providerKeyArray['Name']));
							
							if(!empty($providerKeyArray[$_SESSION['chosenState']])) {
								echo '<td class="'.$label.' vert-cell">'.$providerKeyArray['Ethical Switch Rating'].'</td>';
							}
					}
				?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Details Button']; ?></td>
				<?php 
					foreach($powerProvidersArray AS $providerKey => $providerKeyArray) {
							$label = strtolower(str_replace(' ', '', $providerKeyArray['Name']));
							
							if(!empty($providerKeyArray[$_SESSION['chosenState']])) {
								echo '<td class="'.$label.' vert-cell">'.$providerKeyArray['Details Button'].'</td>';
							}
					}
				?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Extra Things to Note']; ?></td>
				<?php 
					foreach($powerProvidersArray AS $providerKey => $providerKeyArray) {
							$label = strtolower(str_replace(' ', '', $providerKeyArray['Name']));
							
							if(!empty($providerKeyArray[$_SESSION['chosenState']])) {
								echo '<td class="'.$label.' vert-cell">'.$providerKeyArray['Extra Things to Note'].'</td>';
							}
					}
				?>
			  </tr>
			  
			</table>
	
	
		</div>
	</div>
	<br />
	<br />

	<span class="disclaimer">
		Ethical Switch is comparing providers of goods and services according to publicly available data. We cannot guarantee that we have included all providers, nor can we guarantee this information to be 100% correct, so please 
		do your own research before making a decision to switch.  If you believe our information to be incorrect, please contact us and let us 
		know! 

		<br />

		For more information on the criteria table, <a href="ethical-power-criteria" target="_blank">click here</a>
	</span>

<?php include 'footer.php'; ?>