<?php

class Category {

    protected $type;
    
    /**
     * __construct
     *
     * @param  string $_type
     */
    function __construct($_type) {
        $this->type = $_type;
    }

}