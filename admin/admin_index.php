<?php
//mac error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once('phpscripts/config.php');
date_default_timezone_set("America/New_York");
confirm_logged_in();

$theHour = date('G');

if ( $theHour >= 3 && $theHour <= 11 ) {
	$greeting = "Salute the Sun! It's rising JUST for you!";
} else if ( $theHour >= 12 && $theHour <= 18 ) {
	$greeting = "Feeling like a nap? It must be the afternoon.";
} else if ( $theHour >= 19 || $theHour <= 2 ) {
	$greeting = "My, you're working late! Go to sleep. It's night time!";
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CMS Portal Login</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300|Petit+Formal+Script" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dawning+of+a+New+Day" rel="stylesheet">
	<link rel="stylesheet" href="https://use.typekit.net/dzd4epv.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	<div class="triangle"></div>
	<!-- <div class="triangle2"></div> -->
	<div class="lipstick"></div>
	<div class="logo">
		<img src="images/logo_zou.svg" alt="Zou Lipstick logo">
		<h1>Your Monthly Lipstick Subscription</h1>
	</div>

	<div class="side-bar">
	
		<h1>Oh Hey, <?php echo $_SESSION['user_name'];?></h1>

		<!-- <h2>Looking great today!</h2> -->
		<h3><?php echo $greeting; ?></h3>
		<h3><?php echo "The time is " . date("h:ia");?></h3>
		<h3>Last Login:<br><?php echo date_create($_SESSION['user_lastlog'])->format('F d, Y  g:ia'); ?> </h3>
		
	</div>
		
</body>
</html>