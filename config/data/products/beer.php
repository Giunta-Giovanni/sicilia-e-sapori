<?php

$categoryId = 14;

return [
    [
        "category_id" => $categoryId,
        "name_it" => "Birra alla Spina - Poretti 4 Luppoli (Bionda)",
        "name_eng" => "Draft Beer - Poretti 4 Luppoli (Blonde Ale)",
        "description_it" => "",
        "description_eng" => "",
        "primary_price" => "3.50",
        "secondary_price" => "5.00",
        'is_alcholic' => true,
        'alcohol_volume' => 5.5, // Typical alcohol volume for a blonde ale
        'primary_size' => 200, // Assuming 200ml for the smaller price
        'secondary_size' => 400, // Assuming 400ml for the larger price
        "type" => "drink"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Birra alla Spina - Poretti 6 Luppoli (Rossa)",
        "name_eng" => "Draft Beer - Poretti 6 Luppoli (Red Ale)",
        "description_it" => "",
        "description_eng" => "",
        "primary_price" => "4.00",
        "secondary_price" => "6.00",
        'is_alcholic' => true,
        'alcohol_volume' => 6.5, // Typical alcohol volume for a red ale
        'primary_size' => 200, // Assuming 200ml for the smaller price
        'secondary_size' => 400, // Assuming 400ml for the larger price
        "type" => "drink"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Birra Moretti",
        "name_eng" => "Moretti Beer",
        "description_it" => "66 cl",
        "description_eng" => "66 cl",
        "primary_price" => "6.00",
        "secondary_price" => null,
        'is_alcholic' => true,
        'alcohol_volume' => 4.6, // Standard alcohol volume for Birra Moretti
        'primary_size' => 660, // 66 cl = 660 ml
        'secondary_size' => null,
        "type" => "drink"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Birra Semedorato",
        "name_eng" => "Semedorato Beer",
        "description_it" => "66 cl",
        "description_eng" => "66 cl",
        "primary_price" => "6.00",
        "secondary_price" => null,
        'is_alcholic' => true,
        'alcohol_volume' => 4.7, // Typical alcohol volume for Semedorato (standard lager)
        'primary_size' => 660, // 66 cl = 660 ml
        'secondary_size' => null,
        "type" => "drink"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Birra Artigianale BAC di Pozzallo",
        "name_eng" => "BAC Craft Beer from Pozzallo",
        "description_it" => "33 cl",
        "description_eng" => "33 cl",
        "primary_price" => "6.00",
        "secondary_price" => null,
        'is_alcholic' => true,
        'alcohol_volume' => 5.0, // Common alcohol volume for craft beers if not specified
        'primary_size' => 330, // 33 cl = 330 ml
        'secondary_size' => null,
        "type" => "drink"
    ]
];
