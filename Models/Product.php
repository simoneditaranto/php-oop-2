<?php

class Product {

    protected $name;
    protected $price;
    protected $category;
    public $thumb;
    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  string $_price
     * @param  Category $_category
     */
    function __construct($_name, $_price, Category $_category) {
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
    }


}