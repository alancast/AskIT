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
    Asked CHAR(50),
    Answered CHAR(50),
    Subscribed CHAR(20))";
mysqli_query($link,$query);
// if (mysqli_query($link,$query)) {
//   echo "Table persons created successfully";
// } else {
//   echo "Error creating table: " . mysqli_error($link);
// }

header('Location: /homeScreen.php');

?>


