<?php

class Shop {

    protected $shopProducts;
    protected $quantity;

    function __construct(array $_shopProducts) {
        $this->shopProducts = $_shopProducts;
        $this->quantity = sizeof($_shopProducts);
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getshopProducts() {
        return $this->shopProducts;
    }

}