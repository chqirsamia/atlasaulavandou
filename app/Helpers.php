<?php

function getFrenshPrice($prixDecimal)
{
    $prix = floatval($prixDecimal) / 100;

    return number_format($prix, 2, ',', ' ') . ' €';
}