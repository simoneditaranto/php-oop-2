<?php
require './Models/Product.php';
require './Models/Food.php';
require './Models/Category.php';
require './Models/Game.php';
require './Models/Utility.php';
require './Models/Shop.php';
require './Models/User.php';
require './Models/EmptyProduct.php';
require './Models/RegisteredUser.php';

$products = [];

$cane = new Category("cani", "fa-solid fa-dog");
$gatto = new Category("gatti", "fa-solid fa-cat");
// aggiungo una categoria per gli $emptyProduct
$emptyCategory = new Category("vuoto", "fa-solid fa-ban");

// creo un prodotto di default nel caso ci siano prodotti non creati con successo
$emptyProduct = new EmptyProduct("Prodotto vuoto", 0, $emptyCategory);
$emptyProduct->setThumb("https://cdn-icons-png.flaticon.com/512/2748/2748558.png");



try {
    
    $crocchette = new Food("Crocchette", 'string', $cane);
    $crocchette->setThumb("https://th.bing.com/th/id/OIP.AaJOJahN8dDYiJzoMOrUSgHaHa?rs=1&pid=ImgDetMain");
    $products[] = $crocchette;

} catch(Exception $e) {

    $error = "Erroe: " . $e->getMessage();
    $crocchette = $emptyProduct;
    $products[] = $crocchette;
    // var_dump($error);
}

try {

    $pallina = new Game("pallina", 8.50, $gatto, "Plastica", "Morbido");
    $pallina->setThumb("https://th.bing.com/th/id/OIP.CSL6Y-c6yMqbb4Mgp20opAHaHa?rs=1&pid=ImgDetMain");
    $products[] = $pallina;

} catch(Exception $e) {
    $error = "Erroe: " . $e->getMessage();
}

try{

    $cuccia = new Utility("cuccia", 15.00, $cane, "Legno", "Resistente");
    $cuccia->setThumb("https://www.cibocanigatti.it/accessori-cani-e-gatti/accesori-cane/cucce-per-cani-da-esterno_NG2.jpg");
    $products[] = $cuccia;

} catch(Exception $e) {
    $error = "Erroe: " . $e->getMessage();
}

// $products = [
//     $crocchette,
//     $pallina,
//     $cuccia,
// ];





