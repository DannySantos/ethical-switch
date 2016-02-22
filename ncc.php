<?php
	
	session_start();
	session_unset();
	session_destroy();
	session_start();
	ob_start();

	include "functions.php"; 

	$_SESSION['current_charity_name'] = "Nature Conservation Council";
	$_SESSION['current_charity_filename'] = "ncc";

    redirectTo("charity-page");
    exit;

   ob_end_flush();

?>