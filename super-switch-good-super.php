<?php include 'header.php'; ?>
		
	<div class="colour-bg-provider">
	
		<div class="provider-page-title">
		
			Your chosen supplier:
			
			<span class="back-to-results"><a href="ethical-power-results"><< Back to Results</a></span>
			
		</div>
		
	</div>
	
	<div class="provider-info">
	
		<div class="provider-page-logo">
		
			<img src="images/ethical-super-full-logo-good-super.png" />
		
		</div>

		<div class="provider-info-switch">
		
			<a href="#popup-good-super" class="switch-now provider-info-switch-button">Start the Switch</a>		
		
		</div>	

		<?php include 'popups.php' ?>

		<hr class="provider">

		<div class="summary">
		
			<h2>Switch to Good Super</h2>
			
			<p>
				<h3>Having a positive effect on the world can be as simple as switching your spending to the right company</h3>
				
				<p>
					Powershop are ranked Australia's greenest power provider by Greenpeace and are Australia's first and only carbon neutral energy retailer. With their innovative new app
					you can pay your bills in seconds and monitor your usage!
				</p> 
				
				<p>
					Not only that but a report released by the Essential Services Commission in October 2014 states that Powershop has offer the lowest overall prices on average across Victoria.
				</p> 
				
				<p><strong>Switching never felt better</strong></p>
				
			</p>
		
		</div>
		
		<hr class="provider">
	
		<div class="terms">
		
			<h5>Reasons to Switch to Powershop</h5>
		
			<div class="reason-to-switch">
			
				<img src="images/reasons-to-switch-cheap.png" alt="" />	
				
				<p>Consistently amongst Victoria's cheapest energy retailers</p>
		
			</div>	
		
			<div class="reason-to-switch">
			
				<img src="images/reasons-to-switch-contracts.png" alt="" />	
				
				<p>No lock in Contracts AND Powershop cover exit fees up to $75</p>
		
			</div>	
		
			<div class="reason-to-switch">
			
				<img src="images/reasons-to-switch-carbon.png" alt="" />	
				
				<p>100% carbon neutral electricity</p>
		
			</div>	
		
			<div class="reason-to-switch">
			
				<img src="images/reasons-to-switch-greenpeace.png" alt="" />	
				
				<p>Ranked Australia's greenest energy provider by Greenpeace (2014)</p>
		
			</div>	
		
			<div class="reason-to-switch">
			
				<img src="images/reasons-to-switch-donation.png" alt="" />	
				
				<p>A contribution will be made to one of our charity projects</p>
		
			</div>	
		
			<div class="reason-to-switch">
			
				<img src="images/reasons-to-switch-quick.png" alt="" />	
				
				<p>It's quick. Switch online in 5 minutes!</p>
		
			</div>	
		
			<div class="reason-to-switch reason-to-switch-50">
			
				<img src="images/reasons-to-switch-renewable.png" alt="" />	
				
				<p>100% backed by renewable energy</p>
		
			</div>	
		
			<div class="reason-to-switch">
			
				<img src="images/reasons-to-switch-app.png" alt="" />	
				
				<p>Stay in control, track your usage on your mobile and computer</p>
		
			</div>	
		
		</div>

		<p class="clear-floats"></p>

		<div class="provider-info-switch">
		
			<a href="#popup-powershop" class="switch-now provider-info-switch-button">Start the Switch</a>		
		
		</div>	
		
		<hr class="provider">
	
		<div class="terms">
		
			<h5>Compare My Bills</h5>
			
			<p>
				Want to know if switching to Powershop could save you money? Let us know your details and someone will be in touch shortly to compare your bills:
			</p>
			
			<form method="post" action="bill-compare-form-sent.php" class="contact-form" name="contact-form">
			
				<label for="name">Name</label><br />
				<input type="text" name="name" class="text-field">
				
				<br />
			
				<label for="email">E-Mail Address</label><br />
				<input type="email" name="email" class="text-field">
				
				<br />
			
				<label for="telephone">Telephone Number (Only if you want to chat!)</label><br />
				<input type="text" name="telephone" class="text-field">
				
				<br />
			
				<label for="message">Any other questions?</label><br />
				<textarea name="message" rows="10"></textarea>
				
				<div style="text-align:center;">
					<input type="submit" value="Send" class="yellow-button-input" />
				</div>
				
			</form>
			
		</div>
		
		<hr class="provider">
		
		<div class="terms">
			
			<h5>FAQs</h5>
			
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
 
		<script>
		 $(document).ready(function() {
		 
			$('.faq_question').click(function() {
		 
				if ($(this).parent().is('.open')){
					$(this).closest('.faq').find('.faq_answer_container').animate({'height':'0'},500);
					$(this).closest('.faq').removeClass('open');
		 
					}else{
						var newHeight =$(this).closest('.faq').find('.faq_answer').height() +'px';
						$(this).closest('.faq').find('.faq_answer_container').animate({'height':newHeight},500);
						$(this).closest('.faq').addClass('open');
					}
		 
			});
		 
		});
		</script>
		 
		<div class="faq_container">
		   <div class="faq">
			  <div class="faq_question"><img src="images/faq-toggle-plus.png" />Why should I switch my power provider?</div>
				   <div class="faq_answer_container">
					  <div class="faq_answer">
						
						<p>
							We would all rather that the money we spent didn’t cause any harm which is why we have researched which companies are having a 
							positive effect in society. 
						</p>
						
						<p>
							If you would rather be with a power company that considers its effect on the environment, treats its customers well, prices its 
							products fairly and works hard to do good then select which state you are in using the form at the top of the page and choose your 
							new power provider using our criteria table.
						</p>

						<br />
				
					  </div>
				   </div>        
			</div>
		 </div>
		 
		<div class="faq_container">
		   <div class="faq">
			  <div class="faq_question"><img src="images/faq-toggle-plus.png" />How easy is the switching process?</div>
				   <div class="faq_answer_container">
					  <div class="faq_answer">
						
						<p>
							5 minutes from now you could be switched! 
						</p>
						
						<p>
							All you need is your personal details and your payment details – Click the "Switch Now" button above to begin the process. The 
							switch can be 100% completed online and only takes 5 minutes. 
						</p>	
						
						<br />
						
					  </div>
				   </div>        
			</div>
		 </div>
		 
		<div class="faq_container">
		   <div class="faq">
			  <div class="faq_question"><img src="images/faq-toggle-plus.png" />Will it be more expensive?</div>
					<div class="faq_answer_container">
					  <div class="faq_answer">
						
						<p>
							The short answer is no, it most likely won’t.
						</p>
						
						<p> 
							Powershop were found to be Victoria’s cheapest power provider on average according to a report by the Essential Services Commission in 
							2013.
						</p>
						
						<p>
							The report showed that Powershop’s prices were cheapest in 11 of the 15 residential scenarios shown, and Powershop was within the 
							cheapest 3 in all 15 scenarios.	
						</p>
						
						<p>
							The full report is available to view <a href="http://www.esc.vic.gov.au/getattachment/904e73c5-c3c8-4afc-9be9-bc95e3a2a45c/Energy-Retailers-Comparative-Performance-Report-Cu.pdf" target="_blank">here</a>
						</p>

						<br />
				
					  </div>           
					</div>        
			</div>
		 </div>
		 
		<div class="faq_container">
		   <div class="faq">
			  <div class="faq_question"><img src="images/faq-toggle-plus.png" />Can I get out of my current contract?</div>
					<div class="faq_answer_container">
					  <div class="faq_answer">
						
						<p>
							Yes, you can always switch your provider. It’s possible your existent contracts will require you to pay an exit fee but they 
							are usually small amounts (between $25 and $75). 
						</p>
						
						<p>
							If you switch to Powershop then they will pay that fee for you up to $75 (which is likely to be more than enough to cover your 
							whole exit fee).
						</p>
						
						<p>
							You can see how much certain power companies charge for exit fees on our criteria tables. 
						</p>
						
						<br />
				
					  </div>           
					</div>        
			</div>
		 </div>
		 
		<div class="center" style="margin:20px 0;">
			<a href="faqs" class="yellow-button" target="_blank">See Full FAQs</a>
		</div>
		
	</div>
		
		<hr class="provider">
