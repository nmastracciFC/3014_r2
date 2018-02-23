<?php
//mac error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once('phpscripts/config.php');

confirm_logged_in();


	$one = ['gently','slowly','closely','quickly','swiftly','sweetly','merrily','happily','joyfully','angrily'];
	$two = ['getting','taking','breaking','loving','having','being','seeing','looking','forgetting','jumping'];
	$three = ['wet','down','around','through', 'beside','nextto','afar','away','toward','betwixt', 'between'];
	$randomOne = array_rand(array_flip($one), 1);
	$randomTwo = array_rand(array_flip($two), 1);
	$randomThree = array_rand(array_flip($three), 1);

	$randomPassword = $randomOne.$randomTwo.$randomThree;


if(isset($_POST['submit'])) {
	$fname = trim($_POST['fname']);
	$username = trim($_POST['username']);
	$password = $randomPassword;
	$email = trim($_POST['email']);
	$userlvl = $_POST['userlvl'];
	if(empty($userlvl)) {
		$message = "please select a user level";
	} else {
		$result = createUser($fname, $username, $password, $email, $userlvl);
		$message = $result;
		
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
	<h1>Create a New Subscriber</h1>
	<?php if(!empty($message)) {echo $message;} ?>

	<form action="admin_createuser.php" method="post">
		<label>First Name: </label>
		<input type="text" name="fname" value="<?php if(!empty($fname)) {echo $fname;} ?>" ><br>

		<label>Username: </label>
		<input type="text" name="username" value="<?php if(!empty($username)) {echo $username;} ?>"><br>

		<label>Password will be randomly generated and emailed to user</label><br>

		<label>Email: </label>
		<input type="text" name="email" value="<?php if(!empty($email)) {echo $email;} ?>"><br>

		<label>User Level: </label>
		<select name="userlvl" >
			<option>Select a Level</option>
			<option value="3" >Designated Reseller</option>
			<option value="3" >Member</option>
			<option value="3" >Subscriber</option>
			<option value="2" >Web Admin</option>
			<option value="1" >Web Master</option>
		</select><br><br>

		<input type="submit" name="submit" value="Create User" ><br>

	</form>
	</div>
	


	
</body>
</html>