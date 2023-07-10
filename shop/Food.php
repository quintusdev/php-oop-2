<?php
    class Food extends Product{
        public $weight;
        public $ingredient;

        function __construct($image, $description, $type, $price, $weight, $ingredient){
            parent::__construct($image, $description, $type, $price);
            $this->weight = $weight;
            $this->ingredient = $ingredient;
        }
        
        public function getFood() {
            return 
                $this->weight = $weight;
                $this->ingredient =$ingredient;
        }
    }
?>