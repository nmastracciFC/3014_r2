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
	<div class="side-bar">
	
	<h1>Welcome <?php echo $_SESSION['user_name'];?></h1>


	<h2>You look beautiful today!</h2>
	
	<h2>Last Login: <?php echo date_create($_SESSION['user_lastlog'])->format('F d, Y  g:ia'); ?> </h2>
	<?php echo $greeting; ?> <?php date_default_timezone_set("America/New_York"); echo "The time is " . date("h:ia");?>
	</div>
		
</body>
</html>