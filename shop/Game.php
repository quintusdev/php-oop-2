<?php
    class Game extends Product{
        public $caption;
        public $dimensions;

        function __construct($image, $description, $type, $price, $caption, $dimensions){
            parent::__construct($image, $description, $type, $price);
            $this->caption = $caption;
            $this->dimensions = $dimensions;
        }

        public function getGame() {
            return 
                $this->caption = $caption;
                $this->dimensions =$dimensions;
        }
    }
?>