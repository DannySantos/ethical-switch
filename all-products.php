<?php ob_start() ?>
<?php include 'header.php'; ?>
<?php 
	if(isset($_POST['state']) && $_POST['state'] == "default") {
		$error_message = "* Please enter a state";
		$error_style = "border: 1px solid red; ";
	} elseif(isset($_POST['state']) && $_POST !== "Select a State...") {
		header("Location: http://ethicalswitch.com/ethical-power-results");
		die();
	}

	ob_end_flush();
?>

	<div class="text-bg-header">
	
		<div class="content-unpadded">
		
			<div id="breadcrumb">
			
				<ul>
				
					<li>
						<a href="http://ethicalswitch.com">Home</a>
					</li> > 
				
					<li>
						Choose an Ethical Product
					</li> 
			
				</ul>
				
			</div>
		
			<div class="text-bg-header-h2">
			
				<h2>Choose an Ethical Product</h2>
			
			</div>
			
		</div>
		
	</div>

	<div class="bg-header">
	
		<h3>Step 1: Select Your State:</h3>
		
	</div>
	
	<div class="center">
	
		<form method="post" action="all-products#select-state-link" id="select-state-link">
		
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
					<input class="yellow-button-input blue-button-input" type="button" value="Sign Up Below" />
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
					<input class="yellow-button-input blue-button-input" type="button" value="Sign Up Below" />
				</p>
				
			</div>
		
		</div>
		
	</div>
		
<?php include 'sign-up.php'; ?>
	
<?php include 'footer.php'; ?>