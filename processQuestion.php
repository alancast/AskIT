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
//Create Table for question if it doesn't already exist
$name = mysql_real_escape_string("Questions");
$query = "CREATE TABLE IF NOT EXISTS my_db.".$name." (
    QID INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(QID),
    Question VARCHAR(5000) NOT NULL,
    Description VARCHAR(5000) NOT NULL,
    Username CHAR(20) NOT NULL,
    Up INT NOT NULL,
    Time TIMESTAMP,
    Tags VARCHAR(5000),
    FOREIGN KEY (Username) REFERENCES Users(Username))";
mysqli_query($link,$query);

// escape variables for security
$question = mysqli_real_escape_string($link, $_POST['questionBox']);
$description = mysqli_real_escape_string($link, $_POST['descriptionBox']);
if(is_null($description))
{
    $description = "";
}
$tags = mysqli_real_escape_string($link, $_POST['tagBox']);
$username = mysqli_real_escape_string($link, $_COOKIE['username']);


$sql= "INSERT INTO my_db.Questions (Question, Description, Tags, Username, Up)
VALUES ('$question', '$description', '$tags', '$username', 0)";
// if (mysqli_query($link,$query)) {
//   echo "Table persons created successfully";
// } else {
//   echo "Error creating table: " . mysqli_error($link);
// }
if (!mysqli_query($link,$sql)) {
  die('Error: ' . mysqli_error($sql));
}


mysqli_close($link);

header('Location: /AskIT/homeScreen.php');

?>


