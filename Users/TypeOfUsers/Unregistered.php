<?php 
    class Unregistered extends User{
        protected $discount = 0;

        function __construct($_name, $_mail, $_address, $_discount){

            parent::__construct($_name, $_mail, $_address);
            $this->discount = $_discount;
        }

        public function getDiscount(){
            return $this->discount;
        }

        public function setDiscount($_discount){
            $this->discount = $_discount;
        }


    }

?>