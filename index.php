<?php

require_once "Product.php";

$television = new ProductElectronic ("Television", "9000", "2");
$kaos = new ProductFashion ("Kaos", "15000", "3");

$television->showInformation();
$kaos->showInformation();