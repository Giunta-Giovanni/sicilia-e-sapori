<?php

$categoryId = 9;
return [
    [
        "category_id" => $categoryId,
        "name_it" => "Alfio",
        "name_eng" => "Alfio",
        "description_it" => "Sfilacci di cavallo, emmenthal, patatine fritte, cipolla grigliata, ketchup, maionese, olio evo, sale, servito con patatine.",
        "description_eng" => "Shredded horse meat, Emmental cheese, French fries, grilled onions, ketchup, mayonnaise, extra virgin olive oil, salt, served with fries.",
        "primary_price" => "0.00", // Prezzo da verificare se è 0.00 o da compilare
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene sfilacci di cavallo
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Rosario",
        "name_eng" => "Rosario",
        "description_it" => "Polpette di cavallo, lattuga, pomodoro, fiordilatte, ketchup, maionese, olio evo, sale, servito con patatine.",
        "description_eng" => "Horse meatballs, lettuce, tomato, fiordilatte cheese, ketchup, mayonnaise, extra virgin olive oil, salt, served with fries.",
        "primary_price" => "0.00", // Prezzo da verificare se è 0.00 o da compilare
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene polpette di cavallo
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Carolina",
        "name_eng" => "Carolina",
        "description_it" => "Pulled pork fatto in casa, fiordilatte, cipolla grigliata, patatine fritte, salsa barbecue, olio evo, sale, servito con patatine.",
        "description_eng" => "Homemade pulled pork, fiordilatte cheese, grilled onions, French fries, barbecue sauce, extra virgin olive oil, salt, served with fries.",
        "primary_price" => "0.00", // Prezzo da verificare se è 0.00 o da compilare
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene pulled pork
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Luciano",
        "name_eng" => "Luciano",
        "description_it" => "Doppia porchetta, fiordilatte, funghi, patatine frittte, ketchup, maionese, olio evo, sale, servito con patatine.",
        "description_eng" => "Double porchetta, fiordilatte cheese, mushrooms, French fries, ketchup, mayonnaise, extra virgin olive oil, salt, served with fries.",
        "primary_price" => "0.00", // Prezzo da verificare se è 0.00 o da compilare
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene porchetta
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Trump",
        "name_eng" => "Trump",
        "description_it" => "Hamburger di chianina, bacon, fiordilatte, salsa carbonara al pecorino, ketchup, olio evo, sale, servito con patatine.",
        "description_eng" => "Chianina beef burger, bacon, fiordilatte cheese, pecorino carbonara sauce, ketchup, extra virgin olive oil, salt, served with fries.",
        "primary_price" => "0.00", // Prezzo da verificare se è 0.00 o da compilare
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene hamburger di chianina e bacon
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Pino dei Palazzi",
        "name_eng" => "Pino dei Palazzi",
        "description_it" => "Salsiccia, fiordilatte, lattuga, pomodoro, patatine fritte, olio evo, sale, servito con patatine.",
        "description_eng" => "Sausage, fiordilatte cheese, lettuce, tomato, French fries, extra virgin olive oil, salt, served with fries.",
        "primary_price" => "0.00", // Prezzo da verificare se è 0.00 o da compilare
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene salsiccia
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Semivegetariano",
        "name_eng" => "Semivegetariano",
        "description_it" => "Braciola o petto di pollo, fiordilatte, lattuga, pomodoro, ketchup, maionese, olio evo, sale, servito con patatine.",
        "description_eng" => "Grilled pork chop or chicken breast, fiordilatte cheese, lettuce, tomato, ketchup, mayonnaise, extra virgin olive oil, salt, served with fries.",
        "primary_price" => "0.00", // Prezzo da verificare se è 0.00 o da compilare
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene braciola o petto di pollo
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Caprese Special",
        "name_eng" => "Caprese Special",
        "description_it" => "Mozzarella di bufala, lattuga, pomodoro, olio evo, sale, servito con patatine.",
        "description_eng" => "Buffalo mozzarella, lettuce, tomato, extra virgin olive oil, salt, served with fries.",
        "primary_price" => "0.00", // Prezzo da verificare se è 0.00 o da compilare
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => true, // Non contiene carne o pesce
        "type" => "food"
    ]
];
