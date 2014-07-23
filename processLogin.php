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
$users = mysql_real_escape_string("Users");
$query = "CREATE TABLE IF NOT EXISTS my_db.".$users." (
    Username CHAR(20) NOT NULL,
    JobTitle CHAR(20),
    Expertise VARCHAR(1000),
    Skills VARCHAR(1000),
    Interests VARCHAR(1000),
    PRIMARY KEY(Username))";
if(!mysqli_query($link,$query)){
	echo "error creating table";
}

$username = mysql_real_escape_string($_POST['username_input']);
$result = mysqli_query($link,"SELECT * FROM my_db.Users WHERE Username = '".$username."'");
if (mysql_num_rows($result) == 0)
{
    $insertuser = "INSERT IGNORE INTO my_db.Users (Username) VALUES ('$username')";
}
// echo "test after row creation";
if (!mysqli_query($link,$insertuser)){
	echo "row not created successfully";
}
// echo "got here";
 $number_of_days = 30 ;
 $date_of_expiry = time() + 60 * 60 * 24 * $number_of_days ;
 setcookie("username",$username,$date_of_expiry);
// if (mysqli_query($link,$query)) {
//   echo "Table persons created successfully";
// } else {
//   echo "Error creating table: " . mysqli_error($link);
// }

header('Location: /AskIT/homeScreen.php');

?>


