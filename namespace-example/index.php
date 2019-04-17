<?php

require "src/Product.php";
require "Product.php";


$notebook = new SON\Computers\product;
$name = $notebook->getName();
echo "<div>".$name."</div>";

$acessorie = new SON\Acessories\Product;
$name = $acessorie->getName();
echo "<div>".$name."</div>";