<!--			
			<div class="faq-header">
			
				<a href="">
					<img src="images/faq-toggle-plus.png" />
				</a>
				
				<p>How easy is the switching process?</p>
			
			</div>
			
			<div class="faq-header">
			
				<a href="">
					<img src="images/faq-toggle-plus.png" />
				</a>
				
				<p>How easy is the switching process?</p>
			
			</div>
			
			<div class="faq-header">
			
				<a href="">
					<img src="images/faq-toggle-plus.png" />
				</a>
				
				<p>How easy is the switching process?</p>
			
			</div>
			
			<a href="faqs" class="text-link" target="_blank" style="text-align:center;display:block;">See Full FAQs</a>
-->		

<?php // include 'testimonials.php'; ?>
		
		<div class="terms provider-top">
		
			<h5>About Powershop</h5>
			
			<p>
				Powershop is an online electricity retailer, originally founded in New Zealand and available in Australia (Victoria and NSW) as well. 
			</p>
			
			<p>
				Powershop is a 51% New Zealand state-owned enterprise and the first electricity company in the world where consumers can choose between 
				different brands of electrical power listed on the website and switch between them with the click of a button.
				Different brands of power may offer lower prices, sponsorships or environmental benefits. Users can either let the system automatically buy power from the 
				cheapest supplier, or log in regularly to take advantage of specials.
			</p>
			
			<p>
				 Powershop were found to be Victoria’s cheapest power provider on average according to a report by the Essential Services Commission in 2014.The report showed 
				 that Powershop’s prices were cheapest in 11 of the 15 residential scenarios shown, and Powershop was within the cheapest 3 in all 15 scenarios.
			</p>
			
			<p>
				 It was the best company in Consumers' Institute of New Zealand's 2011 survey of electricity companies. 96% of Powershop customers found it 'good' or 
				 'very good'. Powershop was rated 96% again in 2012.
			</p>
		
		</div>
		
		<p class="clear-floats"></a>
		
	</div>
	
	<p class="clear-floats"></a>
	

<?php include 'footer.php'; ?>