<?php

function calculerTarif($age)
{
    $montant = 0;

    $tarifs = recupererTarifs();

    if ($age <= 14) {
        $montant = $tarifs['enfant'];
    
    } elseif (($age <= 16) || ($age >= 60)) {
        $montant = $tarifs['reduit'];
    } else {
        $montant = $tarifs['plein'];
    }

    return $montant;
}

function recupererTarifs() {
    $tarifs = [
        'plein'   => 10.50,
        'reduit'  => 8.50,
        'enfant'  => 6.00,
        'carte5'  => 50,
        'carte10' => 95
    ];

    return $tarifs;
}
