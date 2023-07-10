<?php
require_once __DIR__."/shop/Product.php";
require_once __DIR__."/shop/Food.php";
require_once __DIR__."/shop/Game.php";
require_once __DIR__."/shop/Item.php";

$product1 = new Food (
    'https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg',
    'Royal Canin Mini Adult',
    'Cane',
    '€ 43,99',
    'peso: 500 gr',
    'Ingredienti: Prosciutto, Riso'
);

$product2 = new Game (
    'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg',
    'Topini di peluche Trixie',
    'Gatto',
    '€ 4,99',
    'Materiale: Merda',
    'Dimensioni: 8,5 cm X 10 cm'
);

$product3 = new Item (
    'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg',
    'Topini di peluche Trixie',
    'Gatto',
    '€ 4,99',
    'Materiale: Merda',
    'Dimensioni: 8,5 cm X 10 cm'
);

echo "<pre>";
var_dump($product1);
var_dump($product2);
var_dump($product3);

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- link BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <!-- link FONTAWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <title>OOP 2</title>
    </head>

    <body>
        <header class="bg-dark text-white p-5 mb-5">    
            <h1>Negozio BoolFood</h1>
        </header>

        <main class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="card">

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>

</html>