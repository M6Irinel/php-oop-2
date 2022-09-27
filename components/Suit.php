<?php

include_once __DIR__ . '/Product.php';

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

    public function setColor($color)
    {
        if (gettype($color) == 'string')
            $this->color = $color;
    }
}
