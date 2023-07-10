<?php
    class Product{
        public $image;
        public $description;
        public $type;
        public $price;
    }

    function __construct($image, $description, $type, $price){
        $this->image = $image;
        $this->description = $description;
        $this->type = $type;
        $this->price = $price;
    }



?>