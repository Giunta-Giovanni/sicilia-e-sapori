<?php

$foods = config('data.foods');

$foodmax = count($foods[0]);


$beverages = config('data.beverages');

$beveragemax = count($beverages[0]);


// creare un array di valori 0 e 1
$product = [];
// ciclare tot di volte in base al numero di cibi
// pushare il risultato dentro all'array
for ($i = 0; $i < $foodmax; $i++) {
    $items = [$i + 1, null];
    array_push($product, $items);
};
for ($i = 0; $i < $beveragemax; $i++) {
    // $index = $i + 1;
    $items = [null, $i + 1];
    array_push($product, $items);
};
// ciclare tot di volte in base al numero di bevande

return $product;
