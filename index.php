<?php

$literPrice = 1.499;
$tankCapacity1 = 40.5;
$tankCapacity2 = 35.7;

function calculateFullCapacityPrice($literPrice, $tankCapacity1, $tankCapacity2)
{
    $fullTankCapacity = $tankCapacity1 + $tankCapacity2;
    $result = $fullTankCapacity * $literPrice;
    return "Die Benzinkosten betragen für " . $fullTankCapacity . " Liter " . $result . "€";
}

echo calculateFullCapacityPrice($literPrice, $tankCapacity1, $tankCapacity2);
