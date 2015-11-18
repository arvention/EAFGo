<?php

    include('user.php');
    
    class database
    {
        // property declaration
        private $conn;
        
        // constructor
        public function _construct(){
            $dbServerName = "localhost:3306";
            $dbUsername = "root";
            $dbPassword = "password";
            $dbName = "eafgo";
            
            // Create connection
            $this->conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);
            
            // Check connection
            if ($this->conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);  
            } 
        }
        
        // method declaration
        public function checkLogin($id, $password){       
            
            $statement = "SELECT * from user where idNumber = $id AND password = $password ;";
            $result = $this->conn->query($statement);
            //$num_row = mysqli_num_rows($result);
            if ($result != false) {
                $row = $result->fetch_assoc();
                $user = new user();
                
                $user->_construct($row["userID"], $row["idNumber"], $row["password"], $row["lastName"], $row["firstName"], 
                    $row["middleName"], $row["userTypeID"], $row["collegeID"], $row["programID"], $row["flowchartID"]);
                return $user;
            } else {
                return false;
            }
            //$this->conn->close();
        }
    }
