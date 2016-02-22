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
			
			<div class="cta">

				Compare your providers:

			</div>
			
			<?php 
				$i = 0;
				foreach($powerProvidersArray AS $providerKey => $providerKeyArray) {
					
					if(!empty($providerKeyArray[$_SESSION['chosenState']])) {
					?>
					<div class="checkboxItem">
						<input type="checkbox" id="<?php echo strtolower(str_replace(' ', '', $providerKeyArray['Name'])) ?>" <?php if($providerKeyArray['Disabled'] === 'y'){echo 'disabled'; } ?> class="<?php if($providerKeyArray['Prechecked'] === 'y'){echo 'prechecked'; } ?>" name="<?php echo strtolower(str_replace(' ', '', $providerKeyArray['Name'])) ?>" value="<?php echo $providerKeyArray['Name'] ?>">
						<label for="<?php echo strtolower(str_replace(' ', '', $providerKeyArray['Name'])) ?>"><?php echo $providerKeyArray['Name'] ?></label><!-- <br> -->
					</div>
					<?php
					}
				}
			?>

		</form>
	
	
	
		<div id="power-results" class="results">
		
			<table class="vert-table">
		
			  <tr>
				<th class="vert-cell vert-cell-supplier"><?php echo $powerProvidersArray['tableHeaderArray']['Name']; ?></th>
				<?php display_power_table_headers_desktop('Name') ?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Logo']; ?></td>
				<?php display_power_table_desktop('Logo') ?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Major Shareholder']; ?></td>
				<?php display_power_table_desktop('Major Shareholder') ?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Major Shareholder/Parent Company Base']; ?></td>
				<?php display_power_table_desktop('Major Shareholder/Parent Company Base') ?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Parent Company']; ?></td>
				<?php display_power_table_desktop('Parent Company') ?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Primary Fuel Source']; ?></td>
				<?php display_power_table_desktop('Primary Fuel Source') ?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Carbon Emissions']; ?></td>
				<?php display_power_table_desktop('Carbon Emissions') ?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Renewable Energy']; ?></td>
				<?php display_power_table_desktop('Renewable Energy') ?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['New Renewable Energy Investment']; ?></td>
				<?php display_power_table_desktop('New Renewable Energy Investment') ?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['No CSG Investment']; ?></td>
				<?php display_power_table_desktop('No CSG Investment') ?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['GreenPower Available']; ?></td>
				<?php display_power_table_desktop('GreenPower Available') ?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Ombudsman Complaints']; ?></td>
				<?php display_power_table_desktop('Ombudsman Complaints') ?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Greenpeace Ranking']; ?></td>
				<?php display_power_table_desktop('Greenpeace Ranking') ?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['States of Operation']; ?></td>
				<?php display_power_table_desktop('States of Operation') ?>
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

			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Ethical Switch Rating']; ?></td>
				<?php display_power_table_desktop('Ethical Switch Rating') ?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Details Button']; ?></td>
				<?php display_power_table_desktop('Details Button') ?>
			  </tr>
			  
			  <tr>
				<td class="vert-cell vert-cell-header"><?php echo $powerProvidersArray['tableHeaderArray']['Extra Things to Note']; ?></td>
				<?php display_power_table_desktop('Extra Things to Note') ?>
			  </tr>
			  
			</table>

		</div>

	</div>

	<div id="power-results-2" class="results-2">

		<table class="mobile-table">

		<thead>
			<tr><?php display_power_table_mobile_headers($powerProvidersArray['tableHeaderArray']); ?></tr>
		</thead>

		<?php if(!empty($powerProvidersArray['powershopArray'][$_SESSION['chosenState']])) { ?>

			<tr><?php display_power_table_mobile($powerProvidersArray['powershopArray']); ?></tr>

		<?php } ?>

		<?php if(!empty($powerProvidersArray['diamondArray'][$_SESSION['chosenState']])) { ?>

			<tr><?php display_power_table_mobile($powerProvidersArray['diamondArray']); ?></tr>

		<?php } ?>

		<?php if(!empty($powerProvidersArray['originArray'][$_SESSION['chosenState']])) { ?>

			<tr><?php display_power_table_mobile($powerProvidersArray['originArray']); ?></tr>

		<?php } ?>

		<?php if(!empty($powerProvidersArray['aglArray'][$_SESSION['chosenState']])) { ?>

			<tr><?php display_power_table_mobile($powerProvidersArray['aglArray']); ?></tr>

		<?php } ?>

		<?php if(!empty($powerProvidersArray['energyAustraliaArray'][$_SESSION['chosenState']])) { ?>

			<tr><?php display_power_table_mobile($powerProvidersArray['energyAustraliaArray']); ?></tr>

		<?php } ?>

		<?php if(!empty($powerProvidersArray['ergonArray'][$_SESSION['chosenState']])) { ?>

			<tr><?php display_power_table_mobile($powerProvidersArray['ergonArray']); ?></tr>

		<?php } ?>

		<?php if(!empty($powerProvidersArray['lumoArray'][$_SESSION['chosenState']])) { ?>

			<tr><?php display_power_table_mobile($powerProvidersArray['lumoArray']); ?></tr>

		<?php } ?>

		<?php if(!empty($powerProvidersArray['redArray'][$_SESSION['chosenState']])) { ?>

			<tr><?php display_power_table_mobile($powerProvidersArray['redArray']); ?></tr>

		<?php } ?>

		<?php if(!empty($powerProvidersArray['momentumArray'][$_SESSION['chosenState']])) { ?>

			<tr><?php display_power_table_mobile($powerProvidersArray['momentumArray']); ?></tr>

		<?php } ?>

		<?php if(!empty($powerProvidersArray['auroraArray'][$_SESSION['chosenState']])) { ?>

			<tr><?php display_power_table_mobile($powerProvidersArray['auroraArray']); ?></tr>

		<?php } ?>

		<?php if(!empty($powerProvidersArray['simplyArray'][$_SESSION['chosenState']])) { ?>

			<tr><?php display_power_table_mobile($powerProvidersArray['simplyArray']); ?></tr>

		<?php } ?>

		<?php if(!empty($powerProvidersArray['alintaArray'][$_SESSION['chosenState']])) { ?>

			<tr><?php display_power_table_mobile($powerProvidersArray['alintaArray']); ?></tr>

		<?php } ?>

		<?php if(!empty($powerProvidersArray['powerdirectArray'][$_SESSION['chosenState']])) { ?>

			<tr><?php display_power_table_mobile($powerProvidersArray['powerdirectArray']); ?></tr>

		<?php } ?>

		<?php if(!empty($powerProvidersArray['actewaglArray'][$_SESSION['chosenState']])) { ?>

			<tr><?php display_power_table_mobile($powerProvidersArray['actewaglArray']); ?></tr>

		<?php } ?>

		<?php if(!empty($powerProvidersArray['dodoArray'][$_SESSION['chosenState']])) { ?>

			<tr><?php display_power_table_mobile($powerProvidersArray['dodoArray']); ?></tr>

		<?php } ?>

		<?php if(!empty($powerProvidersArray['clickArray'][$_SESSION['chosenState']])) { ?>

			<tr><?php display_power_table_mobile($powerProvidersArray['clickArray']); ?></tr>

		<?php } ?>

		<?php if(!empty($powerProvidersArray['neighbourhoodArray'][$_SESSION['chosenState']])) { ?>

			<tr><?php display_power_table_mobile($powerProvidersArray['neighbourhoodArray']); ?></tr>

		<?php } ?>

	</table>
	
	
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