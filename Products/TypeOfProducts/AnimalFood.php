<?php 
    include_once __DIR__ . './AnimalProduct.php';

    class Food extends AnimalProduct{
        protected $expiryDate;
        protected $weight;

        function __construct($_name, $_price, $_brand, $_kindOfAnimal, $_expiryDate, $_weight){

            parent::__construct($_name, $_price, $_brand, $_kindOfAnimal);
            $this->expirydate = $_expiryDate;
            $this->weight = $_weight;
        }
    }



?>