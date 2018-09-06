<?php require_once("../resources/config.php");
//CHeck connection
if(!$conn) {
  die("Connection failed: " .mysqli_connect_error());
} else {
 $username = $_POST['signin_username'];
 $Email = $_POST['signin_email'];
 $Password = password_hash($_POST['signin_password'], PASSWORD_DEFAULT);
  
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
//     echo "<p> Successfully added new record</p>";
    header("Location:/public/signin.php");
  }

//if successful query operation
//close the database connection
mysqli_close($conn);

?>