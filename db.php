<?php

// Open the base (construct the object):

$server="localhost";
$user="root";
$pass="";
$base="pink";

$con = mysqli_connect($server, $user, $pass, $base );

if($con)
{
	echo "";
}
	else{
		die("connection failed " .mysqli_connect_error());
	}


?>