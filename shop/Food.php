<?php
    // Definizione della classe "Food" che estende la classe "Product"
    class Food extends Product{
        // Definizione delle proprietà pubbliche della classe Game
        public $weight;       // Peso del cibo
        public $ingredient;   // Ingredienti del cibo

        // Definizione del metodo costruttore della classe Food
        function __construct($image, $description, $type, $price, $weight, $ingredient){
            // Chiamata al costruttore della classe genitore (classe Product) utilizzando la sintassi "parent::__construct"
            parent::__construct($image, $description, $type, $price);   // Chiamata al costruttore della classe genitore (Product)
            $this->weight = $weight;                 // Inizializzazione del peso del cibo
            $this->ingredient = $ingredient;         // Inizializzazione degli ingredienti del cibo
        }
        
        public function getFood() {
            return [
                'weight' => $this->weight,                 // Restituzione del peso del cibo
                'ingredient' => $this->ingredient          // Restituzione degli ingredienti del cibo
            ];
        }
    }
?>
