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

        if(is_string($_name)) {

            $this->name = $_name;

        } else {
            throw new Exception("Non hai inserito un nome valido");
        }


        // controllo che il prezzo sia un numero
        if(is_numeric($_price)) {

            $this->price = number_format($_price, 2);

        } else {
            // creo un eccezione
            throw new Exception("Il prezzo inserito non è corretto");
        }

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
        return $this->price = number_format($newPrice, 2);
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