<!--
	<div id="upper-footer" class="grey-wrapper">
	
		<div class="content">
		
			
		
		</div>
		
	</div>
-->

	<?php if (strpos($_SERVER['SCRIPT_NAME'], 'confirmation-page.php') !== false) { ?>
	
		<div class="push"></div>
        </div></div>
	
	<?php } ?>

	<?php if (strpos($_SERVER['SCRIPT_NAME'], 'contact-form-sent.php') !== false) { ?>
	
		<div class="push"></div>
        </div></div>
	
	<?php } ?>

	<?php if (strpos($_SERVER['SCRIPT_NAME'], 'thank-you.php') !== false) { ?>
	
		<div class="push"></div>
        </div></div>
	
	<?php } ?>

	<?php if (strpos($_SERVER['SCRIPT_NAME'], 'charity-application-form-sent.php') !== false) { ?>
	
		<div class="push"></div>
        </div></div>
	
	<?php } ?>

	<?php if (strpos($_SERVER['SCRIPT_NAME'], 'bill-compare-form-sent.php') !== false) { ?>
	
		<div class="push"></div>
        </div></div>
	
	<?php } ?>

	<?php if (strpos($_SERVER['SCRIPT_NAME'], 'ethical-power-results.php') !== false && !isset($_SESSION['chosenState'])) { ?>
	
		<div class="push"></div>
        </div></div>
	
	<?php } ?>
	
		<div id="footer-wrapper">
	
			<div class="footer-area-1">
	
				&copy; Copyright <?php echo date("Y"); ?> Ethical Switch Pty Ltd | ABN: 71601309611
	
			</div>
	
			<div class="footer-area-2">
	
				<ul>
					<li><a href="http://ethicalswitch.com/">Home</a></li>
					<li><a href="terms-and-conditions">Terms &amp; Conditions</a></li>
					<li><a href="privacy-policy">Privacy Policy</a></li>
					<li><a href="faqs">FAQs</a></li>
					<li><a href="http://www.ethicalswitch.com/blog/">Blog</a></li>
					<li><a href="contact-us">Contact Us</a></li>
				</ul>
	
			</div>
	
			<div class="footer-area-3">
	
					
	
			</div>
		
		</div>
	
	<script src="js/google-analytics.js"></script>
	<script src="js/state-select-error.js"></script>
	<script src="js/tooltip.js"></script>
</body>

</html>