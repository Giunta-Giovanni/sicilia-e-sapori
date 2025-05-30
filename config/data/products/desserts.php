<?php

$categoryId = 12;
return [
    [
        "category_id" => $categoryId,
        "name_it" => "Nutellina",
        "name_eng" => "Nutellina",
        "description_it" => "Nutella, noccioline, zucchero a velo.",
        "description_eng" => "Nutella, peanuts, powdered sugar.",
        "primary_price" => "5.00",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => true, // La Nutellina è vegetariana
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Speciale",
        "name_eng" => "Special",
        "description_it" => "Nutella, ricotta, noccioline.",
        "description_eng" => "Nutella, ricotta, peanuts.",
        "primary_price" => "6.50",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => true, // "Speciale" è vegetariano
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Cassata",
        "name_eng" => "Cassata",
        "description_it" => "Ricotta, scaglie di cioccolato, cannella.",
        "description_eng" => "Ricotta, chocolate shavings, cinnamon.",
        "primary_price" => "6.50",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => true, // La Cassata è vegetariana
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Golosa",
        "name_eng" => "Golosa",
        "description_it" => "Crema di pistacchio, granella di pistacchio, ricotta.",
        "description_eng" => "Pistachio cream, pistachio crunch, ricotta.",
        "primary_price" => "7.00",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => true, // "Golosa" è vegetariana
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Dolce Idea",
        "name_eng" => "Sweet Idea",
        "description_it" => "Strisce di pasta di pizza fritte con: Nutella e noccioline O Crema di pistacchio, ricotta, granella di pistacchio.",
        "description_eng" => "Fried pizza dough strips with: Nutella and peanuts OR Pistachio cream, ricotta, and pistachio crunch.",
        "primary_price" => "5.00",
        "secondary_price" => "7.00",
        "is_spicy" => false,
        "is_vegetarian" => true, // "Dolce Idea" è vegetariana
        "type" => "food"
    ]
];
