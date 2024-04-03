<?php

class CreditCard {

    protected $cardNumber;
    protected $cardExpire;

    function __construct($_cardNumber, $_cardExpire) {
        $this->cardNumber = $_cardNumber;
        $this->cardExpire = $_cardExpire;
    }

}