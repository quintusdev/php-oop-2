<?php
    class Product{
        // Definizione delle proprietà pubbliche della classe Game
        public $image;        // Immagine del prodotto
        public $description;  // Descrizione del prodotto
        public $type;         // Tipo di prodotto
        public $price;        // Prezzo del prodotto

        // Definizione del metodo costruttore della classe Product
        function __construct($image, $description, $type, $price){
            $this->image = $image;                   // Inizializzazione dell'immagine del prodotto
            $this->description = $description;       // Inizializzazione della descrizione del prodotto
            $this->type = $type;                     // Inizializzazione del tipo di prodotto
            $this->price = $price;                   // Inizializzazione del prezzo del prodotto
        }
    
        public function getProduct(){
            return [
                'image' => $this->image,             // Restituzione dell'immagine del prodotto
                'description' => $this->description, // Restituzione della descrizione del prodotto
                'type' => $this->type,               // Restituzione del tipo di prodotto
                'price' => $this->price              // Restituzione del prezzo del prodotto
            ];
        }
    }
?>
