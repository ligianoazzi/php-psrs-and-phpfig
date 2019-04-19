<?php

namespace SON\Store\Acessories\Brands;

class NationalBrand
{

    private $name;

    public function __construct()
    {
        $this->name = 'BrandXYZ';
    }

    public function getName()
    {
        return $this->name;
    }
}
