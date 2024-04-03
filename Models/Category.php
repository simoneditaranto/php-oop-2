<?php

class Category {

    protected $type;
    protected $icon;
    
    /**
     * __construct
     *
     * @param string $_type
     * @param string $_icon
     */
    function __construct($_type, $_icon) {
        $this->type = $_type;
        $this->icon = $_icon;
    }

    public function getIcon() {
        return $this->icon;
    }

}