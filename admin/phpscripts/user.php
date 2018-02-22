<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

	function createUser($fname, $username, $password, $email, $userlvl) {
		include('connect.php');
		//should run the mysqli_real_escape_string here.. this should all be cleaned and escaped so no quotes happen

		//very important that this is stated correctly
		//null means do whatever it is you want to do on your end mysql
		$userString = "INSERT INTO tbl_user VALUES(NULL, '{$fname}', '{$username}','{$password}', '{$email}', NULL, 0, NULL, '{$userlvl}', NULL)"; 
		// echo $userString;
		$userQuery = mysqli_query($link, $userString);
		if($userQuery) {
			$sendMail = sendMessage($email, $fname, $username, $password);
			// redirect_to("admin_index.php");

		} else {
			$message = "There was a problem setting up that user. Reconsider your life.";
			return $message;
		}

		mysqli_close($link);
	}




function sendMessage($email, $fname, $username, $password) {
	$to = $email; 
	$subj = "ZOU: Your Login info"; 
	// $extra = "Reply-To: ".$email; 
	$msg = "Oh Hey, ".$fname."\n\nYour ZOU consultant has created an account to get you started on your lipstick journey with us. Please make sure to login and change your password.\n\nHere are your credentials:\n\nUsername: ".$username."\n\nPassword: ".$password."\n\n Thank you for your business  " ;
	
	mail($to, $subj, $msg); 
	// $direct = $direct."?name={$name}";
	// echo $msg;
	redirect_to("admin_index.php");
}


function updatePass($newPassword) {
		include('connect.php');
		//should run the mysqli_real_escape_string here.. this should all be cleaned and escaped so no quotes happen

		//very important that this is stated correctly
		//null means do whatever it is you want to do on your end mysql
		$userString = "UPDATE tbl_user VALUES(NULL, '{$fname}', '{$username}','{$password}', '{$email}', NULL, 0, NULL, '{$userlvl}', NULL)"; 
		// echo $userString;
		$userQuery = mysqli_query($link, $userString);
		if($userQuery) {
			$sendMail = sendMessage($email, $fname, $username, $password);
			// redirect_to("admin_index.php");

		} else {
			$message = "There was a problem setting up that user. Reconsider your life.";
			return $message;
		}

		mysqli_close($link);
	}




 ?>