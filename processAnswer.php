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
$name = mysql_real_escape_string("Answers");
$query = "CREATE TABLE IF NOT EXISTS my_db.".$name." (
    AID INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(AID),
    QID INT NOT NULL,
    Answer VARCHAR(5000) NOT NULL,
    Username CHAR(20) NOT NULL,
    Up INT NOT NULL,
    Time TIMESTAMP,
    FOREIGN KEY (QID) REFERENCES Questions(QID),
    FOREIGN KEY (Username) REFERENCES Users(Username))";
mysqli_query($link,$query);

// escape variables for security
$answer = mysqli_real_escape_string($link, $_POST['answerBox']);
$username = mysqli_real_escape_string($link, $_COOKIE['username']);


$sql= "INSERT INTO my_db.Answers (Answer, Username, Up, QID)
VALUES ('$answer', '$username', 0, ".$_POST['QID'].")";
if (!mysqli_query($link,$sql)) {
  die('Error: ' . mysqli_error($sql));
}


mysqli_close($link);

header('Location: /AskIT/homeScreen.php');

?>


