<?php

class Order
{
    protected $user, $creditCard, $productsList = [];

    public function __construct($user, $creditCard, $productsList) {
        if (gettype($creditCard) != 'object') throw new exception('It\'s not an object');
        if (get_class($creditCard) != 'Card') throw new exception('It\'s not a CreditCard');

        $this->user = $user;
        $this->creditCard = $creditCard;
        $this->productsList = $productsList;
    }
}