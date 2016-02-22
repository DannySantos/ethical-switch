<?php include 'variables.php'; ?>
<?php include 'functions.php'; ?>
<?php include 'ethical-power-results-data.php'; ?>
<?php
if(isset($_POST['state'])) {
	$_SESSION['chosenState'] = $_POST['state'];
	$_SESSION['chosenStateCaps'] = strtoupper($_SESSION['chosenState']);
}

$error_message = "";
$error_style = "";
?>
<!DOCTYPE html>

<html lang="en">
<head>

	<link rel="stylesheet" type="text/css" href="style.css" />

	<link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="images/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="images/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#3084bf">
	<meta name="msapplication-TileImage" content="images/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600' rel='stylesheet' type='text/css'>
	
	<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">
	
	<meta charset="UTF-8">
	
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@_ethicalswitch" />
	<meta name="twitter:title" content="Ethical Switch" />
	<meta name="twitter:description" content="Find the Businesses that Deserve your Business" />
	<!-- ************* <meta name="twitter:image" content="" /> ************ -->
	<meta name="twitter:url" content="http://ethicalswitch.com/" />
	<meta property="og:title" content="Ethical Switch - Find the Businesses that Deserve your Business" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://ethicalswitch.com/" />
	<meta property="og:image" content="http://ethicalswitch.com/images/open-graph-image.png" />
	<meta property="og:description" content="Having a positive effect on the world can be as simple as switching your spending to the right company
												We would all rather that the money we spent didn't cause any harm but it can be tricky to know which companies are the bad ones and which are the good.
												This is why we exist. We are a new social enterprise whose mission is to find Ethical companies offering great deals and make it simple for people to 
												switch across to them. By finding affordable deals from ethical companies, the choice is each of ours to make. So are you up for making an Ethical 
												Switch? We promise you, Switching never felt better" />
	<meta property="og:locale" content="en_AU" />
	<meta property="og:site_name" content="Ethical Switch" />
	
	<title>Ethical Switch - Find the Businesses that Deserve your Business</title>

	<?php if (strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false) { ?>
	
		<style>
			@media only screen and (max-width:768px) {

				#criteria {

					display:none;
				}
			}
		</style>
		
	<?php } ?>
	
	<?php $rand = rand(1, 100);	?>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/scripts.js"></script>
	
		
</head>

<body>
	
	<?php if (strpos($_SERVER['SCRIPT_NAME'], 'confirmation-page.php') !== false) { ?>
	
		<div class="short-page-height">
	
	<?php } ?>
	
	<?php if (strpos($_SERVER['SCRIPT_NAME'], 'contact-form-sent.php') !== false) { ?>
	
		<div class="short-page-height">
	
	<?php } ?>
	
	<?php if (strpos($_SERVER['SCRIPT_NAME'], 'thank-you.php') !== false) { ?>
	
		<div class="short-page-height">
	
	<?php } ?>
	
	<?php if (strpos($_SERVER['SCRIPT_NAME'], 'charity-application-form-sent.php') !== false) { ?>
	
		<div class="short-page-height">
	
	<?php } ?>
	
	<?php if (strpos($_SERVER['SCRIPT_NAME'], 'bill-compare-form-sent.php') !== false) { ?>
	
		<div class="short-page-height">
	
	<?php } ?>
	
	<?php if (strpos($_SERVER['SCRIPT_NAME'], 'ethical-power-results.php') !== false && !isset($_SESSION['chosenState'])) { ?>
	
		<div class="short-page-height">
	
	<?php } ?>
	
	<div id="top-wrapper">
	
		<div id="social">
	
			<ul>
		
				<li>
					<a href="https://www.facebook.com/ethicalswitch" target="_blank" class="facebook"></a>
				</li>
		
				<li>
					<a href="https://twitter.com/_ethicalswitch" target="_blank" class="twitter"></a>
				</li>
		
				<li>
					<a href="https://www.youtube.com/user/EthicalSwitchAU" target="_blank" class="youtube"></a>
				</li>
			
			</ul>
	
		</div>
			
		<div class="content" style="padding:0;">

			<div id="logo">
	
				<a href="http://ethicalswitch.com/" class="logo">
						<img src="images/logo.png" alt="Ethical Switch Logo" />
				</a>

			</div>
			
			<nav id="product-nav">		
				
				<ul id="product-nav-list">
					
					<li>
						<a href="ethical-power" class="ethical-power top-item"><span class="product-nav-text">Ethical Power</span></a>
					</li>
					
					<li>
						<a href="ethical-super" class="ethical-super"><span class="product-nav-text">Ethical Super</span></a>
					</li>
					
					<li>
						<a href="ethical-banking" class="ethical-banking"><span class="product-nav-text">Ethical Banking</span></a>
					</li>
					
				</ul>
				
			</nav>

		</div>
		
	</div>
	
