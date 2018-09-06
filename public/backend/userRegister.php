<?php

  $server = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "binaryWorldDB";
    $conn = mysqli_connect($server,$dbuser,$dbpass,$db) or die("Cannot connect to database.");

//CHeck connection
if(!$conn) {
  die("Connection failed: " .mysqli_connect_error());
} else {
 $username = $_POST['usrname'];
 $Email = $_POST['email'];
 $Password = password_hash($_POST['psrd'], PASSWORD_DEFAULT);
  
}
//  Insert data into DB
  $query = "INSERT INTO usertbl (username, password, email) VALUES
  ('".$username."', '".$Password."', '".$Email."')";
  echo $query;
  $result = mysqli_query($conn, $query);
 
    
  //checks if the execution was successful
  if(!$result) {
    echo "<p> Something is wrong with " .$query. "</p>";
  } else {
    echo "<p> Successfully added new record</p>";
  }

//if successful query operation
//close the database connection
mysqli_close($conn);

?>