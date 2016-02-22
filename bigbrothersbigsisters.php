<?php
	
	session_start();
	session_unset();
	session_destroy();
	session_start();
	ob_start();

	include "functions.php"; 

	$_SESSION['current_charity_name'] = "Big Brothers Big Sisters";
	$_SESSION['current_charity_filename'] = "big-brothers-big-sisters";

    redirectTo("charity-page");
    exit;

   ob_end_flush();

?>