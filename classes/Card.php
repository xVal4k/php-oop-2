<?php

class Card {
    private $owner, $cardNumber, $expirationDate, $CCV;

    public function __construct($_owner, $_cardNumber, $_expirationDate, $_CCV) {
        $this->owner = $_owner;
        $this->cardNumber = $_cardNumber;
        $this->expirationDate = $_expirationDate;
        $this->CCV = $_CCV;
    }
}