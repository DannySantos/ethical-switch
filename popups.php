
<!--------------------------------------- POWERSHOP ---------------------------------------->

		<div id="popup-powershop" class="overlay">

			<div class="popup">

				<h2>Choose Your Charity!</h2>

				<a class="close" href="#">×</a>

				<div class="popup-content">

					<p>Every time you make an Ethical Switch, we make a donation to charity on your behalf!</p>

					<p>Which of our three current charity partners would you ike to receive a $50 donation?</p>

					<form method="post" action="power-switch-powershop-action.php">

						<div id="charities-power">
							
							<div class="popup-charity-box">
							
								<div class="popup-charity-box-icon">
								
									<img src="images/charity-icon-<?php echo $charityFile6; ?>.png" />
								
								</div>
								
								<div class="popup-charity-box-text">
								
									<strong><?php echo $charityTitle6; ?></strong>
				
									<!-- <p>$<?php //echo $charityRaised6; ?> raised so Far!</p> -->
									
									<p><?php echo $charityDescription6; ?></p>

									<input type="radio" name="charity-choice" value="<?php echo $charityFile6; ?>">
									<strong>Choose <?php echo $charityTitle6; ?></strong>
										
								</div>
							
							</div>
							
							<div class="popup-charity-box">
							
								<div class="popup-charity-box-icon">
								
									<img src="images/charity-icon-<?php echo $charityFile7; ?>.png" />
								
								</div>
								
								<div class="popup-charity-box-text">
								
									<strong><?php echo $charityTitle7; ?></strong>
				
									<!-- <p>$<?php //echo $charityRaised7; ?> raised so Far!</p> -->
									
									<p><?php echo $charityDescription7; ?></p>

									<input type="radio" name="charity-choice" value="<?php echo $charityFile7; ?>">
									<strong>Choose <?php echo $charityTitle7; ?></strong>
										
								</div>
							
							</div>
							
							<div class="popup-charity-box">
							
								<div class="popup-charity-box-icon">
								
									<img src="images/charity-icon-<?php echo $charityFile8; ?>.png" />

								</div>
								
								<div class="popup-charity-box-text">
								
									<strong><?php echo $charityTitle8; ?></strong>
				
									<!-- <p>$<?php //echo $charityRaised8; ?> raised so Far!</p> -->
									
									<p><?php echo $charityDescription8; ?></p>

									<input type="radio" name="charity-choice" value="<?php echo $charityFile8; ?>">
									<strong>Choose <?php echo $charityTitle8; ?></strong>
										
								</div>
							
							</div>
							
							<p class="clear-floats"></p>

							<div class="center padded">

								<input type="email" name="email" value="Enter E-Mail Address" class="text-field-2">
								<input type="submit" value="Start the Switch!" class="yellow-button-input">

								<br />

								<input type="checkbox" name="opt-in" value="opt-in" checked> 
								<span class="smaller-font">Your information will be thankfully received by your chosen charity</span>

							</div>
						
						</div>

					</form>

				</div>

			</div>
			
		</div>

