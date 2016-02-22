<?php include 'header.php'; ?>

	<div class="text-bg-header">
	
		<div class="content-unpadded">
		
			<div id="breadcrumb">
			
				<ul>
				
					<li>
						<a href="http://ethicalswitch.com">Home</a>
					</li> > 
				
					<li>
						Apply to be a Charity Partner
					</li> 
			
				</ul>
				
			</div>
		
			<div class="text-bg-header-h2">
			
				<h2>Apply to be a Charity Partner</h2>
			
			</div>
			
		</div>
		
	</div>
	
	<div class="text-pages">
	
		<p>
			If you have a charity project that needs a little fundraising then fill out the form below and we'll be in touch as soon as possible:
		</p>
		
		<form method="post" action="charity-application-form-sent.php" class="contact-form" name="contact-form">
		
			<label for="name">Name</label><br />
			<input type="text" name="name" class="text-field">
			
			<br />
		
			<label for="email">E-Mail Address</label><br />
			<input type="email" name="email" class="text-field">
			
			<br />
		
			<label for="postcode">Postcode</label><br />
			<input type="text" name="postcode" class="text-field">
			
			<br />
		
			<label for="message">Tell us About Your Project:</label><br />
			<textarea name="message" rows="20"></textarea>
			
			<input type="submit" value="Send" class="yellow-button-input" />
		
		</form>	
	
	</div>

<?php include 'footer.php'; ?>