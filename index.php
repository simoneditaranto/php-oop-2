<?php

require './Models/Product.php';
require './Models/Food.php';
require './Models/Category.php';
require './Models/Game.php';
require './Models/Utility.php';
require './Models/Shop.php';
require './Models/User.php';
require './Models/RegisteredUser.php';

$cane = new Category("cani", "fa-solid fa-dog");
$gatto = new Category("gatti", "fa-solid fa-cat");
// var_dump($cane);

$crocchette = new Food("Crocchette", 12.50, $cane);
$crocchette->setThumb("https://th.bing.com/th/id/OIP.AaJOJahN8dDYiJzoMOrUSgHaHa?rs=1&pid=ImgDetMain");
// var_dump($crocchette);
$pallina = new Game("pallina", 8.50, $gatto);
$pallina->setThumb("https://th.bing.com/th/id/OIP.CSL6Y-c6yMqbb4Mgp20opAHaHa?rs=1&pid=ImgDetMain");
// var_dump($pallina);

$cuccia = new Utility("cuccia", 15.00, $cane);
$cuccia->setThumb("https://www.cibocanigatti.it/accessori-cani-e-gatti/accesori-cane/cucce-per-cani-da-esterno_NG2.jpg");

$products = [
    $crocchette,
    $pallina,
    $cuccia,
];
// var_dump($products);

$shopUser1 = new Shop([$crocchette, $cuccia]);
// var_dump($shopUser1);
$user1 = new User("Mario", "Rossi", "m.rossi@mail.com", $shopUser1);
// var_dump($user1);

$shopUser2 = new Shop([$pallina]);
var_dump($shopUser2);
$user2 = new RegisteredUser("Giacomo", "Verdi", "g.verdi@mail.com", $shopUser2);
var_dump($user2);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-commerce</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .card-img-top {
            width: 100%;
            height: 300px;

            object-fit: cover;
        }
    </style>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <div class="container">

        <h1>Pet Market</h1>

        <div class="row">
            <?php
            foreach($products as $product) {
            ?>
        
            <div class="col-6">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $product->getThumb() ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="product-title"><?= $product->getName() ?></h5>
                        <p class="product-price"><?= $product->getPrice() ?>€</p>
                        <div class="product-icon">
                            <i class="<?= $product->getCategory()->getIcon() ?>"></i>
                        </div>
                        <div class="product-type">
                            <?= $product->getType() ?>
                        </div>
                        <a href="#" class="btn btn-primary">Acquista</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>