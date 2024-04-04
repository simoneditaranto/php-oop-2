<?php

class CreditCard {

    protected $cardNumber;
    protected $cardExpire;
    
    /**
     * __construct
     *
     * @param  string $_cardNumber
     * @param  date $_cardExpire
     */
    function __construct($_cardNumber, $_cardExpire) {
        $this->cardNumber = $_cardNumber;
        $this->cardExpire = $_cardExpire;
    }

}