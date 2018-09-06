<?php
    $server = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "binaryWorldDB";
    $conn = mysqli_connect($server,$dbuser,$dbpass,$db) or die("Cannot connect to database.");
?>