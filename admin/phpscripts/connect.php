<?php
	// Set up connection credentials
	$user = "root";
	$pass = "root";
	$url = "localhost";
	$db = "db_research3014";

	// $user = "nmastrac_alexand";
	// $pass = "PotatoTomato4$";
	// $url = "gator4091.hostgator.com";
	// $db = "nmastrac_db_nammie";
	
	$link = mysqli_connect($url, $user, $pass, $db); //Mac
	//$link = mysqli_connect($url, $user, $pass, $db); //PC
	
	/* check connection */ 	
	if(mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>