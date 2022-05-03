<?php
require_once(__DIR__.'/classes/User.php');
require_once(__DIR__.'/classes/Products.php');

$user1 = new RegisteredUser('Cristian', 'Bricicaru', 'CristiB.', '********', );
$user1->setCountry('Italia')->setAddress('Via Busnelli 7, Saronno')->setEmail('C******b@gmail.com')->setBirthDate('02-04-2000');
$card1 = new Card('Cristian Bricicaru', '**** **** **** ****', "**-**", '***');
$product1 = new Products("1", "Ciotola Gatto", "Accessori", "13.99");
$product1->setProductInfo('Lorem ipsum dolor, sit amet consectetur adipisicing elit.');

$productsList = [$product1];

$order1 = $user1->placeOrder($card1, $productsList);
var_dump($order1);

