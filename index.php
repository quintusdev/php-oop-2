<?php
    require_once __DIR__."/shop/Product.php";
    require_once __DIR__."/shop/Food.php";
    require_once __DIR__."/shop/Game.php";
    require_once __DIR__."/shop/Item.php";

    /* Inserimento valori dei singoli prodotti */
    /* PRODOTTO 1 */
    $product1 = new Food ('https://www.pets-house.it/5767-large_default/royal-canin-mini-adult-800-gr.jpg', 'Royal Canin Mini Adult', 'Cane', 'Prezzo: € 43,99', 'Peso Netto: 545 gr', 'Ingredienti: Prosciutto, Riso.');
    /* PRODOTTO 2 */
    $product2 = new Food ('https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 'Almo Nature Holistic Maintainance Medium Large Tonno e Riso', 'Cane', 'Prezzo: € 44,99', 'Peso Netto: 600 gr', 'Ingredienti: Manzo, Cereali.');
    /* PRODOTTO 3 */
    $product3 = new Food ('https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg' , 'Almo Nature Cat Daily Lattina', 'Gatto', 'Prezzo: € 34,99', 'Peso Netto: 400 gr', 'Ingredienti: Tonno, Pollo, Prosciutto.');
    /* PRODOTTO 4 */
    $product4 = new Food ('https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg' , 'Mangime per Pesci Guppy in Fiocchi', 'Pesce', 'Prezzo: € 2,95', 'Peso Netto: 30 gr', 'Ingredienti: Pesci e sottoprodotti, Cereali, Lieviti, Alghe.');
    /* PRODOTTO 5 */
    $product5 = new Item ('https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg' , 'Voliera Wilma in Legno', 'Uccello', 'Prezzo: € 184,99', 'Materiale: Legno', 'Dimensioni: M: L 83 x P 67 x H 153 cm.');
    /* PRODOTTO 6 */
    $product6 = new Item ('https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Cartucce Filtranti per Filtro EasyCrystal', 'Pesce', 'Prezzo: € 2,29', 'Materiale: Materiale Espanso', 'Dimensioni: ND');
    /* PRODOTTO 7 */
    $product7 = new Game ('https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg' , 'Kong Classic', 'Cane', 'Prezzo: € 13,49', 'Caratteristiche: Galleggia e rimbalza', 'Dimensioni: 8,5 cm x 10 cm');
    /* PRODOTTO 8 */
    $product8 = new Game ('https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg' , 'Topini di peluche Trixie', 'Gatto', 'Prezzo: € 4,99', 'Caratteristiche: Morbido con codina in corda', 'Dimensioni: 8,5 cm x 10 cm');
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
        <!-- Titolo scheda browser -->
        <title>OOP 2</title>
    </head>

    <body>
        <header class="bg-dark text-white p-5 mb-5 text-center">    
            <h1>Negozio BOOLPET</h1>
        </header>

        <main>
            <div class="container">
                <div class="row" style="font-size:13px">
                    <!-- PRODOTTO 1 -->
                    <div class="col-4">
                        <div class="card">
                            <img class="w-auto" src="https://www.pets-house.it/5767-large_default/royal-canin-mini-adult-800-gr.jpg" alt="Cibo per Cani">
                            <div class="card-body">
                                <h6><strong><?php echo $product1->description."<br>"; ?></strong></h6>
                                <h6><i class="fa-solid fa-dog"></i><?php echo " ".$product1->type."<br>"; ?></h6>
                                <p><?php echo $product1->price."<br>"; ?></p>
                                <p><?php echo $product1->weight."<br>"; ?></p>
                                <p><?php echo $product1->ingredient."<br>"; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- PRODOTTO 2 -->
                    <div class="col-4">
                        <div class="card">
                            <img class="w-auto" src="https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg" alt="Cibo per Cani">
                            <div class="card-body">
                                <h6><strong><?php echo $product2->description."<br>"; ?></strong></h6>
                                <h6><i class="fa-solid fa-dog"></i><?php echo " ".$product2->type."<br>"; ?></h6>
                                <p><?php echo $product2->price."<br>"; ?></p>
                                <p><?php echo $product2->weight."<br>"; ?></p>
                                <p><?php echo $product2->ingredient."<br>"; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- PRODOTTO 3 -->
                    <div class="col-4">
                        <div class="card">
                            <img class="w-auto" src="https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg" alt="Cibo per Cani">
                            <div class="card-body">
                                <h6><strong><?php echo $product3->description."<br>"; ?></strong></h6>
                                <h6><i class="fa-solid fa-cat"></i><?php echo " ".$product3->type."<br>"; ?></h6>
                                <p><?php echo $product3->price."<br>"; ?></p>
                                <p><?php echo $product3->weight."<br>"; ?></p>
                                <p><?php echo $product3->ingredient."<br>"; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- PRODOTTO 4 -->
                    <div class="col-4">
                        <div class="card">
                            <img class="w-auto" src="https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg" alt="Cibo per Cani">
                            <div class="card-body">
                                <h6><strong><?php echo $product4->description."<br>"; ?></strong></h6>
                                <h6><i class="fa-solid fa-fish-fins"></i><?php echo " ".$product4->type."<br>"; ?></h6>
                                <p><?php echo $product4->price."<br>"; ?></p>
                                <p><?php echo $product4->weight."<br>"; ?></p>
                                <p><?php echo $product4->ingredient."<br>"; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- PRODOTTO 5 -->
                    <div class="col-4">
                        <div class="card">
                            <img class="w-auto" src="https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg" alt="Cibo per Cani">
                            <div class="card-body">
                                <h6><strong><?php echo $product5->description."<br>"; ?></strong></h6>
                                <h6><i class="fa-solid fa-dove"></i><?php echo " ".$product5->type."<br>"; ?></h6>
                                <p><?php echo $product5->price."<br>"; ?></p>
                                <p><?php echo $product5->material."<br>"; ?></p>
                                <p><?php echo $product5->dimension."<br>"; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- PRODOTTO 6 -->
                    <div class="col-4">
                        <div class="card">
                            <img class="w-auto" src="https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg" alt="Cibo per Cani">
                            <div class="card-body">
                                <h6><strong><?php echo $product6->description."<br>"; ?></strong></h6>
                                <h6><i class="fa-solid fa-fish-fins"></i></i><?php echo " ".$product6->type."<br>"; ?></h6>
                                <p><?php echo $product6->price."<br>"; ?></p>
                                <p><?php echo $product6->material."<br>"; ?></p>
                                <p><?php echo $product6->dimension."<br>"; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- PRODOTTO 7 -->
                    <div class="col-4">
                        <div class="card">
                            <img class="w-auto" src="https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg" alt="Cibo per Cani">
                            <div class="card-body">
                                <h6><strong><?php echo $product7->description."<br>"; ?></strong></h6>
                                <h6><i class="fa-solid fa-dog"></i><?php echo " ".$product7->type."<br>"; ?></h6>
                                <p><?php echo $product7->price."<br>"; ?></p>
                                <p><?php echo $product7->caption."<br>"; ?></p>
                                <p><?php echo $product7->dimensions."<br>"; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- PRODOTTO 8 -->
                    <div class="col-4">
                        <div class="card">
                            <img class="w-auto" src="https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg" alt="Cibo per Cani">
                            <div class="card-body">
                                <h6><strong><?php echo $product8->description."<br>"; ?></strong></h6>
                                <h6><i class="fa-solid fa-cat"></i><?php echo " ".$product8->type."<br>"; ?></h6>
                                <p><?php echo $product8->price."<br>"; ?></p>
                                <p><?php echo $product8->caption."<br>"; ?></p>
                                <p><?php echo $product8->dimensions."<br>"; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>

</html>