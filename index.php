<?php

include_once __DIR__ . '/components/PetFood.php';
include_once __DIR__ . '/components/Suit.php';
include_once __DIR__ . '/components/Technology.php';
include_once __DIR__ . '/components/User.php';

$paramCrochete = [
    'name' => 'Crochette di manzo',
    'description' => 'Le migliori crochette del mercato pet',
    'price' => 29.98,
    'weight' => 20,
    'volume' => 100,
    'brand' => 'Miracoli',
    'categories' => 'food',
    'poster' => 'htp://sdaj.rr/food/pet',
    'dateExpication' => '30/10/2022'
];

$crocchette = new PetFood($paramCrochete);
// var_dump($crocchette);

$paramJacket = [
    'name' => 'Giacca invernale',
    'description' => 'Giacca termo eletrica riscaldavile',
    'price' => 320,
    'weight' => 8.65,
    'volume' => 40,
    'brand' => 'Rike',
    'categories' => 'clothes',
    'poster' => 'htp://sdaj.rr/clothes/man',
    'color' => 'rosso scuro',
    'size' => 'XL'
];

$jacket = new Suit($paramJacket);
// var_dump($jacket);

$paramKeyboard = [
    'name' => 'Tastiera meccanica',
    'description' => 'Tastiera a basso rumore di tasti',
    'price' => 209.99,
    'weight' => 0.44,
    'volume' => 2,
    'brand' => 'HT',
    'categories' => 'technology',
    'poster' => 'htp://sdaj.rr/technology/tec',
    'color' => 'nero',
    'nrKeys' => 68,
    'led' => true
];

$keyboard = new Technology($paramKeyboard);
// var_dump($keyboard);

$paramCliente1 = [
    'name' => 'Baluma Paolo',
    'nrProduct' => [
        $crocchette,
        $jacket,
        $keyboard
    ]
];

$cliente1 = new User($paramCliente1);

var_dump($cliente1);
