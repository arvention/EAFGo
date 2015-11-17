<?php
    class user
    {
        // property declaration
        private $userID;
        private $idNumber;
        private $password;
        private $lastName;
        private $firstName;
        private $middleName;
        private $userTypeID;
        private $collegeID;
        private $programID;
        private $flowchartID;
        
        // constructor
        public function _construct($userID, $idNumber, $password, $lastName, $firstName, $middleName, $userTypeID,
                                    $collegeID, $programID, $flowchartID){
            
            $this->userID = $userID;
            $this->idNumber = $idNumber;
            $this->password = $password;
            $this->lastName = $lastName;
            $this->firstName = $firstName;
            $this->middleName = $middleName;
            $this->userTypeID = $userTypeID;
            $this->collegeID = $collegeID;
            $this->programID = $programID;
            $this->flowchartID = $flowchartID;
        }
        
        // method declaration
        public function getUserID(){
            return $this->userID;
        }
        
        public function setUserID($userID){
            $this->userID = $userID;
        }
        
        public function getIDNumber(){
            return $this->idNumber;
        }
        
        public function setIDNumber($idNumber){
            $this->idNumber = $idNumber;
        }
        
        public function getPassword(){
            return $this->password;
        }
        
        public function setPassword($password){
            $this->password = $password;
        }
        
        public function getLastName(){
            return $this->lastName;
        }
        
        public function setLastName($lastName){
            $this->lastName = $lastName;
        }
        
        public function getFirstName(){
            return $this->firstName;
        }
        
        public function setFirstName($firstName){
            $this->firstName = $firstName;
        }
        
        public function getMiddleName(){
            return $this->middleName;
        }
        
        public function setMiddleName($middleName){
            $this->middleName = $middleName;
        }
        
        public function getUserTypeID(){
            return $this->userTypeID;
        }
        
        public function setUserTypeID($userTypeID){
            $this->userTypeID = $userTypeID;
        }
        
        public function getCollegeID(){
            return $this->collegeID;
        }
        
        public function setCollegeID($collegeID){
            $this->collegeID = $collegeID;
        }
        
        public function getProgramID(){
            return $this->programID;
        }
        
        public function setProgramID($programID){
            $this->programID = $programID;
        }
        
        public function getFlowchartID(){
            return $this->flowchartID;
        }
        
        public function setFlowchartID($flowhchartID){
            $this->flowchartID = $flowhchartID;
        }
    }