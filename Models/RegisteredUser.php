<?php

class RegisteredUser extends User {

    function __construct($name, $lastName, $mail, Shop $shop) {

        parent::__construct($name, $lastName, $mail, $shop);

        // foreach($this->shop->getShopProducts() as $singleProduct) {
        //     $singleProduct->setPrice($singleProduct->getPrice() - ($singleProduct->getPrice() / 100 * 20));
        // }
        
    }

}