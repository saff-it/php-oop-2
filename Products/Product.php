<?php 
    include_once __DIR__ . '/TypeOfProducts/AnimalFood.php';
    include_once __DIR__ . '/TypeOfProducts/AnimalToy.php';
    include_once __DIR__ . '/TypeOfProducts/AnimalLeash.php';


    class Product{
        protected $name;
        protected $price;
        protected $brand;
        protected $kindOfAnimal;

        function __construct($_name, $_price, $_brand, $_kindOfAnimal){
           $this->name = $_name; 
           $this->price = $_price; 
           $this->brand = $_brand; 
           $this->kindOfAnimal = $_kindOfAnimal; 
        }

        public function getName(){
            return $this->name;
        }

        public function setName($_name){
            $this->name = $_name;
        }

        public function getPrice(){
            return $this->price;
        }

        public function setPrice($_price){
            $this->price = $_price;
        }

        public function getBrand(){
            return $this->brand;
        }

        public function setBrand($brand){
            $this->brand = $brand;
        }

        public function getkindOfAnimal(){
            return $this->kindOfAnimal;
        }

        public function setkindOfAnimal($_kindOfAnimal){
            $this->kindOfAnimal = $_kindOfAnimal;
        }

    }

?>