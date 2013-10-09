<?php
	//Variables for connecting to your database.
	//These variable values come from your hosting account.
/*
	$hostname = "localhost";
	$username = "sam926";
	$password = "4yar+501n0G";
	$dbname = "sam926";
*/

	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sam926";


//Connecting to your database
            mysql_connect($hostname, $username, $password) OR DIE ("Unable to
            connect to database! Please try again later.");
            mysql_select_db($dbname);

?>