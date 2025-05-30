<?php

$categoryId = 10; // Definisco la variabile categoryId come richiesto

return [
    [
        "category_id" => $categoryId,
        "name_it" => "Tagliere di Salumi e Formaggi",
        "name_eng" => "Charcuterie and Cheese Board",
        "description_it" => "Salumi e formaggi serviti con verdure grigliate, pizza fritta e focaccia bianca.",
        "description_eng" => "Cured meats and cheeses served with grilled vegetables, fried pizza dough, and white focaccia.",
        "primary_price" => "0.00", // Prezzo da verificare se è 0.00 o da compilare
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene salumi
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Tagliata di Manzo",
        "name_eng" => "Sliced Grilled Beef",
        "description_it" => "Cottura a scelta, servita con contorno a scelta.",
        "description_eng" => "Cooked to your preference, served with a side of your choice.",
        "primary_price" => "0.00", // Prezzo da verificare se è 0.00 o da compilare
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene manzo
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Tagliata di Cavallo",
        "name_eng" => "Sliced Grilled Horse Meat",
        "description_it" => "Cottura a scelta, servita con contorno a scelta.",
        "description_eng" => "Choice of cooking, served with your choice of side.",
        "primary_price" => "0.00", // Prezzo da verificare se è 0.00 o da compilare
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene carne di cavallo
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Tagliata di Pollo",
        "name_eng" => "Sliced Grilled Chicken",
        "description_it" => "Servita con contorno a scelta.",
        "description_eng" => "Served with a side of your choice.",
        "primary_price" => "0.00", // Prezzo da verificare se è 0.00 o da compilare
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene pollo
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Tagliata di Tonno Fresco",
        "name_eng" => "Sliced Fresh Tuna",
        "description_it" => "Cottura a scelta, servita con contorno a scelta.",
        "description_eng" => "Cooked to your preference, served with a side of your choice.",
        "primary_price" => "0.00", // Prezzo da verificare se è 0.00 o da compilare
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene tonno
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Polpo e Patate",
        "name_eng" => "Octopus with Potatoes",
        "description_it" => "Tentacoli di polpo grigliato, macco di fave, patate fatte in casa, olio evo, prezzemolo, pomodorini infornati.",
        "description_eng" => "Grilled octopus tentacles, fava bean purée, homemade potatoes, extra virgin olive oil, parsley, and oven-roasted cherry tomatoes.",
        "primary_price" => "0.00", // Prezzo da verificare se è 0.00 o da compilare
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene polpo
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Frittura di Calamari",
        "name_eng" => "Fried Calamari",
        "description_it" => null, // La descrizione è null nell'input, mantenerla così o chiedere se c'è un'alternativa?
        "description_eng" => "", // La descrizione è vuota nell'input, mantenerla così o chiedere se c'è un'alternativa?
        "primary_price" => "0.00", // Prezzo da verificare se è 0.00 o da compilare
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene calamari
        "type" => "food"
    ]
];
