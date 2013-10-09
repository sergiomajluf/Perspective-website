<?php


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
