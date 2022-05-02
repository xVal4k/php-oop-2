<?php
require_once(__DIR__.'/Card.php');

class User {
    private $name, $surname, $country, $address;
    
    public function __construct(string $_name, string $_surname, string $_country, string $_address)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->country = $_country;
        $this->address = $_address;
    }
}


class RegisteredUser extends User {
    private $username, $email, $password, $birthDate, $discount = 0.20;
    
    public function __construct(string $_name, string $_surname, string $_country, string $_address, string $_username, string $_email, string $_password, string $_birthDate) {
        parent::__construct($_name, $_surname, $_country, $_address);

        if (strlen($_username) < 6 || strlen($_username) > 15) {
            $this->usernameWrn = 'Username must be at least 6 and maximum 15 characters long';
        } else {
            $this->username = $_username;
        };

        $this->email = $_email;

        if (strlen($_username) < 6 || strlen($_username) > 15) {
            $this->passwordWrn = 'Password must be at least 6 characters long';
        } else {
            $this->password = $_password;
        };

        $this->birthDate = $_birthDate;
    }
}