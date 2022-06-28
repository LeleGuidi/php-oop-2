<?php
require_once __DIR__ . '/./Classes/CreditCard.php';
require_once __DIR__ . '/./Classes/Product/Food.php';
require_once __DIR__ . '/./Classes/Product/Toy.php';
require_once __DIR__ . '/./Classes/User/RegisteredUser.php';

$food = new Food('Crocchette', '5kg', 19.99, 'Cane', 'Carne', '31/12/2022');
$toy = new Toy('Pallina', '1pz', 3.99, 'Cane', 'Svago', 'Gomma');
$credit_card = new CreditCard('1111222233334444', '31/05/2022', 'Emanuele', '123');

try {
    echo 'Carta di credito valida';
} catch(Exception $e) {
    echo 'Eccezione: ' . $e->getMessage();
}

?>