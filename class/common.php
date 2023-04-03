<?php
//include constant
    include_once "constant.php";

    //class definition
    class Common{
        //member variables
        var $mycon;


        //member functions
        function __construct(){
            //connect to database
            $this->mycon = new MySQLi(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);
            //check for error
            if($this->mycon->connect_error){
                die('Connection Failed: '.$this->mycon->connect_error);
            }
        }


        #begin sanitize inputs method
        function sanitizeInput($data){
            $data = trim($data);
            $data = strip_tags($data);
            $data = htmlspecialchars($data);
            $data = addslashes($data);
    
            return $data;
        }

        #end sanitize inputs method



    }


?>