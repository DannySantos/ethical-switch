<?php include 'header.php'; ?>

	<div id="banner" class="banner-ethical-power">
		
		<div class="banner-title charity-banner-title">
		
			<h2><span class="yellow-text">Switch</span> to an ethical power provider</h2>
			
			<p>And <?php 
						if(isset($_SESSION['current_charity_name'])) {
							echo $_SESSION['current_charity_name']; 
						} else {
							echo "a charity of your choice";
						}
					?> receive a <span class="yellow-text">$50</span> donation!</p>

			<?php 
				if (isset($_SESSION['current_charity_filename'])) {
					echo "<img src=\"images/charity-icon-" . $_SESSION['current_charity_filename'] . "-small.png\">";
				}
			?>
			
		</div>
		
	</div>
	
	<div id="switch-process-2">
	
		<div class="content">
		
			<h2>How it Works</h2>
		
			<div class="switch-process-2-step">
			
				<img src="images/how-to-do-it-icon-1.png" />
			
				<p>Choose one of our ethical products</a></p>
			
			</div>
		
			<div class="switch-process-2-step">
			
				<img src="images/how-to-do-it-icon-2.png" />
				
				<br /><br />
				
				<p>Make the switch</p>
			
			</div>
		
			<div class="switch-process-2-step">
			
				<img src="images/how-to-do-it-icon-3.png" />
				
				<p>We make a $50 donation to <?php 
						if(isset($_SESSION['current_charity_name'])) {
							echo $_SESSION['current_charity_name']; 
						} else {
							echo "a charity of your choice";
						}
					?> on your behalf!</p>
			
			</div>
			
			<p class="clear-floats"></p>
		
		</div>

		<div class="colour-bg-separator-2">

			<h2>Switch Your Super</h2>
			
		</div>

		<div id="super-options">

			<div class="choose-super choose-super-future-super">

				<img src="images/ethical-super-full-logo-future-super.png">

				<div class="charity-page-switch">
				
					<a href="#popup-future-super" class="switch-now provider-info-switch-button">Start the Switch</a>		
				
				</div>	

				<a href="super-switch-future-super" class="find-out-more" target="_blank">Or find out more about Future Super</a>

			</div>

			<div class="choose-super choose-super-good-super">

				<img src="images/ethical-super-full-logo-good-super.png">

				<div class="charity-page-switch">
				
					<a href="#popup-good-super" class="switch-now provider-info-switch-button">Start the Switch</a>		
				
				</div>	

				<a href="super-switch-good-super" class="find-out-more" target="_blank">Or find out more about Good Super</a>

			</div>

			<div class="choose-super choose-super-australian-ethical">

				<img src="images/ethical-super-full-logo-australian-ethical.png">

				<div class="charity-page-switch">
				
					<a href="#popup-australian-ethical" class="switch-now provider-info-switch-button">Start the Switch</a>		
				
				</div>	

				<a href="super-switch-australian-ethical" class="find-out-more" target="_blank">Or find out more about Australian Ethical</a>

			</div>

		</div>

		<div class="colour-bg-separator-2">

			<h2>Switch Your Power Provider</h2>
			
		</div>

		<div id="powershop-or-diamond">

			<div class="choose choose-powershop">

				<img src="images/powershop-logo.png">

				<p>Powershop are available in:<br> VIC &amp; NSW</p>

				<div class="charity-page-switch">
				
					<a href="#popup-powershop-generic" class="switch-now provider-info-switch-button">Start the Switch</a>		
				
				</div>	

				<a href="power-switch-powershop" class="find-out-more" target="_blank">Or find out more about Powershop</a>

			</div>


			<div class="choose choose-diamond">

				<img src="images/logo-diamond-energy.png">
				
				<p>Diamond Energy are available in:<br>VIC, NSW, QLD &amp; SA</p>

				<div class="charity-page-switch">
				
					<a href="#popup-diamond-generic" class="switch-now provider-info-switch-button">Start the Switch</a>		
				
				</div>	

				<a href="power-switch-diamond-energy" class="find-out-more" target="_blank">Or find out more about Diamond Energy</a>

			</div>


			<div class="choose-table">

				<div class="colour-bg-separator-2">

					<h2>Or compare ethical power providers in your area:</h2>
					
					<form method="post" action="ethical-power-results">
					
						<select class="dropdown-field" name="state">
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
						
						<input type="submit" name="power-submit" id="power-submit" class="yellow-button-input" value="Compare">
						
					</form>
					
				</div>

			</div>

		</div>
	
	</div>

	<?php include 'popups.php' ?>

	<div class="product-faqs content">
	
		<h2>Switching Information</h2>
		
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
							All you need is your personal details and your payment details – just use the "Select State" form at the top of the page to view 
							our criteria table and select which power company you would like to switch to. The switch can be 100% completed online and only
							takes 5 minutes. 
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
							We consider fair pricing to be a cornerstone of our ethical companies and only offer switches to companies that we think fit the bill. 
						</p>
						
						<p>
							<span class="underline">Powershop</span>
							
							<br />

							Powershop were found to be Victoria’s cheapest power provider on average according to a report by the Essential Services 
							Commission in 2014.
						</p>

						<p>
							The report showed that in Victoria Powershop’s prices were cheapest in 11 of the 15 residential 
							scenarios shown, and Powershop was within the cheapest 3 in all 15 scenarios.	
						</p>
						
						<p>
							The full report is available to view <a href="http://www.esc.vic.gov.au/getattachment/e57104e1-3036-401a-b618-58c9336b7ff4/Energy-retailers-comparative-performance-report-Pr.pdf" target="_blank">here</a>
						</p>
						
						<p>
							<span class="underline">Diamond Energy</span>
							
							<br />

							Diamond Energy has some of the most competitive electricity rates in VIC, SA, NSW and QLD for residential and 
							small business customers. They continually appear as one of the lowest cost electricity retailers in government 
							price comparison websites (eg Energy Made Easy, My Power Planner).
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
							Yes, you can always switch your provider. It’s possible your existent contracts will require you to pay an exit fee but they are usually small 
							amounts (between $25 and $75). 
						</p>
						
						<p>
							<span class="underline">Powershop</span>
							
							<br />
							
							If you switch to Powershop then they will pay that fee for you up to $75 (which is likely to be more than enough to cover your whole exit fee). 
							You can see how much certain power companies charge for exit fees on our criteria tables.
						</p>
						
						<p>
							<span class="underline">Diamond Energy</span>
							
							<br />
							
							If you have been with Diamond Energy for over a year then it is unlikely you will have to pay an exit fee. If you have
							been with Diamond Energy for less than a year then your exit fee will most likely be $22.
						</p>
						
						<br />
				
					  </div>           
					</div>        
			</div>
		 </div>

		<div class="center" style="margin-top:20px;">
			<a href="faqs" class="yellow-button" target="_blank">See Full FAQs</a>
		</div>
		
	</div>
	
	<div id="criteria" class="content">
	
			<h2>What Makes an Ethical Power Company?</h2>
			
			<p class="criteria">
				Our criteria for what makes an ethical power company is based on the following:
			</p>
		
			<div class="criteria-box">
	
				<div class="criteria-box-icon">
		
					<img src="images/criteria-icon-1.png" />
		
				</div>
		
				<div class="criteria-box-text">
			
					<h3>Environmental Impact</h3>
					
					<p>
						Carbon offsetting, paperless billing, investment in renewable energy - we consider anything that has a positive/negative impact on the environment
					</p>
					
				</div>
		
			</div>
		
			<div class="criteria-box">
	
				<div class="criteria-box-icon">
		
					<img src="images/criteria-icon-2.png" />
		
				</div>
		
				<div class="criteria-box-text">
			
					<h3>Value for Money</h3>
					
					<p>
						Are the prices fair? Are all of the costs transparent? We find you the best deals on products/services that have a positive impact
					</p>
			
				</div>
		
			</div>
		
			<div class="criteria-box">
	
				<div class="criteria-box-icon">
		
					<img src="images/criteria-icon-3.png" />
		
				</div>
		
				<div class="criteria-box-text">
			
					<h3>Customer Experience</h3>
					
					<p>
						Are there hidden fees or lock-in contracts? Are they easy to contact and pleasant to talk to? Is it a quick online 
						switch? We value the way a company treats it's customers
					</p>
			
				</div>
		
			</div>
		
			<div class="criteria-box">
	
				<div class="criteria-box-icon">
		
					<img src="images/criteria-icon-4.png" />
		
				</div>
		
				<div class="criteria-box-text">
			
					<h3>Reputation &amp; Endorsements</h3>
					
					<p>
						What are people saying about the companies you buy from? Have they received endorsements from reputable sources? We like to find the 
						companies that have
					</p>
			
				</div>
		
			</div>
		
			<p class="clear-floats"></p>
			
			<br />
			
			<!--<a href="criteria" target="blank" class="yellow-button">See Our Full Criteria</a>-->
		
		
	</div>
	
<?php include 'footer.php'; ?>