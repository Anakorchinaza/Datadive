<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "datadive";

$servername = "localhost";
$username = "daggrega_datadive";
$password = "?Ztqp9!NVzW,";
$db = "daggrega_datadive";



// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  
}


if(isset($_GET['id'])){
    
    $theplan = $_GET['id'];

    $query1 = "SELECT * FROM plans WHERE id = '$theplan'";

    $the_query = mysqli_query($conn, $query1);

    $rowm = mysqli_fetch_array($the_query);

    $query = "DELETE FROM plans WHERE id = '$theplan' ";
    $delete_query = mysqli_query($conn, $query);

    header("Location: all_plan.php");
    exit;
    
}


?>