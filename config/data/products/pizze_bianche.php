<?php

$categoryId = 5;

return [
    [
        "category_id" => $categoryId,
        "name_it" => "Quattro Formaggi",
        "name_eng" => "Four Cheese",
        "description_it" => "Mozzarella, emmenthal, gorgonzola, grana padano, olio, origano.",
        "description_eng" => "Mozzarella, emmental, gorgonzola, grana padano, olive oil, oregano.",
        "primary_price" => "7.00",
        "secondary_price" => "17.00",
        "is_spicy" => false,
        "is_vegetarian" => true, // Contiene solo formaggi
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Americana",
        "name_eng" => "Americana",
        "description_it" => "Mozzarella, patate al forno, bacon, crema di mascarpone, olio evo, origano.",
        "description_eng" => "Mozzarella, roasted potatoes, bacon, mascarpone cream, extra virgin olive oil, oregano.",
        "primary_price" => "7.50",
        "secondary_price" => "18.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene bacon
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Autunnale",
        "name_eng" => "Autunnale",
        "description_it" => "Mozzarella, crema di zucca, bacon, scaglie di ricotta salata, olio evo, origano.",
        "description_eng" => "Mozzarella, pumpkin cream, bacon, salted ricotta flakes, extra virgin olive oil, oregano.",
        "primary_price" => "7.50",
        "secondary_price" => "18.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene bacon
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Biancaneve",
        "name_eng" => "Biancaneve",
        "description_it" => "Doppia mozzarella, olio evo, origano.",
        "description_eng" => "Double mozzarella, extra virgin olive oil, oregano.",
        "primary_price" => "5.00",
        "secondary_price" => "14.00",
        "is_spicy" => false,
        "is_vegetarian" => true, // Contiene solo formaggio
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Campagnola",
        "name_eng" => "Campagnola",
        "description_it" => "Mozzarella, salsiccia fresca, cipolla, pomodoro a pezzi, grana, olio evo, origano.",
        "description_eng" => "Mozzarella, fresh sausage, onion, diced tomatoes, grana cheese, extra virgin olive oil, oregano.",
        "primary_price" => "7.50",
        "secondary_price" => "18.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene salsiccia fresca
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Carciofara",
        "name_eng" => "Carciofara",
        "description_it" => "Mozzarella, crema di carciofi, carciofi, speck, provola affumicata, olio evo, origano.",
        "description_eng" => "Mozzarella, artichoke cream, artichokes, speck, smoked provola cheese, extra virgin olive oil, oregano.",
        "primary_price" => "8.50",
        "secondary_price" => "19.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene speck
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Catanese",
        "name_eng" => "Catanese",
        "description_it" => "Mozzarella, emmenthal, cipolla grigliata, carne di cavallo, patatine fritte, olio evo, origano.",
        "description_eng" => "Mozzarella, emmental, grilled onions, horse meat, french fries, extra virgin olive oil, oregano.",
        "primary_price" => "9.50",
        "secondary_price" => "20.50",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene carne di cavallo
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Modicana",
        "name_eng" => "Modicana",
        "description_it" => "Mozzarella, ricotta, salsiccia fresca, broccoli, olio evo, origano.",
        "description_eng" => "Mozzarella, ricotta, fresh sausage, broccoli, extra virgin olive oil, oregano.",
        "primary_price" => "8.50",
        "secondary_price" => "19.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene salsiccia fresca
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Mortadella",
        "name_eng" => "Mortadella",
        "description_it" => "Mozzarella, mortadella Bologna, granella di pistacchi, olio evo, origano.",
        "description_eng" => "Mozzarella, mortadella Bologna, pistachio crunch, extra virgin olive oil, oregano.",
        "primary_price" => "7.50",
        "secondary_price" => "18.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene mortadella Bologna
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Salsiccia e Friarielli",
        "name_eng" => "Sausage and Friarielli",
        "description_it" => "Mozzarella, friarielli, salsiccia fresca, olio evo, origano.",
        "description_eng" => "Mozzarella, friarielli, fresh sausage, extra virgin olive oil, oregano.",
        "primary_price" => "7.50",
        "secondary_price" => "18.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene salsiccia fresca
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Salsiccia e Patate",
        "name_eng" => "Sausage and Potatoes",
        "description_it" => "Mozzarella, crema di carciofi, patate arrosto, salsiccia fresca, olio evo, origano.",
        "description_eng" => "Mozzarella, artichoke cream, roasted potatoes, fresh sausage, extra virgin olive oil, oregano.",
        "primary_price" => "8.00",
        "secondary_price" => "18.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene salsiccia fresca
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Siciliana",
        "name_eng" => "Siciliana",
        "description_it" => "Mozzarella, ricotta, salsiccia fresca, cipolla, capuliato, olio evo, origano.",
        "description_eng" => "Mozzarella, ricotta, fresh sausage, onion, capuliato, extra virgin olive oil, oregano.",
        "primary_price" => "8.00",
        "secondary_price" => "18.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene salsiccia fresca
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Zucca e Ricotta",
        "name_eng" => "Pumpkin and Ricotta",
        "description_it" => "Mozzarella, crema di zucca, ricotta, misto funghi, grana, olive, olio evo, origano.",
        "description_eng" => "Mozzarella, pumpkin cream, ricotta, mixed mushrooms, grana cheese, olives, extra virgin olive oil, oregano.",
        "primary_price" => "8.00",
        "secondary_price" => "18.00",
        "is_spicy" => false,
        "is_vegetarian" => true, // Non contiene carne o pesce
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Porchettata",
        "name_eng" => "Porchettata",
        "description_it" => "Mozzarella, porchetta fatta in casa, emmenthal, funghi champignon, olio evo, origano.",
        "description_eng" => "Mozzarella, homemade porchetta, emmenthal, champignon mushrooms, extra virgin olive oil, oregano.",
        "primary_price" => "8.00",
        "secondary_price" => "18.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene porchetta
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Bufalina",
        "name_eng" => "Bufalina",
        "description_it" => "Mozzarella di bufala, pomodoro fresco a cubetti in uscita, basilico, olio evo, origano.",
        "description_eng" => "Buffalo mozzarella, fresh diced tomatoes (added after baking), basil, extra virgin olive oil, oregano.",
        "primary_price" => "8.00",
        "secondary_price" => "18.00",
        "is_spicy" => false,
        "is_vegetarian" => true, // Non contiene carne o pesce
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Deliziosa",
        "name_eng" => "Deliziosa",
        "description_it" => "Mozzarella di bufala, funghi porcini, speck, olio evo, origano.",
        "description_eng" => "Buffalo mozzarella, porcini mushrooms, speck, extra virgin olive oil, oregano.",
        "primary_price" => "9.50",
        "secondary_price" => "22.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene speck
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Tricolore",
        "name_eng" => "Tricolore",
        "description_it" => "Tutti i condimenti a crudo: fette di mozzarella di bufala, pomodoro fresco a cubetti, rucola, olio evo, origano.",
        "description_eng" => "All toppings served raw: slices of buffalo mozzarella, fresh diced tomatoes, arugula, extra virgin olive oil, oregano.",
        "primary_price" => "9.00",
        "secondary_price" => "21.00",
        "is_spicy" => false,
        "is_vegetarian" => true, // Non contiene carne o pesce
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Saporita",
        "name_eng" => "Saporita",
        "description_it" => "Mozzarella di bufala, bresaola, grana, olio evo, origano.",
        "description_eng" => "Buffalo mozzarella, bresaola, grana, extra virgin olive oil, oregano.",
        "primary_price" => "9.50",
        "secondary_price" => "22.00",
        "is_spicy" => false,
        "is_vegetarian" => false, // Contiene bresaola
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Dell’Orto",
        "name_eng" => "Dell’Orto",
        "description_it" => "Pomodoro fresco a cubetti, radicchio arrosto, zucchine arrosto, melanzane arrosto, olio evo, origano.",
        "description_eng" => "Fresh diced tomatoes, roasted radicchio, roasted zucchini, roasted eggplant, extra virgin olive oil, oregano.",
        "primary_price" => "7.00",
        "secondary_price" => "17.00",
        "is_spicy" => false,
        "is_vegetarian" => true, // Non contiene carne o pesce
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Faccia di Vecchia",
        "name_eng" => "Faccia di Vecchia",
        "description_it" => "Sale, olio evo, origano.",
        "description_eng" => "Salt, extra virgin olive oil, oregano.",
        "primary_price" => "3.00",
        "secondary_price" => null,
        "is_spicy" => false,
        "is_vegetarian" => true, // Non contiene carne o pesce
        "type" => "food"
    ],
    [
        "category_id" => $categoryId,
        "name_it" => "Bruschetta",
        "name_eng" => "Bruschetta",
        "description_it" => "Pomodoro fresco a cubetti, sale, olio evo, origano.",
        "description_eng" => "Fresh diced tomatoes, salt, extra virgin olive oil, oregano.",
        "primary_price" => "5.00",
        "secondary_price" => "12.00",
        "is_spicy" => false,
        "is_vegetarian" => true, // Non contiene carne o pesce
        "type" => "food"
    ]
];
