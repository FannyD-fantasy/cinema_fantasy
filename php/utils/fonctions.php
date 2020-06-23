<?php

function calculatePricing($age)
{
    $amount = 0;

    $prices = getPrices();

    if ($age <= 14) {
        $amount = $prices['enfant'];
    
    } elseif (($age <= 16) || ($age >= 60)) {
        $amount = $prices['reduit'];
    } else {
        $amount = $prices['plein'];
    }

    return $amount;
}

function getprices () {
    $prices = [
        'plein'   => 10.50,
        'reduit'  => 8.50,
        'enfant'  => 6.00,
        'carte5'  => 50,
        'carte10' => 95
    ];

    return $prices;
}


$programmingMovies = [
    'day1' => [
        '10h' => 'Avatar',
        '14h' => 'Wonder Woman',
        '20h' => 'Sixième sens'
    ],
    'day2' => [
        '10h' => 'Labyrinthe',
        '14h' => 'La ligne verte',
        '20h' => 'The mask'
    ],
    'day3' => [
        '10h' => 'Incassable',
        '14h' => 'BeetleJuice',
        '20h' => 'Pirates des caraïbes 1'
    ],
    'day4' => [
        '10h' => 'King Kong',
        '14h' => 'Sixème sens',
        '20h' => 'Avatar'
    ],
    'day5' => [
        '10h' => 'Wonder Woman',
        '14h' => 'Labyrinthe',
        '20h' => 'La ligne verte'
    ],
    'day6' => [
        '10h' => 'Pirates des caraïbes 1',
        '14h' => 'Incassable',
        '20h' => 'BeetleJuice'
    ],
    'day7' => [
        '10h' => 'the mask',
        '14h' => 'Avatar',
        '20h' => 'King Kong'
    ],
];

$nextMovies = [
    ' E.T. l\'extraterrestre',
    ' Superman',
    ' Alice aux pays des merveilles',
    ' L\'étrange histoire de Benjamin Button',
    ' Jumanji',
    ' Un jour sans fin',
    ' l\'effet papillon',
    ' Twillight, chapitre 1 : Fascination',
    ' Entretien avec un vampire',
    ' Le monde de Narnia, chapitre 1'
];
