<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__.'/trait-Color.php';

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

    use Color;

    public function setNrKeys($nrKeys)
    {
        if (gettype($nrKeys) == 'integer')
            $this->nrKeys = $nrKeys;
    }

    public function setLed($led)
    {
        if (gettype($led) == 'boolean')
            $this->led = $led;
    }
}
