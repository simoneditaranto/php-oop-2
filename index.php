<?php

    require './db.php';

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

        <div class="cards d-flex gap-5 flex-wrap">
            <?php
            foreach($products as $product) {
            ?>

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
          
    
        <?php
        }
        ?>
        </div>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>