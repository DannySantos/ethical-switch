<?php
	
	session_start();
	session_unset();
	session_destroy();
	session_start();
	ob_start();

	include "functions.php"; 

	$_SESSION['current_charity_name'] = "Portal Project";
	$_SESSION['current_charity_filename'] = "portal-project";

    redirectTo("charity-page");
    exit;

   ob_end_flush();

?>