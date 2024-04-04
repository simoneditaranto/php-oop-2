<?php

require_once __DIR__ .'/Traits/HasMaterial.php';
class Utility extends Product {

    use HasMaterial;


    function __construct($name, $price, Category $category, $material, $hardness) {

        parent::__construct($name, $price, $category);

        $this->type = "Utilità";

        $this->material = $material;
        $this->hardness = $hardness;
        
    }

}