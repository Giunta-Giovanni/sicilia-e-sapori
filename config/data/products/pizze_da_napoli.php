<?php

$categoryId = 3;
return [
    [
        "category_id" => $categoryId,
        "name_it" => "Calzone Fritto Spaccanapoli",
        "name_eng" => "Fried Calzone Spaccanapoli",
        "description_it" => "Ricotta, fior di latte, pomodoro, salame Napoli, olio evo, basilico, origano.",
        "description_eng" => "Ricotta, fior di latte, tomato, Napoli salami, extra virgin olive oil, basil, oregano.",
        "primary_price" => "9.00",
        "secondary_price" => null,
        "is_spicy" => false, // Salame Napoli di solito non è considerato spicy in questo contesto
        "is_vegetarian" => false, // Contiene Salame Napoli
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Calzone Fritto Vesuvio",
        "name_eng" => "Fried Calzone Vesuvio",
        "description_it" => "Ricotta, fior di latte, pomodoro, prosciutto cotto, olio evo, basilico, origano.",
        "description_eng" => "Ricotta, fior di latte, tomato, cooked ham, extra virgin olive oil, basil, oregano.",
        "primary_price" => "9.00",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene prosciutto cotto
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Margherita Ruota di Carro",
        "name_eng" => "Margherita Ruota di Carro",
        "description_it" => "Pomodoro, fior di latte, olio evo, basilico.",
        "description_eng" => "Tomato, fior di latte, extra virgin olive oil, basil.",
        "primary_price" => "6.00",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => true, // Non contiene carne, pesce o frutti di mare.
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Vomero Ruota di Carro",
        "name_eng" => "Vomero Ruota di Carro",
        "description_it" => "Pomodoro, fior di latte, salsiccia fresca, friarielli, olio evo, basilico.",
        "description_eng" => "Tomato, fior di latte, fresh sausage, friarielli, extra virgin olive oil, basil.",
        "primary_price" => "9.00",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene salsiccia fresca
        "type" => "food"
    ]
];
