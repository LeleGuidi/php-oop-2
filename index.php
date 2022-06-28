<?php
require_once __DIR__ . '/./Classes/CreditCard.php';
require_once __DIR__ . '/./Classes/Product/Food.php';
require_once __DIR__ . '/./Classes/Product/Toy.php';
require_once __DIR__ . '/./Classes/User/RegisteredUser.php';

$foods = [
    new Food('Crocchette', '5kg', 19.99, 'Cane', 'Carne', '31/12/2022'),
    new Food('Bastoncini', '3kg', 5.99, 'Cane', 'Pesce, verdura', '31/12/2022')
];
$toys = [
    new Toy('Pallina', '1pz', 3.99, 'Cane', 'Svago', 'Gomma'),
    new Toy('Osso', '1pz', 3.99, 'Cane', 'Svago', 'Gomma'),
];
$registeredUser = [
    new RegisteredUser('Emanuele', 'Guidi', 'ciao@gmail.com'),
    new RegisteredUser('Luca', 'Rossi', 'addio@gmail.com'),
];
$credit_card = new CreditCard('1111222233334444', '31/05/2022', 'Emanuele', '123'); 

//Viene richiamata la funzione all'interno del file CreditCard.php per controllare se la data di scadenza è valida o meno
try {
    echo isExpiry($credit_card->expiry);
} catch(Exception $e) {
    echo 'Eccezione: ' . $e->getMessage();
}
?>