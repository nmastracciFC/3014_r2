<?php
//mac error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once('phpscripts/config.php');

//for testing purposes below is commented but this should be uncommented in real life so people don't have access
confirm_logged_in();

// if($newPassword === $newPasswordConfirm && isset($_POST['submit'])) {
// 	$newPassword = trim($_POST['newPassword']);
	
// //people may miss the user level so if its empty give people an error message
// 	if(empty($newPasswordConfirm)) {
// 		$message = "please confirm passwords";
// 	} else {
// 		$result = updatePass($newPassword);
// 		$message = $result;
// 	}
// }

if(isset($_POST['submit'])) {
	$oldPassword = trim($_POST['oldPassword']);
	$newPassword = trim($_POST['newPassword']);
	$newPasswordConfirm = trim($_POST['newPasswordConfirm']);
	$id = $_SESSION['user_id'];
	if(empty($newPasswordConfirm)) {
		$message = "please confirm passwords";
	} else {
		if(strcmp($newPassword, $newPasswordConfirm) == 0) {
			$result = updatePass($id, $newPassword);
			$message = $result;
		} else {
			$message = "new passwords do not match";
		
		}

		// echo $newPassword.$newPasswordConfirm;
	}

}


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
		<h1><?php echo $greetingPlain; ?>, <?php echo $_SESSION['user_fname'];?></h1>

		<!-- <h2>Looking great today!</h2> -->
		<h3><?php echo $greeting; ?></h3>
		<h3><?php echo "The time is " . date("h:ia");?></h3>
		<h3>Last Login:<br><?php echo date_create($_SESSION['user_lastlog'])->format('F d, Y  g:ia'); ?> </h3>
		<h3 class="dash-link"><a href="admin_index.php">Back To Dashboard</a></h3>
		
	</div>
	
	<div class="addUser">
	<h1>Your Profile</h1>
		
			<h3>Username: <?php echo $_SESSION['user_usrn'];?></h3>
			<h3>Change Password: </h3>
		<?php if(!empty($message)) {echo $message;} ?>
	<!-- action says run on this page -->
	<form action="admin_profile.php" method="post">
		<label>Old Password: </label>
		<input type="text" name="oldPassword"  ><br>

		<label>New Password: </label>
		<input type="text" name="newPassword"><br>

		<label>Confirm New Password: </label>
		<input type="text" name="newPasswordConfirm"><br>

		<input type="submit" name="submit" value="Change Password" ><br>

	</form>
	</div>
	


	
</body>
</html>