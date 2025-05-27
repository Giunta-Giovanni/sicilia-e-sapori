<?php
$directory = __DIR__ . '/beverages';
$files = glob($directory . '/*.php');

// Inizializza l'array associativo
$beverages = [];

// Per ogni file nella cartella
foreach ($files as $file) {
    // Escludi il file corrente (per evitare ricorsione)
    if ($file === __FILE__) {
        continue;
    }
    // Includi il file e ottieni il suo array
    $beveragesSection = include $file;
    // Se è un array, uniscilo all'array principale
    if (is_array($beveragesSection)) {
        // Usa il nome del file (senza estensione) come chiave
        $key = basename($file, '.php');
        $beverages[$key] = $beveragesSection;
    }
}

$beveragesArray = [];
foreach ($beverages as $beverage) {
    $beveragesArray = array_merge($beveragesArray, $beverage);
};
return [$beveragesArray];
