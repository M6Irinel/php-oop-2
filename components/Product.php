<?php
class Product
{
    protected $name = '';
    private $price = 0;
    protected $poster = '';
    protected $description = '';
    protected $weight = 0;
    protected $volume = 0;
    protected $brand = '';
    public $categories = '';

    function __construct($param)
    {
        $this->name = $param['name'];
        $this->brand = $param['brand'];
        $this->poster = $param['poster'];
        $this->description = $param['description'];
        $this->weight = $param['weight'];
        $this->volume = $param['volume'];
        $this->categories = $param['categories'];
        $this->setPrice($param['price']);
    }

    public function setPrice($price)
    {
        if ($price >= 0)
            $this->price = $price;
    }

    public function setWeight($weight)
    {
        if ($weight > 0)
            $this->weight = $weight;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
