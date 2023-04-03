<?php
    include_once "constant";
    //class definition
    class Data{
        //memeber variable
        var $mycon;
        //member Functions

        function __construct(){
            //connect to database
            $this->mycon = new MySQLi(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);
            //check for error
            if($this->mycon->connect_error){
                die('Connection Failed: '.$this->mycon->connect_error);
            }
        }

        #begin insertUsrs method
        function insertUsers($firstname, $lastname, $email, $phonenumber, $pswd,){
            //encrypt password
            $password = md5($pswd);
            // prepare statement
            $stmt = $this->mycon->prepare("INSERT INTO users(fname, lname, email, phoneno, password) VALUE(?,?,?,?,?)");

            //bind all parameters
            $stmt->bind_param("sssss", $firstname, $lastname, $email, $phonenumber, $password);

            //execute
            $stmt->execute();

            if ($stmt->error) {
               $result = "Oops! Something happened ". $stmt->error;//$stmt->error will be remove be4 redeploying your app
            }else{
                $result = "Success";
            }

            return $result;
        }

    #end insertUsers method


     #begin login Method
     function login($email, $password){
        //prepare statement
        $statement = $this->mycon->prepare("SELECT * FROM students WHERE emailaddress=?");

        //bind parameter
        $statement->bind_param("s", $email);

        //execute
        $statement->execute();

        //result set
        $result = $statement->get_result();

        //fetch the data from result set
        if($result->num_rows == 1){
            //record exist
            $row = $result->fetch_assoc();
            //verify password
            if (password_verify($password, $row['password'])) {
               //password match, then create session variables
            
               session_start();

               $_SESSION['std_id'] = $row['student_id'];
               $_SESSION['mylastname'] = $row['lastname'];
               $_SESSION['myfirstname'] = $row['firstname'];
               $_SESSION['myemail'] = $row['emailaddress'];
               $_SESSION['logger'] = "RUBY";
               $_SESSION['profilephoto'] = $row['profilephoto'];
               
                return true;
            }else {
                //password does not match
                return false;
            }
        }else{
            //email doesn't exist
            return false;
        }
    }
    #end login method


    #begin of users method
    function Users($fname, $lname, $email, $phoneno, $pswd,$plan,$price,$status,$expired_at){
       
        //process file upload
        $filename = $_FILES['doc']['name'];
        $file_tmp_name = $_FILES['doc']['tmp_name'];
        $destination = "request_doc/$filename";

        if (move_uploaded_file($file_tmp_name, $destination)) {
            #add record into product table
            $password = md5($pswd);
            //prepare statement
            $stmt = $this->mycon->prepare("INSERT INTO users(fname, lname, email, phoneno, password,plan,price,status,expired_at) 
            VALUES(?,?,?,?,?,?,?,?,?)");
           
            //bind parameters
            $stmt->bind_param("ssssssdid", $fname, $lname, $email, $phoneno, $password,$plan,$price,$status,$expired_at);
           
            //execute
            $stmt->execute();

            if ($stmt->affected_rows == 1) {
                #record was successfully inserted--you can check for errors too as done in phoenix/students.php
                return "success";
            }else{
                return "Oops! something went wrong ".$stmt->error;
            }
        }else {
            return "Oops! something happened";
        }
    }
    #end of users method





    }

?>