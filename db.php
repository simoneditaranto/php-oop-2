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

$crocchette = new Food("Crocchette", 12.50, $cane);
$crocchette->setThumb("https://th.bing.com/th/id/OIP.AaJOJahN8dDYiJzoMOrUSgHaHa?rs=1&pid=ImgDetMain");

$pallina = new Game("pallina", 8.50, $gatto);
$pallina->setThumb("https://th.bing.com/th/id/OIP.CSL6Y-c6yMqbb4Mgp20opAHaHa?rs=1&pid=ImgDetMain");

$cuccia = new Utility("cuccia", 15.00, $cane);
$cuccia->setThumb("https://www.cibocanigatti.it/accessori-cani-e-gatti/accesori-cane/cucce-per-cani-da-esterno_NG2.jpg");

$products = [
    $crocchette,
    $pallina,
    $cuccia,
];





