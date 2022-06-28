<?php 
require_once __DIR__ . '/./User.php';

class RegisteredUser extends User {
    
    public function __construct($_name, $_surname, $_email)
    {
        parent:: __construct($_name, $_surname, $_email);
    }

    public function setDiscount() {
        $this->discount = "20%"
    }
}