<?php
    require_once __DIR__ . '/./Product.php';

    class Food extends Product {
        public $type;
        public $expiry;

        public function __construct($_name, $_quantity, $_price, $_animal_type, $_type, $_expiry)
        {
            $this->type = $_type;
            $this->expiry = $_expiry;
            parent:: __construct($_name, $_quantity, $_price, $_animal_type);
        }
        
    }

?>