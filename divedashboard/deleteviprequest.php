<?php

include_once "../class/db.php";


if(isset($_GET['id'])){
    
    $vipid = $_GET['id'];

    $query1 = "SELECT * FROM vip_data_buyer WHERE id = '$vipid'";

    $the_query = mysqli_query($conn, $query1);

    $rowm = mysqli_fetch_array($the_query);

    $query = "DELETE FROM vip_data_buyer WHERE id = '$vipid' ";
    $delete_query = mysqli_query($conn, $query);

    header("Location: all_vip_request.php");
    exit;
    
}


?>