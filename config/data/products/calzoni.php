<?php

$categoryId = 7; // Definisco la variabile categoryId come richiesto

return [
    [
        "category_id" => $categoryId,
        "name_it" => "Calzone Classico",
        "name_eng" => "Traditional Calzone",
        "description_it" => "Pomodoro, mozzarella, cotto senza conservanti, funghi champignon, olio evo, origano.",
        "description_eng" => "Tomato, mozzarella, preservative-free cooked ham, champignon mushrooms, extra virgin olive oil, oregano.",
        "primary_price" => "7.50",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene cotto senza conservanti
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Calzone Vegetariano",
        "name_eng" => "Vegetarian Calzone",
        "description_it" => "Mozzarella, spinaci, olive, carciofi, funghi, olio evo, origano.",
        "description_eng" => "Mozzarella, spinach, olives, artichokes, mushrooms, extra virgin olive oil, oregano.",
        "primary_price" => "7.00",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => true, // Non contiene carne o pesce
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Calzone del Salumiere",
        "name_eng" => "Butcher’s Calzone",
        "description_it" => "Mozzarella, mortadella, emmenthal, funghi champignon, olio evo, origano.",
        "description_eng" => "Mozzarella, mortadella, Emmental cheese, champignon mushrooms, extra virgin olive oil, oregano.",
        "primary_price" => "7.50",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene mortadella
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Calzone Piccante",
        "name_eng" => "Spicy Calzone",
        "description_it" => "Doppia mozzarella, mix di salumi, peperoncino, pomodoro fresco a cubetti, olio evo, origano.",
        "description_eng" => "Double mozzarella, mixed cured meats, chili pepper, fresh diced tomatoes, extra virgin olive oil, oregano.",
        "primary_price" => "7.50",
        "secondary_price" => null,
        "is_spicy" => true, // Contiene peperoncino
        "is_vegetarian" => false, // Contiene mix di salumi
        "type" => "food"
    ]
];
