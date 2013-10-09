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
/* CLEARDB_DATABASE_URL:
mysql://bdd9f73a568ce5:cd853728@us-cdbr-east-04.cleardb.com/heroku_c24ea4173f749b2?reconnect=true
*/

    $url=parse_url(getenv("CLEARDB_DATABASE_URL"));

    $server = $url["us-cdbr-east-04.cleardb.com"];
    $username = $url["bdd9f73a568ce5"];
    $password = $url["cd853728"];
    $db = substr($url["heroku_c24ea4173f749b2"],1);

    mysql_connect($server, $username, $password);
            
    
    mysql_select_db($db);

// END Heroku ClearDB

//Connecting to your database
            mysql_connect($hostname, $username, $password) OR DIE ("Unable to
            connect to database! Please try again later.");
            mysql_select_db($dbname);

?>
