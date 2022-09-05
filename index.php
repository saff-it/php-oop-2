<?php 

    class Product{
        protected $name;
        protected $price;
        protected $brand;
        protected $kindOfAnimal;

        function __construct($_name, $_price, $_brand, $_kindOfAnimal){
            
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop 2</title>
</head>
<body>
    
</body>
</html>