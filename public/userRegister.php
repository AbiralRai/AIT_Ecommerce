<?php require_once("../resources/config.php");
//CHeck connection
if(!$conn) {
  die("Connection failed: " .mysqli_connect_error());
} else {
 $username = $_POST['signin_username'];
 $Email = $_POST['signin_email'];
 $Password = password_hash($_POST['signin_password'], PASSWORD_DEFAULT);
  
}
  $CheckExistingUser_Query = "SELECT * FROM usertbl WHERE email = '$Email'";
  $query = "INSERT INTO usertbl (username, password, email) VALUES ('".$username."', '".$Password."', '".$Email."')";
  $CheckExistingUser = mysqli_query($conn, $CheckExistingUser_Query);
  if (mysqli_num_rows($CheckExistingUser) > 0)
  {
    session_start();
    $_SESSION["AlreadyExistedMessage"] = "Email already used. Please choose another email !!!";    
    header("Location:signup.php");
  } else { 
    $query1 = "SELECT * FROM usertbl WHERE email = '$Email'";   
    $result = mysqli_query($conn,$query);

    $result1 = mysqli_query($conn,$query1);
    $row = mysqli_fetch_assoc($result1);

    if ($row){
      session_start();
      $_SESSION["email"] = $row["email"];
      $_SESSION["fullname"] = $row["username"];
      header("Location:/public/index.php");
    } else {
      echo "Some error has occured!";
    }
  }
mysqli_close($conn);

?>