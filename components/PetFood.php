<?php

include_once __DIR__.'/Product.php';

class PetFood extends Product {

    protected $dateExpication;

    function __construct($param)
    {
        parent::__construct($param);
        $this->dateExpication = $param['dateExpication'];
    }
}