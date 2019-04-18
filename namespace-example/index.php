<?php

require __DIR__ . "/autoload.php";


$notebook = new SON\Store\Computers\product;
$name = $notebook->getName();
echo "<div>".$name."</div>";

$acessorie = new SON\Store\Acessories\Product;
$name = $acessorie->getName();
echo "<div>".$name."</div>";

$acessorieBrand = new SON\Store\Acessories\Brands\NationalBrand;
$name = $acessorieBrand->getName();
echo "<div>".$name."</div>";



