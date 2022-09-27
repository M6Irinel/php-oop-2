<?php

class User
{
    protected $name = '';
    protected $nrProduct = [];
    protected $totalPrice = 0;

    function __construct($param)
    {
        $this->setName($param['name']);
        $this->setNrProduct($param['nrProduct']);
        $this->setTotalPrice($param['nrProduct']);
    }

    public function setName($name)
    {
        if (gettype($name) == 'string')
            $this->name = $name;
    }

    public function setNrProduct($nrProduct)
    {
        if (gettype($nrProduct) == 'array')
            $this->nrProduct = $nrProduct;
    }

    public function setTotalPrice($nrProduct)
    {
        $n = 0;
        foreach ($nrProduct as $v) {
            $n += $v->getPrice();
        }
        $this->totalPrice = $n;
    }

    public function getTotalPrice()
    {
        return $this->totalPrice;
    }
}