<!--------------------------------------- DIAMOND ---------------------------------------->

		<div id="popup-diamond" class="overlay">

			<div class="popup">

				<h2>Choose Your Charity!</h2>

				<a class="close" href="#">×</a>

				<div class="popup-content">

					<p>Every time you make an Ethical Switch, we make a donation to charity on your behalf!</p>

					<p>Which of our three current charity partners would you ike to receive a $50 donation?</p>

					<form method="post" action="power-switch-diamond-energy-action.php">

						<div id="charities-power">
							
							<div class="popup-charity-box">
							
								<div class="popup-charity-box-icon">
								
									<img src="images/charity-icon-<?php echo $charityFile6; ?>.png" />
								
								</div>
								
								<div class="popup-charity-box-text">
								
									<strong><?php echo $charityTitle6; ?></strong>
				
									<!-- <p>$<?php //echo $charityRaised6; ?> raised so Far!</p> -->
									
									<p><?php echo $charityDescription6; ?></p>

									<input type="radio" name="charity-choice" value="<?php echo $charityFile6; ?>">
									<strong>Choose <?php echo $charityTitle6; ?></strong>
										
								</div>
							
							</div>
							
							<div class="popup-charity-box">
							
								<div class="popup-charity-box-icon">
								
									<img src="images/charity-icon-<?php echo $charityFile7; ?>.png" />
								
								</div>
								
								<div class="popup-charity-box-text">
								
									<strong><?php echo $charityTitle7; ?></strong>
				
									<!-- <p>$<?php //echo $charityRaised7; ?> raised so Far!</p> -->
									
									<p><?php echo $charityDescription7; ?></p>

									<input type="radio" name="charity-choice" value="<?php echo $charityFile7; ?>">
									<strong>Choose <?php echo $charityTitle7; ?></strong>
										
								</div>
							
							</div>
							
							<div class="popup-charity-box">
							
								<div class="popup-charity-box-icon">
								
									<img src="images/charity-icon-<?php echo $charityFile8; ?>.png" />

								</div>
								
								<div class="popup-charity-box-text">
								
									<strong><?php echo $charityTitle8; ?></strong>
				
									<!-- <p>$<?php //echo $charityRaised8; ?> raised so Far!</p> -->
									
									<p><?php echo $charityDescription8; ?></p>

									<input type="radio" name="charity-choice" value="<?php echo $charityFile8; ?>">
									<strong>Choose <?php echo $charityTitle8; ?></strong>
										
								</div>
							
							</div>
							
							<p class="clear-floats"></p>

							<div class="center padded">

								<input type="email" name="email" value="Enter E-Mail Address" class="text-field-2">
								<input type="submit" value="Start the Switch!" class="yellow-button-input">

								<br />

								<input type="checkbox" name="opt-in" value="opt-in" checked> 
								<span class="smaller-font">Your information will be thankfully received by your chosen charity</span>

							</div>
						
						</div>

					</form>

				</div>

			</div>
			
		</div>

<!--------------------------------------- POWERSHOP GENERIC ---------------------------------------->

		<div id="popup-powershop-generic" class="overlay">

			<div class="popup">

				<h2>Enter your email to start!</h2>

				<a class="close" href="#">×</a>

				<div class="popup-content">

					<p>Every time you make an Ethical Switch, we make a donation to charity on your behalf!</p>

					<p>Switch now and <?php echo $_SESSION['current_charity_name']; ?> will receive a $50 donation</p>

					<form method="post" action="power-switch-powershop-action.php">

						<div class="center padded">

							<input type="email" name="email" value="Enter E-Mail Address" class="text-field-2">
							<input type="submit" value="Start the Switch!" class="yellow-button-input">
							<input type="hidden" name="charity-choice" value="<?php echo $_SESSION['current_charity_name']; ?>">

							<br />

							<input type="checkbox" name="opt-in" value="opt-in" checked> 
							<span class="smaller-font">Your information will be thankfully received by your chosen charity</span>

						</div>

					</form>

				</div>

			</div>
			
		</div>
		
<!--------------------------------------- DIAMOND GENERIC ---------------------------------------->

		<div id="popup-diamond-generic" class="overlay">

			<div class="popup">

				<h2>Enter your email to start!</h2>

				<a class="close" href="#">×</a>

				<div class="popup-content">

					<p>Every time you make an Ethical Switch, we make a donation to charity on your behalf!</p>

					<p>Switch now and <?php echo $_SESSION['current_charity_name']; ?> will receive a $50 donation</p>

					<form method="post" action="power-switch-diamond-energy-action.php">

						<div class="center padded">

							<input type="email" name="email" value="Enter E-Mail Address" class="text-field-2">
							<input type="submit" value="Start the Switch!" class="yellow-button-input">
							<input type="hidden" name="charity-choice" value="<?php echo $_SESSION['current_charity_name']; ?>">

							<br />

							<input type="checkbox" name="opt-in" value="opt-in" checked> 
							<span class="smaller-font">Your information will be thankfully received by your chosen charity</span>

						</div>

					</form>

				</div>

			</div>
			
		</div>

