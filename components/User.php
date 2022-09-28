<?php

class User
{
    protected $name = '';
    protected $nrProduct = [];
    protected $totalPrice = 0;
    protected $shippingPrice = 0;
    protected $shippingVolume = 0;

    function __construct($param)
    {
        $this->setName($param['name']);
        $this->setNrProduct($param['nrProduct']);
        $this->setTotalPrice($param['nrProduct']);
        $this->setShippingVolume($param['nrProduct']);
        $this->setShipingPriceOver200($this->shippingVolume);
    }

    public function setName($name)
    {
        try {
            if(gettype($name) == 'integer') throw new Exception('integer');
            if(gettype($name) == 'float')   throw new Exception('float');
            if(gettype($name) == 'boolean') throw new Exception('boolean');
            if(gettype($name) == 'array')   throw new Exception('array');
            if(gettype($name) == 'object')  throw new Exception('object');
            
            $this->name = $name;

        } catch (Exception $e) {
            echo 'Wrong type $name, expected string, received ', $e->getMessage();
        } finally {
            // echo 'Finito';
        }
    }

    public function test()
    {
        try {
            throw new Exception('foo');
        } catch (Exception $e) {
            return 'catch';
        } finally {
            return 'finally';
        }
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

    public function setShippingVolume($volume)
    {
        $vol = 0;
        foreach ($volume as $v) {
            $vol += $v->getVolume();
        }
        $this->shippingVolume = $vol;
    }

    public function setShipingPriceOver200($shippingVolume)
    {
        if ($shippingVolume < 100)
            $this->shippingPrice = 10;
        else if ($shippingVolume >= 100 && $shippingVolume < 200)
            $this->shippingPrice = 50;
        else if ($shippingVolume >= 200 && $shippingVolume < 300)
            $this->shippingPrice = 80;
        else if ($shippingVolume >= 300)
            $this->shippingPrice = 120;
    }
}
