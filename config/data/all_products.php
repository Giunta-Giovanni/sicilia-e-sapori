<?php
$directory = __DIR__ . '/products';
$files = glob($directory . '/*.php');

// Inizializza l'array associativo
$products = [];

// Per ogni file nella cartella
foreach ($files as $file) {
    // Escludi il file corrente (per evitare ricorsione)
    if ($file === __FILE__) {
        continue;
    }
    // Includi il file e ottieni il suo array
    $productsSection = include $file;
    // Se è un array, uniscilo all'array principale
    if (is_array($productsSection)) {
        // Usa il nome del file (senza estensione) come chiave
        $key = basename($file, '.php');
        $products[$key] = $productsSection;
    }
}

$productsArray = [];
foreach ($products as $product) {
    $productsArray = array_merge($productsArray, $product);
};

return $productsArray;
