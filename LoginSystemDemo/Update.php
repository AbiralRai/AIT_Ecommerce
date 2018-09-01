<?php

include_once("db_connect.php");

//CHeck connection
if(!$conn) {
  die("Connection failed: " .mysqli_connect_error());
} else {
  $firstName = $_POST['fname'];
  $Email = $_POST['email'];
    
    $sqlUpdate = "UPDATE register
      SET email ='" .$Email.
      "'WHERE fname = '".$firstName."'";
  
  if(mysqli_query($conn, $sqlUpdate)) {
    echo "Record updated successfully";
  }
  else{
    echo "Erroe updating record: " .mysqli_error($conn);
  }
}

mysqli_close($conn);

?>