<!--------------------------------------- FUTURE SUPER ---------------------------------------->

		<div id="popup-future-super" class="overlay">

			<div class="popup">

				<h2>Choose Your Charity!</h2>

				<a class="close" href="#">×</a>

				<div class="popup-content">

					<p>Every time you make an Ethical Switch, we make a donation to charity on your behalf!</p>

					<p>Which of our three current charity partners would you ike to receive a $50 donation?</p>

					<form method="post" action="super-switch-future-super-action.php">

						<div id="charities-power">
							
							<div class="popup-charity-box">
							
								<div class="popup-charity-box-icon">
								
									<img src="images/charity-icon-<?php echo $charityFile6; ?>.png" />
								
								</div>
								
								<div class="popup-charity-box-text">
								
									<strong><?php echo $charityTitle6; ?></strong>
				
									<!-- <p>$<?php //echo $charityRaised6; ?> raised so Far!</p> -->
									
									<p><?php echo $charityDescription6; ?></p>

									<input type="radio" name="charity-choice" value="<?php echo $charityFile6; ?>">
									<strong>Choose <?php echo $charityTitle6; ?></strong>
										
								</div>
							
							</div>
							
							<div class="popup-charity-box">
							
								<div class="popup-charity-box-icon">
								
									<img src="images/charity-icon-<?php echo $charityFile7; ?>.png" />
								
								</div>
								
								<div class="popup-charity-box-text">
								
									<strong><?php echo $charityTitle7; ?></strong>
				
									<!-- <p>$<?php //echo $charityRaised7; ?> raised so Far!</p> -->
									
									<p><?php echo $charityDescription7; ?></p>

									<input type="radio" name="charity-choice" value="<?php echo $charityFile7; ?>">
									<strong>Choose <?php echo $charityTitle7; ?></strong>
										
								</div>
							
							</div>
							
							<div class="popup-charity-box">
							
								<div class="popup-charity-box-icon">
								
									<img src="images/charity-icon-<?php echo $charityFile8; ?>.png" />

								</div>
								
								<div class="popup-charity-box-text">
								
									<strong><?php echo $charityTitle8; ?></strong>
				
									<!-- <p>$<?php //echo $charityRaised8; ?> raised so Far!</p> -->
									
									<p><?php echo $charityDescription8; ?></p>

									<input type="radio" name="charity-choice" value="<?php echo $charityFile8; ?>">
									<strong>Choose <?php echo $charityTitle8; ?></strong>
										
								</div>
							
							</div>
							
							<p class="clear-floats"></p>

							<div class="center padded">

								<input type="email" name="email" value="Enter E-Mail Address" class="text-field-2">
								<input type="submit" value="Start the Switch!" class="yellow-button-input">

								<br />

								<input type="checkbox" name="opt-in" value="opt-in" checked> 
								<span class="smaller-font">Your information will be thankfully received by your chosen charity</span>

							</div>
						
						</div>

					</form>

				</div>

			</div>
			
		</div>

