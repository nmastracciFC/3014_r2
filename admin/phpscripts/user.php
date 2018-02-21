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
			redirect_to("admin_index.php");

		} else {
			echo $userString;
			$message = "There was a problem setting up that user. Reconsider your life.";
			return $message;
		}

		mysqli_close($link);
	}





 ?>