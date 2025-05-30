<?php

$categoryId = 1;
return [
    [
        "category_id" => $categoryId,
        "name_it" => "Mediterranea",
        "name_eng" => "Mediterranea",
        "description_it" => "Fior di latte, zucchine julienne, gamberi, pomodorini, pangrattato aromatizzato al limone, prezzemolo, olio evo e basilico.",
        "description_eng" => "Fior di latte, julienned zucchini, shrimp, cherry tomatoes, lemon-flavored breadcrumbs, parsley, extra virgin olive oil, and basil.",
        "primary_price" => "9.00",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene gamberi (shrimp)
        "type" => "food" // Aggiunto il campo type
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Carbonara Gourmet",
        "name_eng" => "Carbonara Gourmet",
        "description_it" => "Fior di latte, guanciale, cipollotto fresco grigliato, crema carbonara al tuorlo d'uovo e pecorino, scaglie di pecorino romano, pepe nero, olio evo, origano.",
        "description_eng" => "Fior di latte, guanciale, grilled fresh spring onion, carbonara cream with egg yolk and pecorino, pecorino romano shavings, black pepper, extra virgin olive oil, oregano.",
        "primary_price" => "11.00",
        "secondary_price" => null,
        "is_spicy" => false, // Il pepe nero di solito non la rende "spicy" in senso piccante.
        "is_vegetarian" => false, // Contiene guanciale
        "type" => "food" // Aggiunto il campo type
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Polpo e Patate",
        "name_eng" => "Octopus and Potatoes",
        "description_it" => "Fior di latte, polpo arrosto, macco di fave, patate fritte fatte in casa, pomodorino infornato, olio evo, prezzemolo.",
        "description_eng" => "Fior di latte, roasted octopus, broad bean puree, homemade french fries, oven-roasted cherry tomatoes, extra virgin olive oil, parsley.",
        "primary_price" => "14.00",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene polpo (octopus)
        "type" => "food" // Aggiunto il campo type
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Romanella",
        "name_eng" => "Romanella",
        "description_it" => "Fior di latte, porchetta fatta in casa, patate arrosto, stracciatella, pepe nero, olio evo, origano.",
        "description_eng" => "Fior di latte, homemade porchetta, roasted potatoes, stracciatella, black pepper, extra virgin olive oil, oregano.",
        "primary_price" => "11.00",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene porchetta
        "type" => "food" // Aggiunto il campo type
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Tonnara agli Agrumi",
        "name_eng" => "Tonnara agli Agrumi",
        "description_it" => "Fior di latte, tataki di tonno, rucola, scaglie di grana, confettura di agrumi e basilico, buccia di arance e limoni grattugiata, olio evo, prezzemolo.",
        "description_eng" => "Fresh mozzarella, tuna tataki, arugula, grana cheese shavings, citrus and basil jam, grated orange and lemon zest, extra virgin olive oil, parsley.",
        "primary_price" => "15.00",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene tonno (tuna)
        "type" => "food" // Aggiunto il campo type
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Sicciara",
        "name_eng" => "Sicciara",
        "description_it" => "Sugo al nero di seppia, mozzarella di bufala, seppia, pomodorino, pepe nero, olio evo, prezzemolo.",
        "description_eng" => "Squid ink sauce, buffalo mozzarella, cuttlefish, cherry tomato, black pepper, extra virgin olive oil, parsley.",
        "primary_price" => "15.00",
        "secondary_price" => null,
        "is_spicy" => false, // Il pepe nero di solito non la rende "spicy" in senso piccante.
        "is_vegetarian" => false, // Contiene seppia (cuttlefish)
        "type" => "food" // Aggiunto il campo type
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Montanara",
        "name_eng" => "Montanara",
        "description_it" => "Fior di latte, funghi champignon, salsiccia, pomodorino, prezzemolo, glassa di Nero d'Avola, olio evo, origano.",
        "description_eng" => "Fresh mozzarella, champignon mushrooms, sausage, cherry tomato, parsley, Nero d'Avola glaze, extra virgin olive oil, oregano.",
        "primary_price" => "10.00",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene salsiccia (sausage)
        "type" => "food" // Aggiunto il campo type
    ]
];
