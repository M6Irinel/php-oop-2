<?php

include_once __DIR__ . '/Product.php';

class Technology extends Product
{
    protected $color;
    protected $nrKeys = 0;
    protected $led = false;

    function __construct($param)
    {
        parent::__construct($param);
        $this->setColor($param['color']);
        $this->setNrKeys($param['nrKeys']);
        $this->setLed($param['led']);
    }

    public function setColor($color)
    {
        if (gettype($color) == 'string')
            $this->color = $color;
    }

    public function setNrKeys($nrKeys)
    {
        if (gettype($nrKeys) == 'int')
            $this->nrKeys = $nrKeys;
    }

    public function setLed($led)
    {
        if (gettype($led) == 'boolean')
            $this->led = $led;
    }
}
