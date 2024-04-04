<?php

class User {

    protected $name;
    protected $lastName;
    protected $mail;
    protected $shop;
    protected $creditCard;
    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  string $_lastName
     * @param  string $_mail
     * @param  Shop $_shop
     * @return void
     */
    function __construct($_name, $_lastName, $_mail, Shop $_shop) {
        $this->name = $_name;
        $this->lastName = $_lastName;
        $this->mail = $_mail;
        $this->shop = $_shop;
    }

    public function getName() {
        return $this->name;
    }

    public function getShop() {
        return $this->shop;
    }

    public function setCreditCard(CreditCard $card) {
        return $this->creditCard = $card;
    }

}