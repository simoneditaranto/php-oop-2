<?php

class Food extends Product {

    function __construct($name, $price, Category $category) {

        parent::__construct($name, $price, $category);

        $this->type = "Cibo";
        
    }

}