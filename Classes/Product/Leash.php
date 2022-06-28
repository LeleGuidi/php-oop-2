<?php
    require_once __DIR__ . '/./Product.php';

    class Leash extends Product {
        public $type;
        public $material;
        public $size;

        public function __construct($_name, $_quantity, $_price, $_animal_type, $_type, $_material, $_size)
        {
            $this->type = $_type;
            $this->material = $_material;
            $this->size = $_size;
            parent:: __construct($_name, $_quantity, $_price, $_animal_type);
        }
        
    }

?>