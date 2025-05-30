<?php

$categoryId = 4;

return [
    [
        "category_id" => $categoryId,
        "name_it" => "007",
        "name_eng" => "007",
        "description_it" => "Pomodoro, mozzarella, cotto senza conservanti, würstel, uovo, olive, piselli, olio evo, origano.",
        "description_eng" => "Tomato, mozzarella, ham without preservatives, sausages, egg, olives, peas, extra virgin olive oil, oregano.",
        "primary_price" => "7.50",
        "secondary_price" => "18.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene cotto e würstel
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Quattro Stagioni",
        "name_eng" => "Four Seasons",
        "description_it" => "Pomodoro, mozzarella, cotto senza conservanti, funghi champignon, olive, carciofini, olio evo, origano.",
        "description_eng" => "Tomato, mozzarella, ham without preservatives, champignon mushrooms, olives, baby artichokes, extra virgin olive oil, oregano.",
        "primary_price" => "7.00",
        "secondary_price" => "18.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene cotto
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Affumicata",
        "name_eng" => "Smoked",
        "description_it" => "Pomodoro, mozzarella, pancetta affumicata, provola affumicata, olio evo, origano.",
        "description_eng" => "Tomato, mozzarella, smoked pancetta, smoked provola cheese, extra virgin olive oil, oregano.",
        "primary_price" => "7.00",
        "secondary_price" => "18.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene pancetta affumicata
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Bresaola",
        "name_eng" => "Bresaola",
        "description_it" => "Pomodoro, mozzarella, bresaola, rucola, scaglie di grana, olio evo, origano.",
        "description_eng" => "Tomato, mozzarella, bresaola, arugula, Grana Padano shavings, extra virgin olive oil, oregano.",
        "primary_price" => "8.50",
        "secondary_price" => "19.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene bresaola
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Chips",
        "name_eng" => "Chips",
        "description_it" => "Pomodoro, mozzarella, patatine, olio evo, origano.",
        "description_eng" => "Tomato, mozzarella, fries, extra virgin olive oil, oregano.",
        "primary_price" => "6.00",
        "secondary_price" => "15.00",
        "is_spicy" => false,
        "is_vegetarian" => true, // Non contiene carne o pesce
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Capricciosa",
        "name_eng" => "Capricciosa",
        "description_it" => "Pomodoro, mozzarella, cotto senza conservanti, funghi champignon, uovo, piselli, olive, olio evo, origano.",
        "description_eng" => "Tomato, mozzarella, ham without preservatives, champignon mushrooms, egg, peas, olives, extra virgin olive oil, oregano.",
        "primary_price" => "7.50",
        "secondary_price" => "18.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene cotto
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Inglese",
        "name_eng" => "Inglese",
        "description_it" => "Pomodoro, mozzarella, bacon, uovo sbriciolato, cipolla, olio evo, origano.",
        "description_eng" => "Tomato, mozzarella, bacon, scrambled egg, onion, extra virgin olive oil, oregano.",
        "primary_price" => "7.00",
        "secondary_price" => "17.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene bacon
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Margherita",
        "name_eng" => "Margherita",
        "description_it" => "Pomodoro, mozzarella, olio evo, origano.",
        "description_eng" => "Tomato, mozzarella, extra virgin olive oil, oregano.",
        "primary_price" => "5.00",
        "secondary_price" => "12.00",
        "is_spicy" => false,
        "is_vegetarian" => true, // Non contiene carne o pesce
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Norma",
        "name_eng" => "Norma",
        "description_it" => "Pomodoro, mozzarella, melanzana fritta, ricotta salata, olio evo, origano.",
        "description_eng" => "Tomato, mozzarella, fried eggplant, salted ricotta, extra virgin olive oil, oregano.",
        "primary_price" => "6.00",
        "secondary_price" => "16.50",
        "is_spicy" => false,
        "is_vegetarian" => true, // Non contiene carne o pesce
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Monterosso",
        "name_eng" => "Monterosso",
        "description_it" => "Pomodoro, mozzarella, misto funghi, pane grattugiato, grana padano, olio evo, origano.",
        "description_eng" => "Tomato, mozzarella, mixed mushrooms, breadcrumbs, grana cheese, extra virgin olive oil, oregano.",
        "primary_price" => "7.50",
        "secondary_price" => "18.00",
        "is_spicy" => false,
        "is_vegetarian" => true, // Non contiene carne o pesce
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Parma",
        "name_eng" => "Parma",
        "description_it" => "Pomodoro, mozzarella, crudo di Parma, rucola, scaglie di grana, olio evo, origano.",
        "description_eng" => "Tomato, mozzarella, Parma ham, arugula, grana cheese shavings, extra virgin olive oil, oregano.",
        "primary_price" => "8.50",
        "secondary_price" => "19.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene crudo di Parma
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Porcini",
        "name_eng" => "Porcini",
        "description_it" => "Pomodoro, mozzarella, funghi porcini, prezzemolo, olio evo, origano.",
        "description_eng" => "Tomato, mozzarella, porcini mushrooms, parsley, extra virgin olive oil, oregano.",
        "primary_price" => "7.50",
        "secondary_price" => "18.00",
        "is_spicy" => false,
        "is_vegetarian" => true, // Non contiene carne o pesce
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Parmigiana",
        "name_eng" => "Parmigiana",
        "description_it" => "Pomodoro, mozzarella, melanzana fritta, cotto senza conservanti, uovo, grana, olio evo, origano.",
        "description_eng" => "Tomato, mozzarella, fried eggplant, ham without preservatives, egg, grana cheese, extra virgin olive oil, oregano.",
        "primary_price" => "7.50",
        "secondary_price" => "18.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene cotto
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Ragusana",
        "name_eng" => "Ragusana",
        "description_it" => "Pomodoro, mozzarella, cacio cavallo ragusano semi stagionato, zucchine grigliate, salsiccia fresca, olio evo, origano.",
        "description_eng" => "Tomato, mozzarella, semi-aged caciocavallo ragusano cheese, grilled zucchini, fresh sausage, extra virgin olive oil, oregano.",
        "primary_price" => "7.50",
        "secondary_price" => "18.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene salsiccia fresca
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Vegetariana",
        "name_eng" => "Vegetarian",
        "description_it" => "Pomodoro, mozzarella, melanzane grigliate, zucchine grigliate, funghi champignon, olio evo, origano.",
        "description_eng" => "Tomato, mozzarella, grilled eggplant, grilled zucchini, champignon mushrooms, extra virgin olive oil, oregano.",
        "primary_price" => "7.00",
        "secondary_price" => "17.00",
        "is_spicy" => false,
        "is_vegetarian" => true, // Non contiene carne o pesce
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Bufala",
        "name_eng" => "Bufala",
        "description_it" => "Pomodoro, mozzarella di bufala, olio evo, origano.",
        "description_eng" => "Tomato, buffalo mozzarella, extra virgin olive oil, oregano.",
        "primary_price" => "7.00",
        "secondary_price" => "17.00",
        "is_spicy" => false,
        "is_vegetarian" => true, // Non contiene carne o pesce
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Bufalata",
        "name_eng" => "Bufalata",
        "description_it" => "Pomodoro, mozzarella di bufala, salame di bufala, olio evo, origano.",
        "description_eng" => "Tomato, buffalo mozzarella, buffalo salami, extra virgin olive oil, oregano.",
        "primary_price" => "9.00",
        "secondary_price" => "21.00",
        "is_spicy" => false, // Salame di bufala di solito non è piccante
        "is_vegetarian" => false, // Contiene salame di bufala
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Presidente",
        "name_eng" => "Presidente",
        "description_it" => "Pomodoro, mozzarella di bufala, crudo di parma, olio evo, origano.",
        "description_eng" => "Tomato, buffalo mozzarella, Parma ham, extra virgin olive oil, oregano.",
        "primary_price" => "8.50",
        "secondary_price" => "19.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene crudo di Parma
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Positano",
        "name_eng" => "Positano",
        "description_it" => "Pomodoro, mozzarella di bufala, salsiccia, friarielli, olio evo, origano.",
        "description_eng" => "Tomato, buffalo mozzarella, sausage, broccoli rabe, extra virgin olive oil, oregano.",
        "primary_price" => "9.00",
        "secondary_price" => "21.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene salsiccia
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Terra e Mare",
        "name_eng" => "Terra e Mare",
        "description_it" => "Pomodoro, mozzarella di bufala, gamberi, rucola, olio evo, origano.",
        "description_eng" => "Tomato, buffalo mozzarella, shrimp, arugula, extra virgin olive oil, oregano.",
        "primary_price" => "9.00",
        "secondary_price" => "21.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene gamberi
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Caliente",
        "name_eng" => "Caliente",
        "description_it" => "Pomodoro, mozzarella, salame piccante, funghi piccanti, provola affumicata.",
        "description_eng" => "Tomato, mozzarella, spicy salami, spicy mushrooms, smoked provola cheese.",
        "primary_price" => "7.00",
        "secondary_price" => "17.00",
        "is_spicy" => true, // Contiene salame piccante e funghi piccanti
        "is_vegetarian" => false, // Contiene salame piccante
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Caronte",
        "name_eng" => "Caronte",
        "description_it" => "Pomodoro, mozzarella, carne di cavallo, funghi piccanti, emmenthal, olio evo, origano.",
        "description_eng" => "Tomato, mozzarella, horse meat, spicy mushrooms, Emmental cheese, extra virgin olive oil, oregano.",
        "primary_price" => "9.50",
        "secondary_price" => "22.00",
        "is_spicy" => true, // Contiene funghi piccanti
        "is_vegetarian" => false, // Contiene carne di cavallo
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Diavola",
        "name_eng" => "Diavola",
        "description_it" => "Pomodoro, mozzarella, salame piccante, olio evo, origano.",
        "description_eng" => "Tomato, mozzarella, spicy salami, extra virgin olive oil, oregano.",
        "primary_price" => "6.00",
        "secondary_price" => "15.00",
        "is_spicy" => true, // Contiene salame piccante
        "is_vegetarian" => false, // Contiene salame piccante
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Etna",
        "name_eng" => "Etna",
        "description_it" => "Pomodoro, mozzarella, mix di salumi, peperoncino, provola affumicata, olio evo, origano.",
        "description_eng" => "Tomato, mozzarella, mixed cured meats, chili pepper, smoked provola cheese, extra virgin olive oil, oregano.",
        "primary_price" => "7.00",
        "secondary_price" => "17.00",
        "is_spicy" => true, // Contiene peperoncino
        "is_vegetarian" => false, // Contiene mix di salumi
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Friariello",
        "name_eng" => "Friariello",
        "description_it" => "Pomodoro, mozzarella, funghi piccanti, friarielli, salsiccia, peperoncino, olio evo, origano.",
        "description_eng" => "Tomato, mozzarella, spicy mushrooms, broccoli rabe, sausage, chili pepper, extra virgin olive oil, oregano.",
        "primary_price" => "8.50",
        "secondary_price" => "19.00",
        "is_spicy" => true, // Contiene funghi piccanti e peperoncino
        "is_vegetarian" => false, // Contiene salsiccia
        "type" => "food"
    ]
];
