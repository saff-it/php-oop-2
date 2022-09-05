<?php 
    

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

        public function getWeight(){
            return $this->weight;
        }

        public function setWeight($_weight){
            $this->weight = $_weight;
        }
    }

    $foodOne = new Food('Bastoncino di Pollo', '5€', 'Purina', 'dog', '11/10/2030', '25gr');
    var_dump($foodOne);

?>