<?php include 'header.php'; ?>

	<div class="bg-header">
	
		<h3>Showing Results for <?php 
		if (isset($_SESSION['chosenStateCaps'])) {
			echo $_SESSION['chosenStateCaps']; 
		}
		?>:</h3>
		
	</div>

	<div id="power-results" class="results">
	
		<table class="mobile-table">

			<!-- --------------------------------------------------------------------------- -->

				<thead>

					<tr>

						<?php foreach($powerProvidersArray['tableHeaderArray'] AS $key => $value) { ?>

								<?php 

									if(is_array($value)) {
										echo "<td>" . $value[$_SESSION['chosenState']] . "</td>";
									} elseif($key == "act" || $key == "vic" || $key == "sa" || $key == "wa" || $key == "tas" || $key == "qld" || $key == "nsw" || $key == "nt" || $key == "Prechecked" || $key == "Disabled") {

									} else {
										echo "<td>" . $value . "</td>";
									}	

								?>
								

						<?php } ?>

					</tr>

				</thead>

			<!-- --------------------------------------------------------------------------- -->

			<?php if(!empty($powerProvidersArray['powershopArray'][$_SESSION['chosenState']])) { ?>

				<tr>

					<?php foreach($powerProvidersArray['powershopArray'] AS $key => $value) { ?>

							<?php 

								if(is_array($value)) {
									echo "<td>" . $value[$_SESSION['chosenState']] . "</td>";
									} elseif($key == "act" || $key == "vic" || $key == "sa" || $key == "wa" || $key == "tas" || $key == "qld" || $key == "nsw" || $key == "nt" || $key == "Prechecked" || $key == "Disabled") {

								} else {
									echo "<td>" . $value . "</td>";
								}	

							?>
							

					<?php } ?>

				</tr>

			<?php } ?>

			<!-- --------------------------------------------------------------------------- -->

			<?php if(!empty($powerProvidersArray['diamondArray'][$_SESSION['chosenState']])) { ?>

				<tr>

					<?php foreach($powerProvidersArray['diamondArray'] AS $key => $value) { ?>

							<?php 

								if(is_array($value)) {
									echo "<td>" . $value[$_SESSION['chosenState']] . "</td>";
									} elseif($key == "act" || $key == "vic" || $key == "sa" || $key == "wa" || $key == "tas" || $key == "qld" || $key == "nsw" || $key == "nt" || $key == "Prechecked" || $key == "Disabled") {

								} else {
									echo "<td>" . $value . "</td>";
								}	

							?>
							

					<?php } ?>

				</tr>

			<?php } ?>

			<!-- --------------------------------------------------------------------------- -->

			<?php if(!empty($powerProvidersArray['originArray'][$_SESSION['chosenState']])) { ?>

				<tr>

					<?php foreach($powerProvidersArray['originArray'] AS $key => $value) { ?>

							<?php 

								if(is_array($value)) {
									echo "<td>" . $value[$_SESSION['chosenState']] . "</td>";
									} elseif($key == "act" || $key == "vic" || $key == "sa" || $key == "wa" || $key == "tas" || $key == "qld" || $key == "nsw" || $key == "nt" || $key == "Prechecked" || $key == "Disabled") {

								} else {
									echo "<td>" . $value . "</td>";
								}	

							?>
							

					<?php } ?>

				</tr>

			<?php } ?>

			<!-- --------------------------------------------------------------------------- -->

			<?php if(!empty($powerProvidersArray['aglArray'][$_SESSION['chosenState']])) { ?>

				<tr>

					<?php foreach($powerProvidersArray['aglArray'] AS $key => $value) { ?>

							<?php 

								if(is_array($value)) {
									echo "<td>" . $value[$_SESSION['chosenState']] . "</td>";
									} elseif($key == "act" || $key == "vic" || $key == "sa" || $key == "wa" || $key == "tas" || $key == "qld" || $key == "nsw" || $key == "nt" || $key == "Prechecked" || $key == "Disabled") {

								} else {
									echo "<td>" . $value . "</td>";
								}	

							?>
							

					<?php } ?>

				</tr>

			<?php } ?>

			<!-- --------------------------------------------------------------------------- -->

			<?php if(!empty($powerProvidersArray['energyAustraliaArray'][$_SESSION['chosenState']])) { ?>

				<tr>

					<?php foreach($powerProvidersArray['energyAustraliaArray'] AS $key => $value) { ?>

							<?php 

								if(is_array($value)) {
									echo "<td>" . $value[$_SESSION['chosenState']] . "</td>";
									} elseif($key == "act" || $key == "vic" || $key == "sa" || $key == "wa" || $key == "tas" || $key == "qld" || $key == "nsw" || $key == "nt" || $key == "Prechecked" || $key == "Disabled") {

								} else {
									echo "<td>" . $value . "</td>";
								}	

							?>
							

					<?php } ?>

				</tr>

			<?php } ?>

			<!-- --------------------------------------------------------------------------- -->

			<?php if(!empty($powerProvidersArray['ergonArray'][$_SESSION['chosenState']])) { ?>

				<tr>

					<?php foreach($powerProvidersArray['ergonArray'] AS $key => $value) { ?>

							<?php 

								if(is_array($value)) {
									echo "<td>" . $value[$_SESSION['chosenState']] . "</td>";
									} elseif($key == "act" || $key == "vic" || $key == "sa" || $key == "wa" || $key == "tas" || $key == "qld" || $key == "nsw" || $key == "nt" || $key == "Prechecked" || $key == "Disabled") {

								} else {
									echo "<td>" . $value . "</td>";
								}	

							?>
							

					<?php } ?>

				</tr>

			<?php } ?>

			<!-- --------------------------------------------------------------------------- -->

			<?php if(!empty($powerProvidersArray['lumoArray'][$_SESSION['chosenState']])) { ?>

				<tr>

					<?php foreach($powerProvidersArray['lumoArray'] AS $key => $value) { ?>

							<?php 

								if(is_array($value)) {
									echo "<td>" . $value[$_SESSION['chosenState']] . "</td>";
									} elseif($key == "act" || $key == "vic" || $key == "sa" || $key == "wa" || $key == "tas" || $key == "qld" || $key == "nsw" || $key == "nt" || $key == "Prechecked" || $key == "Disabled") {

								} else {
									echo "<td>" . $value . "</td>";
								}	

							?>
							

					<?php } ?>

				</tr>

			<?php } ?>

			<!-- --------------------------------------------------------------------------- -->

			<?php if(!empty($powerProvidersArray['redArray'][$_SESSION['chosenState']])) { ?>

				<tr>

					<?php foreach($powerProvidersArray['redArray'] AS $key => $value) { ?>

							<?php 

								if(is_array($value)) {
									echo "<td>" . $value[$_SESSION['chosenState']] . "</td>";
									} elseif($key == "act" || $key == "vic" || $key == "sa" || $key == "wa" || $key == "tas" || $key == "qld" || $key == "nsw" || $key == "nt" || $key == "Prechecked" || $key == "Disabled") {

								} else {
									echo "<td>" . $value . "</td>";
								}	

							?>
							

					<?php } ?>

				</tr>

			<?php } ?>

			<!-- --------------------------------------------------------------------------- -->

			<?php if(!empty($powerProvidersArray['momentumArray'][$_SESSION['chosenState']])) { ?>

				<tr>

					<?php foreach($powerProvidersArray['momentumArray'] AS $key => $value) { ?>

							<?php 

								if(is_array($value)) {
									echo "<td>" . $value[$_SESSION['chosenState']] . "</td>";
									} elseif($key == "act" || $key == "vic" || $key == "sa" || $key == "wa" || $key == "tas" || $key == "qld" || $key == "nsw" || $key == "nt" || $key == "Prechecked" || $key == "Disabled") {

								} else {
									echo "<td>" . $value . "</td>";
								}	

							?>
							

					<?php } ?>

				</tr>

			<?php } ?>

			<!-- --------------------------------------------------------------------------- -->

			<?php if(!empty($powerProvidersArray['auroraArray'][$_SESSION['chosenState']])) { ?>

				<tr>

					<?php foreach($powerProvidersArray['auroraArray'] AS $key => $value) { ?>

							<?php 

								if(is_array($value)) {
									echo "<td>" . $value[$_SESSION['chosenState']] . "</td>";
									} elseif($key == "act" || $key == "vic" || $key == "sa" || $key == "wa" || $key == "tas" || $key == "qld" || $key == "nsw" || $key == "nt" || $key == "Prechecked" || $key == "Disabled") {

								} else {
									echo "<td>" . $value . "</td>";
								}	

							?>
							

					<?php } ?>

				</tr>

			<?php } ?>

			<!-- --------------------------------------------------------------------------- -->

			<?php if(!empty($powerProvidersArray['simplyArray'][$_SESSION['chosenState']])) { ?>

				<tr>

					<?php foreach($powerProvidersArray['simplyArray'] AS $key => $value) { ?>

							<?php 

								if(is_array($value)) {
									echo "<td>" . $value[$_SESSION['chosenState']] . "</td>";
									} elseif($key == "act" || $key == "vic" || $key == "sa" || $key == "wa" || $key == "tas" || $key == "qld" || $key == "nsw" || $key == "nt" || $key == "Prechecked" || $key == "Disabled") {

								} else {
									echo "<td>" . $value . "</td>";
								}	

							?>
							

					<?php } ?>

				</tr>

			<?php } ?>

			<!-- --------------------------------------------------------------------------- -->

			<?php if(!empty($powerProvidersArray['alintaArray'][$_SESSION['chosenState']])) { ?>

				<tr>

					<?php foreach($powerProvidersArray['alintaArray'] AS $key => $value) { ?>

							<?php 

								if(is_array($value)) {
									echo "<td>" . $value[$_SESSION['chosenState']] . "</td>";
									} elseif($key == "act" || $key == "vic" || $key == "sa" || $key == "wa" || $key == "tas" || $key == "qld" || $key == "nsw" || $key == "nt" || $key == "Prechecked" || $key == "Disabled") {

								} else {
									echo "<td>" . $value . "</td>";
								}	

							?>
							

					<?php } ?>

				</tr>

			<?php } ?>

			<!-- --------------------------------------------------------------------------- -->

			<?php if(!empty($powerProvidersArray['powerdirectArray'][$_SESSION['chosenState']])) { ?>

				<tr>

					<?php foreach($powerProvidersArray['powerdirectArray'] AS $key => $value) { ?>

							<?php 

								if(is_array($value)) {
									echo "<td>" . $value[$_SESSION['chosenState']] . "</td>";
									} elseif($key == "act" || $key == "vic" || $key == "sa" || $key == "wa" || $key == "tas" || $key == "qld" || $key == "nsw" || $key == "nt" || $key == "Prechecked" || $key == "Disabled") {

								} else {
									echo "<td>" . $value . "</td>";
								}	

							?>
							

					<?php } ?>

				</tr>

			<?php } ?>

			<!-- --------------------------------------------------------------------------- -->

			<?php if(!empty($powerProvidersArray['actewaglArray'][$_SESSION['chosenState']])) { ?>

				<tr>

					<?php foreach($powerProvidersArray['actewaglArray'] AS $key => $value) { ?>

							<?php 

								if(is_array($value)) {
									echo "<td>" . $value[$_SESSION['chosenState']] . "</td>";
									} elseif($key == "act" || $key == "vic" || $key == "sa" || $key == "wa" || $key == "tas" || $key == "qld" || $key == "nsw" || $key == "nt" || $key == "Prechecked" || $key == "Disabled") {

								} else {
									echo "<td>" . $value . "</td>";
								}	

							?>
							

					<?php } ?>

				</tr>

			<?php } ?>

			<!-- --------------------------------------------------------------------------- -->

			<?php if(!empty($powerProvidersArray['dodoArray'][$_SESSION['chosenState']])) { ?>

				<tr>

					<?php foreach($powerProvidersArray['dodoArray'] AS $key => $value) { ?>

							<?php 

								if(is_array($value)) {
									echo "<td>" . $value[$_SESSION['chosenState']] . "</td>";
									} elseif($key == "act" || $key == "vic" || $key == "sa" || $key == "wa" || $key == "tas" || $key == "qld" || $key == "nsw" || $key == "nt" || $key == "Prechecked" || $key == "Disabled") {

								} else {
									echo "<td>" . $value . "</td>";
								}	

							?>
							

					<?php } ?>

				</tr>

			<?php } ?>

			<!-- --------------------------------------------------------------------------- -->

			<?php if(!empty($powerProvidersArray['clickArray'][$_SESSION['chosenState']])) { ?>

				<tr>

					<?php foreach($powerProvidersArray['clickArray'] AS $key => $value) { ?>

							<?php 

								if(is_array($value)) {
									echo "<td>" . $value[$_SESSION['chosenState']] . "</td>";
									} elseif($key == "act" || $key == "vic" || $key == "sa" || $key == "wa" || $key == "tas" || $key == "qld" || $key == "nsw" || $key == "nt" || $key == "Prechecked" || $key == "Disabled") {

								} else {
									echo "<td>" . $value . "</td>";
								}	

							?>
							

					<?php } ?>

				</tr>

			<?php } ?>

			<!-- --------------------------------------------------------------------------- -->

			<?php if(!empty($powerProvidersArray['neighbourhoodArray'][$_SESSION['chosenState']])) { ?>

				<tr>

					<?php foreach($powerProvidersArray['neighbourhoodArray'] AS $key => $value) { ?>

							<?php 

								if(is_array($value)) {
									echo "<td>" . $value[$_SESSION['chosenState']] . "</td>";
									} elseif($key == "act" || $key == "vic" || $key == "sa" || $key == "wa" || $key == "tas" || $key == "qld" || $key == "nsw" || $key == "nt" || $key == "Prechecked" || $key == "Disabled") {

								} else {
									echo "<td>" . $value . "</td>";
								}	

							?>
							

					<?php } ?>

				</tr>

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

<?php include 'footer.php'; ?>