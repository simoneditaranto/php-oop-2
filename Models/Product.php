<?php

class Product {

    protected $name;
    protected $price;
    protected $category;
    protected $type;
    protected $thumb;
    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  float $_price
     * @param  Category $_category
     */
    function __construct($_name, $_price, Category $_category) {
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
    }

    public function setThumb($url) {
        return $this->thumb = $url;
    }

    public function getThumb() {
        return $this->thumb;
    }

    public function getName() {
        return $this->name;
    }

    public function setPrice($newPrice) {
        return $this->price = $newPrice;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getType() {
        return $this->type;
    }


}