<!--------------------------------------- GOOD SUPER ---------------------------------------->

		<div id="popup-good-super" class="overlay">

			<div class="popup">

				<h2>Choose Your Charity!</h2>

				<a class="close" href="#">×</a>

				<div class="popup-content">

					<p>Every time you make an Ethical Switch, we make a donation to charity on your behalf!</p>

					<p>Which of our three current charity partners would you ike to receive a $50 donation?</p>

					<form method="post" action="super-switch-good-super-action.php">

						<div id="charities-power">
							
							<div class="popup-charity-box">
							
								<div class="popup-charity-box-icon">
								
									<img src="images/charity-icon-<?php echo $charityFile6; ?>.png" />
								
								</div>
								
								<div class="popup-charity-box-text">
								
									<strong><?php echo $charityTitle6; ?></strong>
				
									<!-- <p>$<?php //echo $charityRaised6; ?> raised so Far!</p> -->
									
									<p><?php echo $charityDescription6; ?></p>

									<input type="radio" name="charity-choice" value="<?php echo $charityFile6; ?>">
									<strong>Choose <?php echo $charityTitle6; ?></strong>
										
								</div>
							
							</div>
							
							<div class="popup-charity-box">
							
								<div class="popup-charity-box-icon">
								
									<img src="images/charity-icon-<?php echo $charityFile7; ?>.png" />
								
								</div>
								
								<div class="popup-charity-box-text">
								
									<strong><?php echo $charityTitle7; ?></strong>
				
									<!-- <p>$<?php //echo $charityRaised7; ?> raised so Far!</p> -->
									
									<p><?php echo $charityDescription7; ?></p>

									<input type="radio" name="charity-choice" value="<?php echo $charityFile7; ?>">
									<strong>Choose <?php echo $charityTitle7; ?></strong>
										
								</div>
							
							</div>
							
							<div class="popup-charity-box">
							
								<div class="popup-charity-box-icon">
								
									<img src="images/charity-icon-<?php echo $charityFile8; ?>.png" />

								</div>
								
								<div class="popup-charity-box-text">
								
									<strong><?php echo $charityTitle8; ?></strong>
				
									<!-- <p>$<?php //echo $charityRaised8; ?> raised so Far!</p> -->
									
									<p><?php echo $charityDescription8; ?></p>

									<input type="radio" name="charity-choice" value="<?php echo $charityFile8; ?>">
									<strong>Choose <?php echo $charityTitle8; ?></strong>
										
								</div>
							
							</div>
							
							<p class="clear-floats"></p>

							<div class="center padded">

								<input type="email" name="email" value="Enter E-Mail Address" class="text-field-2">
								<input type="submit" value="Start the Switch!" class="yellow-button-input">

								<br />

								<input type="checkbox" name="opt-in" value="opt-in" checked> 
								<span class="smaller-font">Your information will be thankfully received by your chosen charity</span>

							</div>
						
						</div>

					</form>

				</div>

			</div>
			
		</div>

<!--------------------------------------- AUSTRALIAN ETHICAL ---------------------------------------->

		<div id="popup-australian-ethical" class="overlay">

			<div class="popup">

				<h2>Choose Your Charity!</h2>

				<a class="close" href="#">×</a>

				<div class="popup-content">

					<p>Every time you make an Ethical Switch, we make a donation to charity on your behalf!</p>

					<p>Which of our three current charity partners would you ike to receive a $50 donation?</p>

					<form method="post" action="super-switch-australian-ethical-action.php">

						<div id="charities-power">
							
							<div class="popup-charity-box">
							
								<div class="popup-charity-box-icon">
								
									<img src="images/charity-icon-<?php echo $charityFile6; ?>.png" />
								
								</div>
								
								<div class="popup-charity-box-text">
								
									<strong><?php echo $charityTitle6; ?></strong>
				
									<!-- <p>$<?php //echo $charityRaised6; ?> raised so Far!</p> -->
									
									<p><?php echo $charityDescription6; ?></p>

									<input type="radio" name="charity-choice" value="<?php echo $charityFile6; ?>">
									<strong>Choose <?php echo $charityTitle6; ?></strong>
										
								</div>
							
							</div>
							
							<div class="popup-charity-box">
							
								<div class="popup-charity-box-icon">
								
									<img src="images/charity-icon-<?php echo $charityFile7; ?>.png" />
								
								</div>
								
								<div class="popup-charity-box-text">
								
									<strong><?php echo $charityTitle7; ?></strong>
				
									<!-- <p>$<?php //echo $charityRaised7; ?> raised so Far!</p> -->
									
									<p><?php echo $charityDescription7; ?></p>

									<input type="radio" name="charity-choice" value="<?php echo $charityFile7; ?>">
									<strong>Choose <?php echo $charityTitle7; ?></strong>
										
								</div>
							
							</div>
							
							<div class="popup-charity-box">
							
								<div class="popup-charity-box-icon">
								
									<img src="images/charity-icon-<?php echo $charityFile8; ?>.png" />

								</div>
								
								<div class="popup-charity-box-text">
								
									<strong><?php echo $charityTitle8; ?></strong>
				
									<!-- <p>$<?php //echo $charityRaised8; ?> raised so Far!</p> -->
									
									<p><?php echo $charityDescription8; ?></p>

									<input type="radio" name="charity-choice" value="<?php echo $charityFile8; ?>">
									<strong>Choose <?php echo $charityTitle8; ?></strong>
										
								</div>
							
							</div>
							
							<p class="clear-floats"></p>

							<div class="center padded">

								<input type="email" name="email" value="Enter E-Mail Address" class="text-field-2">
								<input type="submit" value="Start the Switch!" class="yellow-button-input">

								<br />

								<input type="checkbox" name="opt-in" value="opt-in" checked> 
								<span class="smaller-font">Your information will be thankfully received by your chosen charity</span>

							</div>
						
						</div>

					</form>

				</div>

			</div>
			
		</div>

