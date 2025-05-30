<?php

$categoryId = 2;
return [
    [
        "category_id" => $categoryId,
        "name_it" => "Bologna",
        "name_eng" => "Bologna",
        "description_it" => "Mortadella, fior di latte, stracciatella, granella di pistacchio, olio evo, origano.",
        "description_eng" => "Mortadella, fior di latte, stracciatella, pistachio crunch, extra virgin olive oil, oregano.",
        "primary_price" => "10.00",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene Mortadella.
        "type" => "food" // Aggiunto il campo type
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Ariccia",
        "name_eng" => "Ariccia",
        "description_it" => "Porchetta home made, fior di latte, crema di patate, patate al forno, olio evo, origano.",
        "description_eng" => "Homemade porchetta, fior di latte, potato cream, roasted potatoes, extra virgin olive oil, oregano.",
        "primary_price" => "11.00",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene Porchetta.
        "type" => "food" // Aggiunto il campo type
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Miami",
        "name_eng" => "Miami",
        "description_it" => "Fior di latte, pulled pork fatto in casa, cipolla alla brace, patatine fritte, salsa barbecue, olio evo, origano.",
        "description_eng" => "Fior di latte, homemade pulled pork, grilled onions, French fries, barbecue sauce, extra virgin olive oil, oregano.",
        "primary_price" => "11.00",
        "secondary_price" => null,
        "is_spicy" => false, // La salsa barbecue può essere piccante, ma non è specificato. Assumo non piccante di default.
        "is_vegetarian" => false, // Contiene Pulled Pork.
        "type" => "food" // Aggiunto il campo type
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Oslo",
        "name_eng" => "Oslo",
        "description_it" => "Fior di latte, salmone affumicato, crema di mascarpone, rucola, olio evo.",
        "description_eng" => "Fior di latte, smoked salmon, mascarpone cream, arugula, extra virgin olive oil.",
        "primary_price" => "11.00",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene Salmone affumicato.
        "type" => "food" // Aggiunto il campo type
    ]
];
