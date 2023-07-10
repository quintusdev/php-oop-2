<?php
    // Definizione della classe "Item" che estende la classe "Product"  
    class Item extends Product{
        // Definizione delle proprietà pubbliche della classe Game
        public $material;      // Materiale dell'oggetto
        public $dimension;     // Dimensioni dell'oggetto

        // Definizione del metodo costruttore della classe Item
        function __construct($image, $description, $type, $price, $material, $dimension){
            // Chiamata al costruttore della classe genitore (classe Product) utilizzando la sintassi "parent::__construct"
            parent::__construct($image, $description, $type, $price);   // Chiamata al costruttore della classe genitore (Product)
            $this->material = $material;               // Inizializzazione del materiale dell'oggetto
            $this->dimension = $dimension;             // Inizializzazione delle dimensioni dell'oggetto
        }

        public function getItem() {
            return [
                'material' => $this->material,           // Restituzione del materiale dell'oggetto
                'dimension' => $this->dimension           // Restituzione delle dimensioni dell'oggetto
            ];
        }
    }
?>
