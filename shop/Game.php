<?php
    // Definizione della classe "Game" che estende la classe "Product"
    class Game extends Product{
        
        // Definizione delle proprietà pubbliche della classe Game
        public $caption;
        public $dimensions;
        
        // Definizione del metodo costruttore della classe Game
        function __construct($image, $description, $type, $price, $caption, $dimensions){
            
            // Chiamata al costruttore della classe genitore (classe Product) utilizzando la sintassi "parent::__construct"
            parent::__construct($image, $description, $type, $price);
            
            // Impostazione dei valori delle proprietà della classe Game utilizzando i parametri del costruttore
            $this->caption = $caption;
            $this->dimensions = $dimensions;
        }
        
        // Definizione del metodo "getGame" che restituisce il titolo e le dimensioni del gioco
        public function getGame() {
            
            // Restituzione dei valori delle proprietà "caption" e "dimensions"
            return 
                $this->caption = $caption;
                $this->dimensions =$dimensions;
        }
    }
?>
