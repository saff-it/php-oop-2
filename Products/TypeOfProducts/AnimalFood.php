<?php 
    include_once __DIR__ . '../Product.php';

    class Food extends Product{
        protected $expiryDate;
        protected $weight;

        function __construct($_name, $_price, $_brand, $_kindOfAnimal, $_expiryDate, $_weight){

            parent::__construct($_name, $_price, $_brand, $_kindOfAnimal);
            $this->expirydate = $_expiryDate;
            $this->weight = $_weight;
        }

        public function getExpiryDate(){
            return $this->expiryDate;
        }

        public function setExpiryDate($_expiryDate){
            $this->expiryDate = $_expiryDate;
        }

        public function getweight(){
            return $this->weight;
        }

        public function setweight($_weight){
            $this->weight = $_weight;
        }
    }



?>