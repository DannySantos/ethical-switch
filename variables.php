<?php 

session_start();

// Funds Raised

$charityRaised1 = 2000;
$charityRaised2 = 700;
$charityRaised3 = 1200;

$charityRaised4 = 250;
$charityRaised5 = 450;

$charityRaised6 = 50;
$charityRaised7 = 50;
$charityRaised8 = 50;

$totalRaised = ($charityRaised1 + $charityRaised2 + $charityRaised3 + $charityRaised4 + $charityRaised5);
$totalRaised1 = ($charityRaised1 + $charityRaised2 + $charityRaised3);
$totalRaised2 = ($charityRaised4 + $charityRaised5);
$totalRaised3 = ($charityRaised6 + $charityRaised7 + $charityRaised8);

// Progress Bar Percentages

$charityProgress1 = 67;
$charityProgress2 = 70;
$charityProgress3 = 75;

$charityProgress4 = 20;
$charityProgress5 = 20;

$charityProgress6 = 20;
$charityProgress7 = 20;
$charityProgress8 = 20;

// Remaining is Calculated by Progress 

$charityRemaining1 = (100 - $charityProgress1);
$charityRemaining2 = (100 - $charityProgress2);
$charityRemaining3 = (100 - $charityProgress3);

$charityRemaining4 = (100 - $charityProgress4);
$charityRemaining5 = (100 - $charityProgress5);

$charityRemaining6 = (100 - $charityProgress6);
$charityRemaining7 = (100 - $charityProgress7);
$charityRemaining8 = (100 - $charityProgress8);

// Targets

$charityTarget1 = 3000;
$charityTarget2 = 1000;
$charityTarget3 = 1000;

$charityTarget4 = 1000;
$charityTarget5 = 1000;

$charityTarget6 = 1000;
$charityTarget7 = 1000;
$charityTarget8 = 1000;

// Filenames

$charityFile1 = "asrc";
$charityFile2 = "portal-project";
$charityFile3 = "pollinate-water";

$charityFile4 = "fsc";
$charityFile5 = "conservation-volunteers";

$charityFile6 = "big-brothers-big-sisters";
$charityFile7 = "ncc";
$charityFile8 = "habitat";

// Filenames Without Dash

$charityFileDashless1 = "asrc";
$charityFileDashless2 = "portalproject";
$charityFileDashless3 = "pollinate";

$charityFileDashless4 = "fsc";
$charityFileDashless5 = "conservationvolunteers";

$charityFileDashless6 = "bigbrothersbigsisters";
$charityFileDashless7 = "ncc";
$charityFileDashless8 = "habitat";

// Titles

$charityTitle1 = "ASRC";
$charityTitle2 = "Portal Project";
$charityTitle3 = "Pollinate";

$charityTitle4 = "FSC";
$charityTitle5 = "Conservation Volunteers";

$charityTitle6 = "Big Brothers Big Sisters";
$charityTitle7 = "Nature Conservation Council";
$charityTitle8 = "Habitat for Humanity Australia";

// Home Page Description

$charityDescription1 = "The Asylum Seeker Resource Centre provides community, support and bare essentials to the people who need it most";
$charityDescription2 = "Bringing education, entertainment and personal messages from Melbourne to displaced children in South Sudan";
$charityDescription3 = "A Pollinate Energy project aiming to spread new water filters to another 1000 urban poor Indian families";

$charityDescription4 = "Environmentally appropriate, socially beneficial and economically viable management of the world's forests";
$charityDescription5 = "Important environmental and wildlife conservation projects, all carried out with the help of volunteers";

$charityDescription6 = "The nation's premiere donor and volunteer-supported youth mentoring organization";
$charityDescription7 = "The voice for nature in New South Wales";
$charityDescription8 = "Building homes, communities and hope";


?>
	


