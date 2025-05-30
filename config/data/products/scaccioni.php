<?php

$categoryId = 8;

return [
    [
        "category_id" => $categoryId,
        "name_it" => "n° 1",
        "name_eng" => "n° 1",
        "description_it" => "Fiordilatte, funghi piccanti, salame piccante, pomodori fresco, olio evo, origano.",
        "description_eng" => "Fresh mozzarella, spicy mushrooms, spicy salami, fresh tomatoes, extra virgin olive oil, oregano.",
        "primary_price" => "7.00",
        "secondary_price" => null,
        "is_spicy" => true, // Contiene funghi piccanti e salame piccante
        "is_vegetarian" => false, // Contiene salame piccante
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "n° 2",
        "name_eng" => "n° 2",
        "description_it" => "Fiordilatte, cotto senza conservanti, funghi champignon, olio evo, origano.",
        "description_eng" => "Fresh mozzarella, ham without preservatives, champignon mushrooms, extra virgin olive oil, oregano.",
        "primary_price" => "7.00",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene cotto senza conservanti
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "n° 3",
        "name_eng" => "n° 3",
        "description_it" => "Mozzarella di bufala, mortadella, granella di pistacchio, olio evo, origano.",
        "description_eng" => "Buffalo mozzarella, mortadella, pistachio granules, extra virgin olive oil, oregano.",
        "primary_price" => "8.50",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene mortadella
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "n° 4",
        "name_eng" => "n° 4",
        "description_it" => "Fiordilatte, porchetta fatta in casa, lattuga, pomodoro fresco, olio evo, origano.",
        "description_eng" => "Fresh mozzarella, homemade porchetta, lettuce, fresh tomato, extra virgin olive oil, oregano.",
        "primary_price" => "8.50",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene porchetta fatta in casa
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "n° 5",
        "name_eng" => "n° 5",
        "description_it" => "Fiordilatte, prosciutto crudo, lattuga, pomodoro fresco, olio evo, origano.",
        "description_eng" => "Fresh mozzarella, raw ham, lettuce, fresh tomato, extra virgin olive oil, oregano.",
        "primary_price" => "8.50",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene prosciutto crudo
        "type" => "food"
    ]
];
