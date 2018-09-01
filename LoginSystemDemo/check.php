  <?php

  include_once("db_connect.php");

  $pwd = $_POST['psrd'];
  $email = $_POST['email'];

  $sql = "SELECT password,fname FROM register WHERE email ='" .$email."' LIMIT 1";
  $result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
  // output data of each row
  $row = mysqli_fetch_array($result);
  if(password_verify($pwd, $row["password"])) {
    echo '<h2>Welcome ' .$row['fname']. ', your password is valid!</h2>';
    echo $pwd;
  }else {
    echo 'Invalid password';
  }
  
}

?>