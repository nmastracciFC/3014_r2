<?php
//mac error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once('phpscripts/config.php');

//use the ip address(single and multiple) and if someone isn't targeting from this ip address then you can't have access to this informaiton.
$ip = $_SERVER['REMOTE_ADDR'];
// echo $ip;
if(isset($_POST['submit'])){
	$username = trim($_POST['username']);//trim method will check to make sure there is no whitespace
	$password = trim($_POST['password']);

	if($username !== "" && $password !== "") {;
		$result = logIn($username, $password, $ip);
		$message = $result;
	}else {
		$message = "Please fill in the required fields";
		
	}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Zou Lipstick Login</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300|Petit+Formal+Script" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dawning+of+a+New+Day" rel="stylesheet">
	<link rel="stylesheet" href="https://use.typekit.net/dzd4epv.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
</head>
<body>
	<div id="triangle"></div>
	<div class="logo">
		<img src="images/logo_zou.svg" alt="Zou Lipstick logo">
		<h1>Your Monthly Lipstick Subscription</h1>
	</div>

	<section id="loginForm">
		<div class="to-right">
		<h1 class="hidden">Zou Lipstick Login</h1>
		<h2>Hello Beautiful!</h2>
		<h3>Sign in to your account</h3>
		<?php if(!empty($message)){ echo $message;} ?>
			<form  action="admin_login.php" method="post">

				<label>Username: </label>
				<input type="text" name="username">
				<br>
				<label>Password: </label>
				<input type="text" name="password">
				<br>
				<input type="checkbox" name="checkbox" id="checkbox">
				<p class="fineprint">I agree to the <a href="">terms of service</a> laid out in the<br>attached document and hereby relinquish all<br>rights to the security of my personal information<br>and subsequent social media accounts.</p>
				<button id="button" type="submit" name="submit">LOGIN</button>
			</form>
			</div>
	</section>
</body>
</html>