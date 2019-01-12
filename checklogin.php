

<?php

include("db.php");

$email = $_POST['email'];
$password = $_POST['password'];

$email = stripcslashes($email);
$password = stripcslashes($password);
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);

/*
mysql_connect("localhost", "root", "");
mysql_select_db("pink");

$result = mysql_query("select * from login where email = '$email' and password = '$password'")
  
   or die("Failed to query database ".mysql_error());
    $row = mysql_fetch_array($result); 
*/
    $sql = "select * from login where email = '$email' and password = '$password'";
    $result  = mysqli_query($con,$sql);
  
   $row = mysqli_fetch_array($result);
   if ($row['email'] == $email && $row['password'] == $password ) {
 header("location:admin.php");
   }
   else {
   	echo "Failed to login";
   }
?>