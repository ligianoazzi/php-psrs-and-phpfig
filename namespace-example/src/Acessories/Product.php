<?php

namespace SON\Store\Acessories;

class Product
{

    private $name;

    public function __construct()
    {
        $this->name = 'Mouse';
    }

    public function getName()
    {
        return $this->name;
    }
}
