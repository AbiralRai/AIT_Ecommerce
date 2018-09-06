  <?php

    $server = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "binaryWorldDB";
    $conn = mysqli_connect($server,$dbuser,$dbpass,$db) or die("Cannot connect to database.");

  $pwd = $_POST['psrd'];
  $email = $_POST['email'];

  $sql = "SELECT password,username FROM usertbl WHERE email ='" .$email."' LIMIT 1";
  $result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
  // output data of each row
  $row = mysqli_fetch_array($result);
  if(password_verify($pwd, $row["password"])) {
    header("Location:index.php");
    // header("Location:#modalLRForm");
  }else {
    header("Location:product-page.php");
//     echo "$pwd";
//     echo "$email";
  }
  
}

?>