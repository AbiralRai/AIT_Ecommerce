<?php

  $db_host = 'localhost';
  $db_name = 'binaryworld';
  $db_user = 'root';
  $db_password = 'root';

  //Create connection
  // $conn = mysqli_connect($db_host,$db_user, $db_password, $db_name);

  if(!$conn) {
  die("Connection failed: " .mysqli_connect_error());
}
else {
  echo "Success";
}
?>