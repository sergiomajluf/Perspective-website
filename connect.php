<?php
	//Variables for connecting to your database.
	//These variable values come from your hosting account.
/*
	$hostname = "localhost";
	$username = "sam926";
	$password = "4yar+501n0G";
	$dbname = "sam926";
*/

/*
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sam926";
*/

// START Heroku ClearDB

    $url=parse_url(getenv("CLEARDB_DATABASE_URL"));

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"],1);

    mysql_connect($server, $username, $password);
            
    
    mysql_select_db($db);

// END Heroku ClearDB

//Connecting to your database
            mysql_connect($hostname, $username, $password) OR DIE ("Unable to
            connect to database! Please try again later.");
            mysql_select_db($dbname);

?>