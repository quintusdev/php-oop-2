<?php
    class Game extends Product{
        public $caption;
        public $dimension;

        function __construct($image, $description, $type, $price, $caption, $dimension){
            parent::__construct($image, $description, $type, $price);
            $this->caption = $caption;
            $this->dimension = $dimension;
        }

        public function getGame() {
            return 
                $this->caption = $caption;
                $this->dimension =$dimension;
        }
    }
?>