<?php

class Game extends Product {

    function __construct($_name, $_price, Category $_category) {

        parent::__construct($_name, $_price, $_category);

        $this->type = "Giochi";
        
    }

}