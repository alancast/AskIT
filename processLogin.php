<?php



// Create connection
$link=mysqli_connect("localhost","root","root");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//Create database if it doesn't already exist
$db="CREATE DATABASE IF NOT EXISTS my_db";
mysqli_query($link,$db);
// if(mysqli_query($link,$db)) {
//   echo "Database my_db created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($link);
// }
//Create Table for user if it doesn't already exist
$name = mysql_real_escape_string($_POST['username_input']);
$query = "CREATE TABLE IF NOT EXISTS my_db.".$name." (
    PID INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(PID),
    username CHAR(50),
    JobTitle CHAR(50),
    Expertise VARCHAR(1000),
    Skills VARCHAR(1000),
    Interests VARCHAR(1000))";
mysqli_query($link,$query);
// $number_of_days = 30 ;
// $date_of_expiry = time() + 60 * 60 * 24 * $number_of_days ;
// setcookie("username",$name,$date_of_expiry);
// if (mysqli_query($link,$query)) {
//   echo "Table persons created successfully";
// } else {
//   echo "Error creating table: " . mysqli_error($link);
// }

header('Location: /homeScreen.html');

?>


