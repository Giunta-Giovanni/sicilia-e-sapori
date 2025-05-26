<?php
$directory = __DIR__ . '/foods';
$files = glob($directory . '/*.php');

// Inizializza l'array associativo
$foods = [];

// Per ogni file nella cartella
foreach ($files as $file) {
    // Escludi il file corrente (per evitare ricorsione)
    if ($file === __FILE__) {
        continue;
    }
    // Includi il file e ottieni il suo array
    $foodsSection = include $file;
    // Se è un array, uniscilo all'array principale
    if (is_array($foodsSection)) {
        // Usa il nome del file (senza estensione) come chiave
        $key = basename($file, '.php');
        $foods[$key] = $foodsSection;
    }
}

$items = [];
foreach ($foods as $food) {
    $items = array_merge($items, $food);
};
// Ora $foods contiene tutti i dati dei file come array associativo
return [$items];
