<?php 
    include_once __DIR__ . '/TypeOfUsers/Registered.php';
    include_once __DIR__ . '/TypeOfUsers/Unregistered.php';
  

    class User{
        protected $name;
        protected $mail;
        protected $address;

        function __construct($_name, $_mail, $_address){
           $this->name = $_name; 
           $this->mail = $_mail; 
           $this->address = $_address; 

        }

        public function getName(){
            return $this->name;
        }

        public function setName($_name){
            $this->name = $_name;
        }

        public function getMail(){
            return $this->mail;
        }

        public function setMail($_mail){
            $this->mail = $_mail;
        }

        public function getAddress(){
            return $this->address;
        }

        public function setAddress($address){
            $this->address = $address;
        }

    }

?>