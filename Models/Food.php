<?php

class Food extends Product {

    protected $type;

    function __construct($_name, $_price, Category $_category) {

        parent::__construct($_name, $_price, $_category);

        $this->type = "Cibo";
        
    }

}