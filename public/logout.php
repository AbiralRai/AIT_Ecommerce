<?php
	$server = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "binaryWorldDB";
    $conn = mysqli_connect($server,$dbuser,$dbpass,$db) or die("Cannot connect to database.");
	  session_start();
	session_unset();
	session_destroy();
	header("Location:../public/signin.php");
?>