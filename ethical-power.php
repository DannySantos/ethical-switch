<?php include 'header.php'; ?>

	<div id="banner" class="banner-ethical-power">

		<div class="banner-title">
			
			<h2>Which Power Company Deserves Your Money?</h2>
		
			<form method="post" action="ethical-power-results" name="frm">
			
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
				
				<input type="submit" name="power-submit" id="power-submit" class="yellow-button-input" value="Find Out Now" onClick="return val();">
				
			</form>
			
		</div>
		
	</div>
	
	<div class="summary">
	
		<h2>Ethical Power</h2>
		
		<p>
			<h3>Having a positive effect on the world can be as simple as switching your spending to the right company</h3>
			
			<p>We have done the research and discovered who are the best power companies in Australia</p>
			
			<p>Simply <strong>select which state</strong> you are in above and <strong>click 'Find Out Now'</strong> to see a full list of who the best power companies operating in your area
				are and why.</p>
			
			<p>If you like one of our 5 star companies then you also have the option to click on the 'Switch Now' button and complete a simple 5 minute online
				process to make a switch to your new chosen ethical provider. If you do you'll know what we mean when we say:</p> 
			
			<p><strong>Switching never felt better</strong></p>
			
		</p>
	
	</div>
	
<?php include 'sign-up.php'; ?>

<!--		
	<div class="colour-bg-separator">
	
		<span class="colour-bg-separator-text">How does switching help?</span>
		
		<a href="#" class="yellow-button">
			Find Out Now
		</a>
		
	</div>	
-->
	<div class="product-faqs content">
	
		<h3>Switching Information</h3>
		
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
			
			<p>What makes an ethical power company?</p>
		
		</div>
		
		<div class="faq-header">
		
			<a href="">
				<img src="images/faq-toggle-plus.png" />
			</a>
			
			<p>Can I get out of my current contract?</p>
		
		</div>
		
		<div class="faq-header">
		
			<a href="">
				<img src="images/faq-toggle-plus.png" />
			</a>
			
			<p>Will it be more expensive?</p>
		
		</div>
		
		<br />
		
		<a href="faqs" class="yellow-button">See Full FAQs</a>
		
		<h4>How easy is the switching process?</h4>
		
		<p>
			If you switch to Powershop via our Ethical Power Switch campaign, a $50 donation will be given to one of our partner charitable projects of your choice.
			We receive a contribution of between $50 and $150 from Powershop for each customer who joins them. 
		</p>
		
		<p>
			Ethical Switch Pty Ltd will donate not less than 40% from its sign up rewards fee to its nominated beneficiaries, Pollinate Energy, Asylum Seeker Resource 
			Centre & Peace Palette where a customer signs a contract to use Powershop Australia Pty Ltd as their energy provider. 
		</p>
		
		<h4>What makes an ethical power company?</h4>
		
		<p>
			If you switch to Powershop via our Ethical Power Switch campaign, a $50 donation will be given to one of our partner charitable projects of your choice.
			We receive a contribution of between $50 and $150 from Powershop for each customer who joins them. 
		</p>
		
		<p>
			Ethical Switch Pty Ltd will donate not less than 40% from its sign up rewards fee to its nominated beneficiaries, Pollinate Energy, Asylum Seeker Resource 
			Centre & Peace Palette where a customer signs a contract to use Powershop Australia Pty Ltd as their energy provider. 
		</p>
		
		<h4>Can I get out of my current contract?</h4>
		
		<p>
			If you switch to Powershop via our Ethical Power Switch campaign, a $50 donation will be given to one of our partner charitable projects of your choice.
			We receive a contribution of between $50 and $150 from Powershop for each customer who joins them. 
		</p>
		
		<p>
			Ethical Switch Pty Ltd will donate not less than 40% from its sign up rewards fee to its nominated beneficiaries, Pollinate Energy, Asylum Seeker Resource 
			Centre & Peace Palette where a customer signs a contract to use Powershop Australia Pty Ltd as their energy provider. 
		</p>
		
		<h4>Will it be more expensive?</h4>
		
		<p>
			If you switch to Powershop via our Ethical Power Switch campaign, a $50 donation will be given to one of our partner charitable projects of your choice.
			We receive a contribution of between $50 and $150 from Powershop for each customer who joins them. 
		</p>
		
		<p>
			Ethical Switch Pty Ltd will donate not less than 40% from its sign up rewards fee to its nominated beneficiaries, Pollinate Energy, Asylum Seeker Resource 
			Centre & Peace Palette where a customer signs a contract to use Powershop Australia Pty Ltd as their energy provider. 
		</p>
		
		<p>
			This amounts to a minimum of 80% of our profits for this campaign.
		</p>	
-->		
		<div class="center" style="margin-top:20px;">
			<a href="faqs" class="yellow-button">See Full FAQs</a>
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
<!--		
	<div class="colour-bg-separator">
	
		<span class="colour-bg-separator-text">How ethical is my current provider?</span>
		
		<a href="#" class="yellow-button">
			Find Out Now
		</a>
		
	</div>
-->


<?php include 'footer.php'; ?>
	
	
	
	
	
	
	
	