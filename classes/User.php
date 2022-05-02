<?php
require_once(__DIR__.'/Card.php');

class User {
    private $name, $surname, $country, $address;
    
    public function __construct(string $_name, string $_surname)
    {
        $this->name = $_name;
        $this->surname = $_surname;
    }

    public function setCountry($_country) {
        $this->country = $_country;
        return $this;
    }
    
    public function getCountry() {
        return $this->country;
    }

    public function setAddress($_address) {
        $this->address = $_address;
        return $this;
    }
    
    public function getAddress() {
        return $this->address;
    }
}


class RegisteredUser extends User {
    private $username, $email, $password, $birthDate, $discount = 0.20;
    
    public function __construct(string $_name, string $_surname, string $_username, string $_password) {
        parent::__construct($_name, $_surname);

        if (strlen($_username) < 6 || strlen($_username) > 15) {
            $this->usernameWrn = 'Username must be at least 6 and maximum 15 characters long';
        } else {
            $this->username = $_username;
        };
        if (strlen($_username) < 6 || strlen($_username) > 15) {
            $this->passwordWrn = 'Password must be at least 6 characters long';
        } else {
            $this->password = $_password;
        };
    }

    public function setEmail($_email) {
        $this->email = $_email;
        return $this;
    }
    
    public function getEmail() {
        return $this->email;
    }

    public function setBirthDate($_birthDate) {
        $this->birthDate = $_birthDate;
        return $this;
    }
    
    public function getBirthDate() {
        return $this->birthDate;
    }
}