<?php
class CreditCard {
    public $number;
    public $expiry;
    public $type;
    public $account_holder;
    public $cvc;

    public function __construct($_number, $_expiry, $_account_holder, $_cvc)
    {
        $this->number = $_number;
        $this->expiry = $_expiry;
        $this->account_holder = $_account_holder;
        $this->cvc = $_cvc;
    }

    function isExpiry() {
        if ($this->expiry > date("d-m-Y")) {
            throw new Exception("La carta di credito è scaduta");
        }
    }
}

?>