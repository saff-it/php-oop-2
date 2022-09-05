<?php 
    class Registered extends User{
        protected $discountRegistered = 20;

        function __construct($_name, $_mail, $_address, $_discountRegistered){

            parent::__construct($_name, $_mail, $_address);
            $this->discountRegistered = $_discountRegistered;
        }

        public function getDiscountRegistered(){
            return $this->discountRegistered;
        }

        public function setiscountRegistered($_discountRegistered){
            $this->discountRegistered = $_discountRegistered;
        }


    }

    $userOne = new Registered('Marco', 'marco@gmail.com', 'Via Piero 4', '20');
    var_dump($userOne);

?>