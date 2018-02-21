<?php

date_default_timezone_set("America/New_York");

$theHour = date('G');

if ( $theHour >= 3 && $theHour <= 11 ) {
	$greetingPlain = "Good Morning";
	$greeting = "Salute the Sun! It's rising JUST for you!";
} else if ( $theHour >= 12 && $theHour <= 18 ) {
	$greetingPlain = "Good Afternoon";
	$greeting = "Feeling like a nap? It must be the afternoon.";
} else if ( $theHour >= 19 || $theHour <= 2 ) {
	$greetingPlain = "Good Evening";
	$greeting = "My, you're working late! Go to sleep. It's night time!";
};







?>