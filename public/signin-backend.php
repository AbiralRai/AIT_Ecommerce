<?php require_once("../resources/config.php");

  $email = $_POST["signin_email"];
	$password = $_POST["signin_password"];$sql = "SELECT * FROM usertbl WHERE email ='" .$email."' LIMIT 1";
  $result = mysqli_query($conn, $sql);
  session_start();
if(mysqli_num_rows($result) > 0) {
  // output data of each row
  $row = mysqli_fetch_array($result);
  if(password_verify($password, $row["password"])) {
          $_SESSION["email"] = $row["email"];
          $_SESSION["fullname"] = $row["username"];
    header("Location:/public/index.php");
  }else {
		$_SESSION["email_err"] = "Your email is wrong.";
		$_SESSION["password_err"] = "Your password is wrong.";
    header ("Location:/public/signin.php");
    }
  }
?>