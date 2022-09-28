<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/trait-Color.php';

class Suit extends Product
{
    protected $color;
    protected $size;

    function __construct($param)
    {
        parent::__construct($param);
        $this->setColor($param['color']);
        $this->size = $param['size'];
    }
    
    use Color;
}
