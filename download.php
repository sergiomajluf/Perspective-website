<?php

//connect to the MySQL database so we can check, edit, or insert data to our users table
include "connect.php";

//include out functions file giving us access to the protect() function
include "functions.php";

//Check to see if the form has been submitted
if(isset($_POST['submit'])){

	//print_r($_POST);

	//protect and then add the posted data to variables
	$userEmail=protect($_POST['userEmail']);

	//check to see if any of the boxes were not filled in
	if(!$userEmail){
		//if any weren't display the error message
		//echo "<center>You need to fill in all of the required fields!</center>";

	} else {
		//if all were filled in continue
		//insert the row into the database
       
       $result = mysql_query("INSERT INTO users (userEmail) VALUES('".$userEmail."')");

		//display the success message
		//echo "Thank you for submitting your name!";
	}
}

	header( 'Location: https://github.com/shilpan/FBTimer/archive/master.zip' ) 
?>