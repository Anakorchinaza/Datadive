<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "datadive";

    // $servername = "localhost";
    // $username = "daggrega_datadive";
    // $password = "?Ztqp9!NVzW,";
    // $db = "daggrega_datadive";
  

    $conn = mysqli_connect($servername, $username, $password, $db);

    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

   include_once "class/common.php";
   $obj = new Common();

    $fname = $obj->sanitizeInput($fname);
    $lname = $obj->sanitizeInput($lname);
    $email = $obj->sanitizeInput($email);
    $phone = $obj->sanitizeInput($phone);
    $message = $obj->sanitizeInput($message);

   
    $fname = mysqli_real_escape_string($conn, $fname);
    $lname = mysqli_real_escape_string($conn, $lname);
    $email = mysqli_real_escape_string($conn, $email);
    $phone = mysqli_real_escape_string($conn, $phone);
    $message = mysqli_real_escape_string($conn, $message);

    
	$whsql = "INSERT into contactus (fname, lname, email, phoneno, message) VALUES ('$fname','$lname','$email','$phone','$message')";
     
	$re = mysqli_query($conn,$whsql);

    if($re) {
        echo "Your Request is submitted!";
        } else {
        // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "Your request is not submitted! Check your Input";
    }

?>