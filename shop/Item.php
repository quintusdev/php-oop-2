<?php
    class Item extends Product{
        public $material;
        public $dimension;

        function __construct($image, $description, $type, $price, $material, $dimension){
            parent::__construct($image, $description, $type, $price);
            $this->material = $material;
            $this->dimension = $dimension;
        }

        public function getItem() {
            return 
                $this->material = $material;
                $this->dimesion =$dimension;
        }
    }
?>