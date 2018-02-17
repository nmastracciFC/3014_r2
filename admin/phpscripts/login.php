<?php
 function logIn($username, $password, $ip) {
 	require_once('connect.php');
 	$username = mysqli_real_escape_string($link, $username);//this is sanitzation, changes everything to literals
 	$password = mysqli_real_escape_string($link, $password);

 	$loginuser = "SELECT * FROM tbl_user WHERE user_name = '{$username}'";
 	$loginpass = "SELECT * FROM tbl_user WHERE user_pass = '{$password}'";
 	// echo $loginstring;
 	$user_set = mysqli_query($link, $loginuser);
 	$user_set2 = mysqli_query($link, $loginpass);

 	if(mysqli_num_rows($user_set)){
 		//this works as a boolean
 		$found_user = mysqli_fetch_array($user_set,MYSQLI_ASSOC);
 		$id = $found_user['user_id'];//now you have access to the users ID

 		if($password == $found_user['user_pass'] && ($found_user['user_attempts'] < 3)){
 			$_SESSION['user_id'] = $id; //label user_id equals the variable id
 		$_SESSION['user_name'] = $found_user['user_fname'];
 		$_SESSION['user_lastlog'] = $found_user['user_lastlog'];

 		if($user_set && $user_set2){
 			//if they've successfully logged in then update their ip address in the db
 			$updatestring = "UPDATE tbl_user SET user_ip = '$ip' WHERE user_id = {$id}";
 			$updateLastLogin = "UPDATE tbl_user SET user_lastlog = NOW() WHERE user_id = {$id}";
 			$updateAttempts = "UPDATE tbl_user SET user_attempts = 0 WHERE user_id = {$id}";
 			$updatequery = mysqli_query($link, $updatestring);
 			$updatequery2 = mysqli_query($link, $updateLastLogin);
 			$updatequery3 = mysqli_query($link, $updateAttempts);
 			
 			
 		}
 		redirect_to('admin_index.php');

 	} else if ($found_user['user_attempts'] < 3 ) {
 		$attempts = $found_user['user_attempts'] + 1;
 		$attemptQuery = "UPDATE tbl_user SET user_attempts = {$attempts} WHERE user_id = {$id} ";
 		$updateAttempts = mysqli_query($link, $attemptQuery);
 		$message = "Failed Login Attempt -- You only have three.";
 		return $message;
 	}else{
 		return "You are now Locked out--Sorry Dude.";
 	}


 	} else {
 		
 		$message = "Username or password is incorrect";
 		return $message;
 	}


 	mysqli_close($link);
 }



?>