<!--------------------------------------- FUTURE SUPER GENERIC ---------------------------------------->

		<div id="popup-future-super-generic" class="overlay">

			<div class="popup">

				<h2>Enter your email to start!</h2>

				<a class="close" href="#">×</a>

				<div class="popup-content">

					<p>Every time you make an Ethical Switch, we make a donation to charity on your behalf!</p>

					<p>Switch now and <?php echo $_SESSION['current_charity_name']; ?> will receive a $50 donation</p>

					<form method="post" action="super-switch-future-super-action.php">

						<div class="center padded">

							<input type="email" name="email" value="Enter E-Mail Address" class="text-field-2">
							<input type="submit" value="Start the Switch!" class="yellow-button-input">
							<input type="hidden" name="charity-choice" value="<?php echo $_SESSION['current_charity_name']; ?>">

							<br />

							<input type="checkbox" name="opt-in" value="opt-in" checked> 
							<span class="smaller-font">Your information will be thankfully received by your chosen charity</span>

						</div>

					</form>

				</div>

			</div>
			
		</div>

<!--------------------------------------- GOOD SUPER GENERIC ---------------------------------------->

		<div id="popup-good-super-generic" class="overlay">

			<div class="popup">

				<h2>Enter your email to start!</h2>

				<a class="close" href="#">×</a>

				<div class="popup-content">

					<p>Every time you make an Ethical Switch, we make a donation to charity on your behalf!</p>

					<p>Switch now and <?php echo $_SESSION['current_charity_name']; ?> will receive a $50 donation</p>

					<form method="post" action="super-switch-good-super-action.php">

						<div class="center padded">

							<input type="email" name="email" value="Enter E-Mail Address" class="text-field-2">
							<input type="submit" value="Start the Switch!" class="yellow-button-input">
							<input type="hidden" name="charity-choice" value="<?php echo $_SESSION['current_charity_name']; ?>">

							<br />

							<input type="checkbox" name="opt-in" value="opt-in" checked> 
							<span class="smaller-font">Your information will be thankfully received by your chosen charity</span>

						</div>

					</form>

				</div>

			</div>
			
		</div>

<!--------------------------------------- AUSTRALIAN ETHICAL GENERIC ---------------------------------------->

		<div id="popup-australian-ethical-generic" class="overlay">

			<div class="popup">

				<h2>Enter your email to start!</h2>

				<a class="close" href="#">×</a>

				<div class="popup-content">

					<p>Every time you make an Ethical Switch, we make a donation to charity on your behalf!</p>

					<p>Switch now and <?php echo $_SESSION['current_charity_name']; ?> will receive a $50 donation</p>

					<form method="post" action="super-switch-australian-ethical-action.php">

						<div class="center padded">

							<input type="email" name="email" value="Enter E-Mail Address" class="text-field-2">
							<input type="submit" value="Start the Switch!" class="yellow-button-input">
							<input type="hidden" name="charity-choice" value="<?php echo $_SESSION['current_charity_name']; ?>">

							<br />

							<input type="checkbox" name="opt-in" value="opt-in" checked> 
							<span class="smaller-font">Your information will be thankfully received by your chosen charity</span>

						</div>

					</form>

				</div>

			</div>
			
		</div>