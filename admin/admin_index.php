<?php
//mac error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once('phpscripts/config.php');
confirm_logged_in();
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
	<section class="dashboard">
		<div class="dashboard2">
		<h1>What Would You Like to Do?</h1>
		<a href="admin_createuser.php">Add A Subscriber</a>
		<a href="/admin_profile">See My Profile</a>
		<a href="phpscripts/caller.php?caller_id=logout">Sign Out</a>
		</div>
		
	</section>
		
</body>
</html>