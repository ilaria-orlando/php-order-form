<?php

// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
declare(strict_types=1);

// We are going to use session variables so we need to enable sessions
session_start();

// Use this function when you need to need an overview of these variables
function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

// TODO: provide some products (you may overwrite the example)
$products = [
    ['name' => 'Moon charged power crystal', 'price' => 15.99],
    ['name' => 'Yin & yang ceremonial chalice set', 'price' => 24.99],
    ['name' => 'Space rock energy cleansing dust (150gr)', 'price' => 17.99],
    ['name' => 'Sacrificial obsidian dagger', 'price' => 34.99],
    ['name' => 'Spritual guide summoning whistle', 'price' => 12.99],
];

$totalValue = 0;


require 'form-view.php';