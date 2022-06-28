<?php
    require_once __DIR__ . '/./Product.php';

    class Toy extends Product {
        public $type;
        public $material;

        public function __construct($_name, $_quantity, $_price, $_animal_type, $_type, $_material)
        {
            $this->type = $_type;
            $this->material = $_material;
            parent:: __construct($_name, $_quantity, $_price, $_animal_type);
        }
        
    }

?>