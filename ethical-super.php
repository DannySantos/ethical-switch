<?php ob_start() ?>
<?php include 'header.php'; ?>
<?php 
	if(isset($_POST['state']) && $_POST['state'] == "default") {
		$error_message = "* Please enter a state";
		$error_style = "border: 1px solid red; ";
	} elseif(isset($_POST['state']) && $_POST['state'] !== "Select a State...") {
		$_SESSION['chosenState'] = $_POST['state'];
		redirectTo("ethical-power-results");
		die();
	}

	ob_end_flush();
?>

	<div id="banner" class="banner-ethical-super">

		<div class="banner-title">
			
			<h2>Ethical Super</h2>
			
			<h3>Sign up to be the first to hear about Ethical Super!</h3>

			<form action="http://ethicalswitch.us9.list-manage1.com/subscribe/post" method="POST">

				<input type="hidden" name="u" value="c0e17deb72c96e0658699df5e">
				<input type="hidden" name="id" value="e5960bf2a5">

				<input type="email" value="E-Mail Address"name="MERGE0" id="MERGE0" class="text-field">

				<input type="text" name="MERGE3" id="MERGE3" value="Postcode" class="text-field">
				
				<input type="submit" value="Submit" class="yellow-button-input">
				
			</form>
		
		</div>
		
	</div>
		
	<div class="summary">
		
		<p>
			<h3>Ethical Super is on its way!</h3>
			
			<p>
				We've spent a long time researching which bank is the most ethical and we're nearly ready to share the results! After that we will be focusing
				on Ethical Super funds.
			</p>
			
			<p>To be the first to know when it's ready, just <strong>enter you e-mail address at the bottom of the page</strong> and we'll be in touch</p>	
			
			<p>In the meantime why not check out our Ethical Power product:</p> 
			
		</p>
	
	</div>

	<div class="bg-header" id="select-state-link">
	
		<h3>Step 1: Select Your State:</h3>
		
	</div>
	
	<div class="center">
	
		<form method="post" action="ethical-super#select-state-link">
		
			<select class="dropdown-field" name="state" style="<?php if(!empty($error_style)) { echo $error_style; } ?>">
			  <option value="default" class="dropdown-default">Select a State...</option>
			  <option value="act">ACT</option>
			  <option value="nsw">NSW</option>
			  <!--<option value="nt">NT</option>-->
			  <option value="qld">QLD</option>
			  <option value="sa">SA</option>
			  <option value="tas">TAS</option>
			  <option value="vic">VIC</option>
			  <!--<option value="wa">WA</option>-->
			</select>

			<?php 
				if(!empty($error_message)) {
					echo "<p class=\"error-message\">" . $error_message . "</p>";
				}  
			?>	

	</div>
	
	<div class="bg-header">
	
		<h3>Step 2: Select Your Product:</h3>
		
	</div>
	
	<div class="all-products-wrapper content">
	
		<div class="all-products-product-wrapper">
		
			<div class="all-products-header">
			
				Ethical Power
			
			</div>
			
			<div class="all-products-content">
				
				<p>
					Select Ethical Power to find the most ethical power providers in your state:
				</p>
			
				<p>
					<input type="submit" name="power-submit" id="power-submit" class="yellow-button-input" value="Select">
					
					</form>
				</p>
				
			</div>
		
		</div>
			
		<div class="all-products-product-wrapper">
		
			<div class="all-products-header">
			
				Ethical Banking
			
			</div>
			
			<div class="all-products-content">
			
				<p>
					Ethical Banking is almost ready! Enter your e-mail address to be the first to hear about it:
				</p>
			
				<p>
					<input class="yellow-button-input grey-button-input" type="button" value="Sign Up Below" />
				</p>
				
			</div>
		
		</div>
			
		<div class="all-products-product-wrapper">
		
			<div class="all-products-header">
			
				Ethical Super
			
			</div>
			
			<div class="all-products-content">
			
				<p>
					Ethical Super is on its way! Enter your e-mail address to be the first to hear about it: 
				</p>
				
				<p>
					<input class="yellow-button-input grey-button-input" type="button" value="Sign Up Below" />
				</p>
				
			</div>
		
		</div>
		
	</div>
		
<?php include 'sign-up.php'; ?>
	
<?php include 'footer.php'; ?>