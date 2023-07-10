<?php
require_once __DIR__."/shop/Product.php";
require_once __DIR__."/shop/Food.php";
require_once __DIR__."/shop/Game.php";
require_once __DIR__."/shop/Item.php";
/* PRODOTTO 1 */
$product1 = new Food ('Royal Canin Mini Adult', 'Cane', 'Prezzo: € 43,99', 'Peso Netto: 545 gr', 'Ingredienti: Prosciutto, Riso.');

$product2 = new Food ('Almo Nature Holistic Maintainance Medium Large Tonno e Riso', 'Cane', 'Prezzo: € 44,99', 'Peso Netto: 600 gr', 'Ingredienti: Manzo, Cereali.');

$product3 = new Food ('Almo Nature Cat Daily Lattina', 'Gatto', 'Prezzo: € 34,99', 'Peso Netto: 400 gr', 'Ingredienti: Tonno, Pollo, Prosciutto.');

$product4 = new Food ('Mangime per Pesci Guppy in Fiocchi', 'Pesce', 'Prezzo: € 2,95', 'Peso Netto: 30 gr', 'Ingredienti: Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe.');

$product5 = new Item ('Voliera Wilma in Legno', 'Uccello', 'Prezzo: € 184,99', 'Materiale: Legno', 'Dimensioni: M: L 83 x P 67 x H 153 cm.');

$product6 = new Item ('Royal Canin Mini Adult', 'Cane', 'Prezzo: € 43,99', 'Peso: 500 gr', 'Ingredienti: Prosciutto, Riso');

$product7 = new Game ('Royal Canin Mini Adult', 'Cane', 'Prezzo: € 43,99', 'Peso: 500 gr', 'Ingredienti: Prosciutto, Riso');

$product8 = new Game ('Royal Canin Mini Adult', 'Cane', 'Prezzo: € 43,99', 'Peso: 500 gr', 'Ingredienti: Prosciutto, Riso');
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
                            <img class="w-auto" src="https://www.pets-house.it/5767-large_default/royal-canin-mini-adult-800-gr.jpg" alt="Cibo per Cani">
                            <div class="card-body">
                                <h3><strong><?php echo $product1->description."<br>"; ?></strong></h3>
                                <h6><i class="fa-solid fa-dog"></i><?php echo " ".$product1->type."<br>"; ?></h6>
                                <h5><?php echo $product1->weight."<br>"; ?></h5>
                                <h5><?php echo $product1->ingredient."<br>"; ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img class="w-auto" src="https://www.pets-house.it/5767-large_default/royal-canin-mini-adult-800-gr.jpg" alt="Cibo per Cani">
                            <div class="card-body">
                                <h3><strong><?php echo $product1->description."<br>"; ?></strong></h3>
                                <h6><i class="fa-solid fa-dog"></i><?php echo " ".$product1->type."<br>"; ?></h6>
                                <h5><?php echo $product1->weight."<br>"; ?></h5>
                                <h5><?php echo $product1->ingredient."<br>"; ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img class="w-auto" src="https://www.pets-house.it/5767-large_default/royal-canin-mini-adult-800-gr.jpg" alt="Cibo per Cani">
                            <div class="card-body">
                                <h3><strong><?php echo $product1->description."<br>"; ?></strong></h3>
                                <h6><i class="fa-solid fa-dog"></i><?php echo " ".$product1->type."<br>"; ?></h6>
                                <h5><?php echo $product1->weight."<br>"; ?></h5>
                                <h5><?php echo $product1->ingredient."<br>"; ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img class="w-auto" src="https://www.pets-house.it/5767-large_default/royal-canin-mini-adult-800-gr.jpg" alt="Cibo per Cani">
                            <div class="card-body">
                                <h3><strong><?php echo $product1->description."<br>"; ?></strong></h3>
                                <h6><i class="fa-solid fa-dog"></i><?php echo " ".$product1->type."<br>"; ?></h6>
                                <h5><?php echo $product1->weight."<br>"; ?></h5>
                                <h5><?php echo $product1->ingredient."<br>"; ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img class="w-auto" src="https://www.pets-house.it/5767-large_default/royal-canin-mini-adult-800-gr.jpg" alt="Cibo per Cani">
                            <div class="card-body">
                                <h3><strong><?php echo $product1->description."<br>"; ?></strong></h3>
                                <h6><i class="fa-solid fa-dog"></i><?php echo " ".$product1->type."<br>"; ?></h6>
                                <h5><?php echo $product1->weight."<br>"; ?></h5>
                                <h5><?php echo $product1->ingredient."<br>"; ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img class="w-auto" src="https://www.pets-house.it/5767-large_default/royal-canin-mini-adult-800-gr.jpg" alt="Cibo per Cani">
                            <div class="card-body">
                                <h3><strong><?php echo $product1->description."<br>"; ?></strong></h3>
                                <h6><i class="fa-solid fa-dog"></i><?php echo " ".$product1->type."<br>"; ?></h6>
                                <h5><?php echo $product1->weight."<br>"; ?></h5>
                                <h5><?php echo $product1->ingredient."<br>"; ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img class="w-auto" src="https://www.pets-house.it/5767-large_default/royal-canin-mini-adult-800-gr.jpg" alt="Cibo per Cani">
                            <div class="card-body">
                                <h3><strong><?php echo $product1->description."<br>"; ?></strong></h3>
                                <h6><i class="fa-solid fa-dog"></i><?php echo " ".$product1->type."<br>"; ?></h6>
                                <h5><?php echo $product1->weight."<br>"; ?></h5>
                                <h5><?php echo $product1->ingredient."<br>"; ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img class="w-auto" src="https://www.pets-house.it/5767-large_default/royal-canin-mini-adult-800-gr.jpg" alt="Cibo per Cani">
                            <div class="card-body">
                                <h3><strong><?php echo $product1->description."<br>"; ?></strong></h3>
                                <h6><i class="fa-solid fa-dog"></i><?php echo " ".$product1->type."<br>"; ?></h6>
                                <h5><?php echo $product1->weight."<br>"; ?></h5>
                                <h5><?php echo $product1->ingredient."<br>"; ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>

</html>