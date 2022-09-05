<?php 
    

    class Food extends Product{
        protected $shape;
        protected $color;
        protected $isWithSound;

        function __construct($_name, $_price, $_brand, $_kindOfAnimal, $_shape, $_color, $_isWithSound){

            parent::__construct($_name, $_price, $_brand, $_kindOfAnimal);
            $this->shape = $_shape;
            $this->color = $_color;
            $this->isWithSound = $_isWithSound;
        }

        public function getShape(){
            return $this->shape;
        }

        public function setShape($_shape){
            $this->shape = $_shape;
        }

        public function getColor(){
            return $this->color;
        }

        public function setColor($_color){
            $this->color = $_color;
        }

        public function getIsWithSound(){
            return $this->isWithSound;
        }

        public function setIsWithSound($_isWithSound){
            $this->isWithSound = $_isWithSound;
        }
    }

?>