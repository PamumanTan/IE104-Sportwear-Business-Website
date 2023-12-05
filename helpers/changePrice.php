<?php
function changePrice($price)
{
    // from 20000000 -> 20.000.000 VNĐ
    $price = number_format($price, 0, ',', '.') . ' VNĐ';
    return $price;
}
