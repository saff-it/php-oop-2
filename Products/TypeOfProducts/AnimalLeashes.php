<?php 
    include_once __DIR__ . '../Product.php';

    class Food extends Product{
        protected $lenght;
        protected $color;

        function __construct($_name, $_price, $_brand, $_kindOfAnimal, $_lenght, $_color){

            parent::__construct($_name, $_price, $_brand, $_kindOfAnimal);
            $this->lenght = $_lenght;
            $this->color = $_color;
        }

        public function getLenght(){
            return $this->lenght;
        }

        public function setLenght($_lenght){
            $this->lenght = $_lenght;
        }

        public function getColor(){
            return $this->color;
        }

        public function setColor($_color){
            $this->color = $_color;
        }

    
    }

?>