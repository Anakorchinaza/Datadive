<?php

include_once "../class/db.php";



if(isset($_GET['id'])){
    
    $contactid = $_GET['id'];

    $query1 = "SELECT * FROM contactus WHERE id = '$contactid'";

    $the_query = mysqli_query($conn, $query1);

    $rowm = mysqli_fetch_array($the_query);

    $query = "DELETE FROM contactus WHERE id = '$contactid' ";
    $delete_query = mysqli_query($conn, $query);

    header("Location: all_contacts.php");
    exit;
    
}


?>