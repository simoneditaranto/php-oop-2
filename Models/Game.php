<?php

require_once __DIR__ .'/Traits/HasMaterial.php';

class Game extends Product {

    use HasMaterial;

    function __construct($_name, $_price, Category $_category, $material, $hardness) {

        parent::__construct($_name, $_price, $_category);

        $this->type = "Giochi";

        $this->material = $material;
        $this->hardness = $hardness;
        
    }

}