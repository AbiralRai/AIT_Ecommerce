<?php

  include_once("db_connect.php");

//CHeck connection
if(!$conn) {
  die("Connection failed: " .mysqli_connect_error());
} else {
 $FirstName = $_POST['fname'];
 $LastName = $_POST['lname'];
 $Email = $_POST['email'];
 $Addr1 = $_POST['address1'];
 $Addr2 = $_POST['address2'];
 $Password = password_hash($_POST['pswd'], PASSWORD_DEFAULT);
  
}
//  Insert data into DB
  $query = "INSERT INTO register(fname, lname, email, address1, address2, password) VALUES
  ('".$FirstName."', '".$LastName."', '".$Email."', '".$Addr1."', '".$Addr2."', '".$Password."')";
  echo $query;
  $result = mysqli_query($conn, $query);

Update 'email' 
 
    
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