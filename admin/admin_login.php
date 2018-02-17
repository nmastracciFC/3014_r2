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
	<title>CMS Login</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
</head>
<body>
	<section id="loginPage">
		<div id="loginForm">
		<h1>Welcome To Your Login!</h1>
		<?php if(!empty($message)){ echo $message;} ?>
			<form  action="admin_login.php" method="post">

				<label>Username: </label>
				<input type="text" name="username">
				<br>
				<label>Password: </label>
				<input type="text" name="password">
				<br>
				<button id="button" type="submit" name="submit">LOGIN</button>
			</form>
		</div>
	</section>
</body>
</html>