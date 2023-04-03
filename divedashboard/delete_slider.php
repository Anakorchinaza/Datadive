<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "datadive";

// $servername = "localhost";
// $username = "daggrega_datadive";
// $password = "?Ztqp9!NVzW,";
// $db = "daggrega_datadive";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  
}


if(isset($_GET['id'])){
    
    $the_slider_id = $_GET['id'];

    $the_image = "SELECT * FROM slider WHERE id = '$the_slider_id'";

    $the_query = mysqli_query($conn,$the_image);

    $rowm = mysqli_fetch_array($the_query);

    $file_path = $rowm['images'];

    if(file_exists($file_path)){

        unlink($file_path);

        $query = "DELETE FROM slider WHERE id = '$the_slider_id' ";
        $delete_query = mysqli_query($conn, $query);

        header("Location: all_slider.php");
        exit;

    }

    
    
    
    
    
    
}


?>