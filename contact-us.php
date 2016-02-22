<?php include 'header.php'; ?>

	<div class="text-bg-header">
	
		<div class="content-unpadded">
		
			<div id="breadcrumb">
			
				<ul>
				
					<li>
						<a href="http://ethicalswitch.com">Home</a>
					</li> > 
				
					<li>
						Contact Us
					</li> 
			
				</ul>
				
			</div>
		
			<div class="text-bg-header-h2">
			
				<h2>Contact Us</h2>
			
			</div>
			
		</div>
		
	</div>
	
	<div class="text-pages">
	
		<p>
			Our email address is:
		</p>

		<p>
			<a href="mailto:hello@ethicalswitch.com">hello@ethicalswitch.com</a>
		</p>
		
		<p>
			Or alternatively fill out the form below and we'll get back to you as soon as we can:
		</p>
		
		<form method="post" action="contact-form-sent.php" class="contact-form" name="contact-form">
		
			<label for="name">Name</label><br />
			<input type="text" name="name" class="text-field">
			
			<br />
		
			<label for="email">E-Mail Address</label><br />
			<input type="email" name="email" class="text-field">
			
			<br />
		
			<label for="postcode">Postcode</label><br />
			<input type="text" name="postcode" class="text-field">
			
			<br />
		
			<label for="message">Message</label><br />
			<textarea name="message" rows="20"></textarea>
			
			<input type="submit" value="Send" class="yellow-button-input" />
		
		</form>	
	
	</div>

<?php include 'footer.php'; ?>