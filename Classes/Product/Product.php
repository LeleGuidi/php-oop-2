<?php 
class Product {
    public $name;
    public $quantity;
    public $price;
    public $animal_type;

    public function __construct($_name, $_quantity, $_price, $_animal_type)
    {
        $this->name = $_name;
        $this->quantity = $_quantity;
        $this->price = $_price;
        $this->animal_type = $_animal_type;
    }
}

?>