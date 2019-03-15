<?php
// four variables to connect to database
		$host = "capstone-s19-61.cckf8xyuf0tb.us-east-2.rds.amazonaws.com";
		$username = "admin";
		$user_pass = "capstone";
		$database_in_use = "AdmittedGuests";

		//create database connection instance
		$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
?>