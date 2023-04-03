<?php  
     $servername = "localhost";
     $username = "root";
     $password = "";
     $db = "datadive";
 
     // $servername = "localhost";
     // $username = "daggrega_datadive";
     // $password = "?Ztqp9!NVzW,";
     // $db = "daggrega_datadive"
 
     $conn = mysqli_connect($servername, $username, $password, $db);

     $id = $_POST['industryId'];
     

     $category = "SELECT * FROM category WHERE industry_id = $id";
     $category1 = mysqli_query($conn, $category);

     while ($row = mysqli_fetch_assoc($category1)) {
?>
        <option value="<?php echo $row['id'] ?>"><?php echo $row['category_name'] ?></option>
<?php
     }

    //  echo response()->json($category1);
     
    //  $theresult = mysqli_fetch_array($category1);

    //  echo $theresult['category_name'];
?>