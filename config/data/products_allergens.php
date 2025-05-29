<?php

return [
    // --- Antipasti ---
    ['product_id' => '0', 'allergen_id' => '1'], // TAGLIERE DI SALUMI E FORMAGGI: Focaccia, Pizza fritta (Glutine), Formaggi (Latte)
    ['product_id' => '0', 'allergen_id' => '7'], // TAGLIERE DI SALUMI E FORMAGGI: Formaggi (Latte)

    ['product_id' => '1', 'allergen_id' => '0'], // TAGLIATA DI MANZO: Nessun allergene specifico deducibile dalla descrizione.
    ['product_id' => '2', 'allergen_id' => '0'], // TAGLIATA DI CAVALLO: Nessun allergene specifico deducibile dalla descrizione.
    ['product_id' => '3', 'allergen_id' => '0'], // TAGLIATA DI POLLO: Nessun allergene specifico deducibile dalla descrizione.
    ['product_id' => '4', 'allergen_id' => '4'], // TAGLIATA DI TONNO FRESCO: Tonno (Pesce)

    ['product_id' => '5', 'allergen_id' => '14'], // POLPO e PATATE: Polpo (Molluschi)
    ['product_id' => '6', 'allergen_id' => '1'], // FRITTURA DI CALAMARI: Calamari (Molluschi), Frittura (presuppone impanatura con glutine)
    ['product_id' => '6', 'allergen_id' => '14'], // FRITTURA DI CALAMARI: Calamari (Molluschi)

    // --- Birre ---
    ['product_id' => '7', 'allergen_id' => '1'], // Birra spina Poretti 4 luppoli (bionda): Orzo (Glutine)
    ['product_id' => '7', 'allergen_id' => '12'], // Birra spina Poretti 4 luppoli (bionda): Solfiti
    ['product_id' => '8', 'allergen_id' => '1'], // Birra spina Poretti 6 luppoli (rossa): Orzo (Glutine)
    ['product_id' => '8', 'allergen_id' => '12'], // Birra spina Poretti 6 luppoli (rossa): Solfiti
    ['product_id' => '9', 'allergen_id' => '1'], // Birra Moretti: Orzo (Glutine)
    ['product_id' => '9', 'allergen_id' => '12'], // Birra Moretti: Solfiti
    ['product_id' => '10', 'allergen_id' => '1'], // Semedorato: Orzo (Glutine)
    ['product_id' => '10', 'allergen_id' => '12'], // Semedorato: Solfiti
    ['product_id' => '11', 'allergen_id' => '1'], // Birra Bac artigianale pozzallese: Orzo (Glutine)
    ['product_id' => '11', 'allergen_id' => '12'], // Birra Bac artigianale pozzallese: Solfiti

    // --- Calzoni ---
    ['product_id' => '12', 'allergen_id' => '1'], // CALZONE CLASSICO: Pasta (Glutine), Mozzarella (Latte)
    ['product_id' => '12', 'allergen_id' => '7'], // CALZONE CLASSICO: Mozzarella (Latte)
    ['product_id' => '13', 'allergen_id' => '1'], // CALZONE VEGETARIANO: Pasta (Glutine), Mozzarella (Latte)
    ['product_id' => '13', 'allergen_id' => '7'], // CALZONE VEGETARIANO: Mozzarella (Latte)
    ['product_id' => '14', 'allergen_id' => '1'], // CALZONE DEL SALUMIERE: Pasta (Glutine), Mozzarella, Emmenthal (Latte)
    ['product_id' => '14', 'allergen_id' => '7'], // CALZONE DEL SALUMIERE: Mozzarella, Emmenthal (Latte)
    ['product_id' => '15', 'allergen_id' => '1'], // CALZONE PICCANTE: Pasta (Glutine), Mozzarella (Latte)
    ['product_id' => '15', 'allergen_id' => '7'], // CALZONE PICCANTE: Mozzarella (Latte)

    // --- Dolci ---
    ['product_id' => '16', 'allergen_id' => '7'], // Nutellina: Nutella (Latte, Nocciole)
    ['product_id' => '16', 'allergen_id' => '8'], // Nutellina: Noccioline (Frutta a guscio)
    ['product_id' => '17', 'allergen_id' => '7'], // Speciale: Ricotta (Latte), Nutella (Latte, Nocciole)
    ['product_id' => '17', 'allergen_id' => '8'], // Speciale: Noccioline (Frutta a guscio)
    ['product_id' => '18', 'allergen_id' => '7'], // Cassata: Ricotta (Latte)
    ['product_id' => '19', 'allergen_id' => '7'], // Golosa: Ricotta (Latte)
    ['product_id' => '19', 'allergen_id' => '8'], // Golosa: Pistacchio (Frutta a guscio)
    ['product_id' => '20', 'allergen_id' => '1'], // Dolce Idea: Pasta di pizza fritta (Glutine), Nutella (Latte, Nocciole), Pistacchio (Frutta a guscio), Ricotta (Latte)
    ['product_id' => '20', 'allergen_id' => '7'], // Dolce Idea: Nutella, Ricotta (Latte)
    ['product_id' => '20', 'allergen_id' => '8'], // Dolce Idea: Noccioline, Pistacchio (Frutta a guscio)

    // --- Fritti ---
    ['product_id' => '21', 'allergen_id' => '0'], // Patatine fritte: Nessun allergene specifico deducibile, ma potenziale contaminazione incrociata da glutine/latte nell'olio. (Per sicurezza, potrei aggiungere 1)
    ['product_id' => '22', 'allergen_id' => '0'], // Patatine dippers: Come sopra.
    ['product_id' => '23', 'allergen_id' => '1'], // Anelli di cipolla fritti: Impanatura (Glutine)
    ['product_id' => '24', 'allergen_id' => '1'], // Crocchette di patate: Possono contenere uova/latte/glutine per legante o impanatura.
    ['product_id' => '24', 'allergen_id' => '3'], // Crocchette di patate: Potenziale (Uova)
    ['product_id' => '24', 'allergen_id' => '7'], // Crocchette di patate: Potenziale (Latte)

    // --- Panini/Hamburger ---
    ['product_id' => '25', 'allergen_id' => '1'], // ALFIO: Potenziale pane (Glutine), Emmenthal (Latte)
    ['product_id' => '25', 'allergen_id' => '7'], // ALFIO: Emmenthal (Latte)
    ['product_id' => '26', 'allergen_id' => '1'], // ROSARIO: Potenziale pane (Glutine), Fiordilatte (Latte)
    ['product_id' => '26', 'allergen_id' => '7'], // ROSARIO: Fiordilatte (Latte)
    ['product_id' => '27', 'allergen_id' => '1'], // CAROLINA: Potenziale pane (Glutine), Fiordilatte (Latte)
    ['product_id' => '27', 'allergen_id' => '7'], // CAROLINA: Fiordilatte (Latte)
    ['product_id' => '28', 'allergen_id' => '1'], // LUCIANO: Potenziale pane (Glutine), Fiordilatte (Latte)
    ['product_id' => '28', 'allergen_id' => '7'], // LUCIANO: Fiordilatte (Latte)
    ['product_id' => '29', 'allergen_id' => '1'], // TRUMP: Potenziale pane (Glutine), Fiordilatte (Latte), Salsa carbonara (Uova, Latte)
    ['product_id' => '29', 'allergen_id' => '3'], // TRUMP: Salsa carbonara (Uova)
    ['product_id' => '29', 'allergen_id' => '7'], // TRUMP: Fiordilatte, Pecorino (Latte)
    ['product_id' => '30', 'allergen_id' => '1'], // PINO DEI PALAZZI: Potenziale pane (Glutine), Fiordilatte (Latte)
    ['product_id' => '30', 'allergen_id' => '7'], // PINO DEI PALAZZI: Fiordilatte (Latte)
    ['product_id' => '31', 'allergen_id' => '1'], // SEMIVEGETARIANO: Potenziale pane (Glutine), Fiordilatte (Latte)
    ['product_id' => '31', 'allergen_id' => '7'], // SEMIVEGETARIANO: Fiordilatte (Latte)
    ['product_id' => '32', 'allergen_id' => '7'], // CAPRESE SPECIAL: Mozzarella di bufala (Latte)

    // --- Pizze di Mare ---
    ['product_id' => '33', 'allergen_id' => '1'], // Delicata: Impasto (Glutine), Mozzarella (Latte), Gamberi (Crostacei)
    ['product_id' => '33', 'allergen_id' => '2'], // Delicata: Gamberi (Crostacei)
    ['product_id' => '33', 'allergen_id' => '7'], // Delicata: Mozzarella (Latte)
    ['product_id' => '34', 'allergen_id' => '1'], // Frutti di Mare: Impasto (Glutine), Mozzarella (Latte), Cozze, Vongole, Calamari, Polpo, Gamberi (Molluschi, Crostacei)
    ['product_id' => '34', 'allergen_id' => '2'], // Frutti di Mare: Gamberi (Crostacei)
    ['product_id' => '34', 'allergen_id' => '7'], // Frutti di Mare: Mozzarella (Latte)
    ['product_id' => '34', 'allergen_id' => '14'], // Frutti di Mare: Cozze, Vongole, Calamari, Polpo (Molluschi)
    ['product_id' => '35', 'allergen_id' => '1'], // Gratin: Impasto (Glutine), Mozzarella (Latte), Gamberi (Crostacei)
    ['product_id' => '35', 'allergen_id' => '2'], // Gratin: Gamberi (Crostacei)
    ['product_id' => '35', 'allergen_id' => '7'], // Gratin: Mozzarella (Latte)
    ['product_id' => '36', 'allergen_id' => '1'], // Mare e Monti: Impasto (Glutine), Mozzarella (Latte), Gamberi (Crostacei)
    ['product_id' => '36', 'allergen_id' => '2'], // Mare e Monti: Gamberi (Crostacei)
    ['product_id' => '36', 'allergen_id' => '7'], // Mare e Monti: Mozzarella (Latte)
    ['product_id' => '37', 'allergen_id' => '1'], // Marea: Impasto (Glutine), Mozzarella (Latte), Gamberi (Crostacei)
    ['product_id' => '37', 'allergen_id' => '2'], // Marea: Gamberi (Crostacei)
    ['product_id' => '37', 'allergen_id' => '7'], // Marea: Mozzarella (Latte)
    ['product_id' => '38', 'allergen_id' => '1'], // Persi nel Sud: Impasto (Glutine), Mozzarella (Latte), Spada (Pesce)
    ['product_id' => '38', 'allergen_id' => '4'], // Persi nel Sud: Spada (Pesce)
    ['product_id' => '38', 'allergen_id' => '7'], // Persi nel Sud: Mozzarella (Latte)
    ['product_id' => '39', 'allergen_id' => '1'], // Napoletana: Impasto (Glutine), Mozzarella (Latte), Acciughe (Pesce)
    ['product_id' => '39', 'allergen_id' => '4'], // Napoletana: Acciughe (Pesce)
    ['product_id' => '39', 'allergen_id' => '7'], // Napoletana: Mozzarella (Latte)
    ['product_id' => '40', 'allergen_id' => '1'], // Norvegese: Impasto (Glutine), Mozzarella (Latte), Salmone (Pesce), Mascarpone (Latte)
    ['product_id' => '40', 'allergen_id' => '4'], // Norvegese: Salmone (Pesce)
    ['product_id' => '40', 'allergen_id' => '7'], // Norvegese: Mozzarella, Mascarpone (Latte)
    ['product_id' => '41', 'allergen_id' => '1'], // Palermitana: Impasto (Glutine), Mozzarella (Latte), Sarde (Pesce), Pinoli (Frutta a guscio - sebbene i pinoli non siano sempre considerati un "vero" allergene da frutta a guscio, spesso vengono raggruppati per precauzione)
    ['product_id' => '41', 'allergen_id' => '4'], // Palermitana: Sarde (Pesce)
    ['product_id' => '41', 'allergen_id' => '7'], // Palermitana: Mozzarella (Latte)
    ['product_id' => '41', 'allergen_id' => '8'], // Palermitana: Pinoli (Frutta a guscio)
    ['product_id' => '42', 'allergen_id' => '1'], // Tonnara: Impasto (Glutine), Mozzarella (Latte), Tonno (Pesce)
    ['product_id' => '42', 'allergen_id' => '4'], // Tonnara: Tonno (Pesce)
    ['product_id' => '42', 'allergen_id' => '7'], // Tonnara: Mozzarella (Latte)
    ['product_id' => '43', 'allergen_id' => '1'], // Tonno e Cipolla: Impasto (Glutine), Mozzarella (Latte), Tonno (Pesce)
    ['product_id' => '43', 'allergen_id' => '4'], // Tonno e Cipolla: Tonno (Pesce)
    ['product_id' => '43', 'allergen_id' => '7'], // Tonno e Cipolla: Mozzarella (Latte)

    // --- Pizze Gourmet ---
    ['product_id' => '44', 'allergen_id' => '1'], // Bologna: Impasto (Glutine), Fior di latte, Stracciatella (Latte), Pistacchio (Frutta a guscio)
    ['product_id' => '44', 'allergen_id' => '7'], // Bologna: Fior di latte, Stracciatella (Latte)
    ['product_id' => '44', 'allergen_id' => '8'], // Bologna: Pistacchio (Frutta a guscio)
    ['product_id' => '45', 'allergen_id' => '1'], // Ariccia: Impasto (Glutine), Fior di latte (Latte)
    ['product_id' => '45', 'allergen_id' => '7'], // Ariccia: Fior di latte (Latte)
    ['product_id' => '46', 'allergen_id' => '1'], // Miami: Impasto (Glutine), Fior di latte (Latte), Patatine fritte (potenziale glutine per frittura)
    ['product_id' => '46', 'allergen_id' => '7'], // Miami: Fior di latte (Latte)
    ['product_id' => '47', 'allergen_id' => '1'], // Oslo: Impasto (Glutine), Fior di latte (Latte), Salmone (Pesce), Mascarpone (Latte)
    ['product_id' => '47', 'allergen_id' => '4'], // Oslo: Salmone (Pesce)
    ['product_id' => '47', 'allergen_id' => '7'], // Oslo: Fior di latte, Mascarpone (Latte)

    // --- Pizze Classiche ---
    ['product_id' => '48', 'allergen_id' => '1'], // 4 Formaggi: Impasto (Glutine), Mozzarella, Emmenthal, Gorgonzola, Grana Padano (Latte)
    ['product_id' => '48', 'allergen_id' => '7'], // 4 Formaggi: Mozzarella, Emmenthal, Gorgonzola, Grana Padano (Latte)
    ['product_id' => '49', 'allergen_id' => '1'], // Americana: Impasto (Glutine), Mozzarella (Latte), Mascarpone (Latte)
    ['product_id' => '49', 'allergen_id' => '7'], // Americana: Mozzarella, Mascarpone (Latte)
    ['product_id' => '50', 'allergen_id' => '1'], // Autunnale: Impasto (Glutine), Mozzarella, Ricotta Salata (Latte)
    ['product_id' => '50', 'allergen_id' => '7'], // Autunnale: Mozzarella, Ricotta Salata (Latte)
    ['product_id' => '51', 'allergen_id' => '1'], // Biancaneve: Impasto (Glutine), Mozzarella (Latte)
    ['product_id' => '51', 'allergen_id' => '7'], // Biancaneve: Mozzarella (Latte)
    ['product_id' => '52', 'allergen_id' => '1'], // Campagnola: Impasto (Glutine), Mozzarella, Grana (Latte)
    ['product_id' => '52', 'allergen_id' => '7'], // Campagnola: Mozzarella, Grana (Latte)
    ['product_id' => '53', 'allergen_id' => '1'], // Carciofara: Impasto (Glutine), Mozzarella, Provola affumicata (Latte)
    ['product_id' => '53', 'allergen_id' => '7'], // Carciofara: Mozzarella, Provola affumicata (Latte)
    ['product_id' => '54', 'allergen_id' => '1'], // Catanese: Impasto (Glutine), Mozzarella, Emmenthal (Latte), Patatine fritte (potenziale glutine per frittura)
    ['product_id' => '54', 'allergen_id' => '7'], // Catanese: Mozzarella, Emmenthal (Latte)
    ['product_id' => '55', 'allergen_id' => '1'], // Modicana: Impasto (Glutine), Mozzarella, Ricotta (Latte)
    ['product_id' => '55', 'allergen_id' => '7'], // Modicana: Mozzarella, Ricotta (Latte)
    ['product_id' => '56', 'allergen_id' => '1'], // Mortadella: Impasto (Glutine), Mozzarella (Latte), Pistacchi (Frutta a guscio)
    ['product_id' => '56', 'allergen_id' => '7'], // Mortadella: Mozzarella (Latte)
    ['product_id' => '56', 'allergen_id' => '8'], // Mortadella: Pistacchi (Frutta a guscio)
    ['product_id' => '57', 'allergen_id' => '1'], // Salsiccia e Friarielli: Impasto (Glutine), Mozzarella (Latte)
    ['product_id' => '57', 'allergen_id' => '7'], // Salsiccia e Friarielli: Mozzarella (Latte)
    ['product_id' => '58', 'allergen_id' => '1'], // Salsiccia e Patate: Impasto (Glutine), Mozzarella (Latte)
    ['product_id' => '58', 'allergen_id' => '7'], // Salsiccia e Patate: Mozzarella (Latte)
    ['product_id' => '59', 'allergen_id' => '1'], // Siciliana: Impasto (Glutine), Mozzarella, Ricotta (Latte)
    ['product_id' => '59', 'allergen_id' => '7'], // Siciliana: Mozzarella, Ricotta (Latte)
    ['product_id' => '60', 'allergen_id' => '1'], // Zucca e Ricotta: Impasto (Glutine), Mozzarella, Ricotta, Grana (Latte)
    ['product_id' => '60', 'allergen_id' => '7'], // Zucca e Ricotta: Mozzarella, Ricotta, Grana (Latte)
    ['product_id' => '61', 'allergen_id' => '1'], // Porchettata: Impasto (Glutine), Mozzarella, Emmenthal (Latte)
    ['product_id' => '61', 'allergen_id' => '7'], // Porchettata: Mozzarella, Emmenthal (Latte)

    // --- Pizze con Mozzarella di Bufala ---
    ['product_id' => '62', 'allergen_id' => '1'], // Bufalina: Impasto (Glutine), Mozzarella di bufala (Latte)
    ['product_id' => '62', 'allergen_id' => '7'], // Bufalina: Mozzarella di bufala (Latte)
    ['product_id' => '63', 'allergen_id' => '1'], // Deliziosa: Impasto (Glutine), Mozzarella di bufala (Latte)
    ['product_id' => '63', 'allergen_id' => '7'], // Deliziosa: Mozzarella di bufala (Latte)
    ['product_id' => '64', 'allergen_id' => '1'], // Tricolore: Impasto (Glutine), Mozzarella di bufala (Latte)
    ['product_id' => '64', 'allergen_id' => '7'], // Tricolore: Mozzarella di bufala (Latte)
    ['product_id' => '65', 'allergen_id' => '1'], // Saporita: Impasto (Glutine), Mozzarella di bufala, Grana (Latte)
    ['product_id' => '65', 'allergen_id' => '7'], // Saporita: Mozzarella di bufala, Grana (Latte)

    // --- Focacce / Bruschette ---
    ['product_id' => '66', 'allergen_id' => '1'], // Dell’Orto: Impasto (Glutine)
    ['product_id' => '67', 'allergen_id' => '1'], // Faccia di Vecchia: Impasto (Glutine)
    ['product_id' => '68', 'allergen_id' => '1'], // Bruschetta: Pane (Glutine)

    // --- Specialità Napoletane ---
    ['product_id' => '69', 'allergen_id' => '1'], // Calzone Fritto Spaccanapoli: Pasta (Glutine), Ricotta, Fior di latte (Latte)
    ['product_id' => '69', 'allergen_id' => '7'], // Calzone Fritto Spaccanapoli: Ricotta, Fior di latte (Latte)
    ['product_id' => '70', 'allergen_id' => '1'], // Calzone Fritto Vesuvio: Pasta (Glutine), Ricotta, Fior di latte (Latte)
    ['product_id' => '70', 'allergen_id' => '7'], // Calzone Fritto Vesuvio: Ricotta, Fior di latte (Latte)
    ['product_id' => '71', 'allergen_id' => '1'], // Margherita Ruota di Carro: Impasto (Glutine), Fior di latte (Latte)
    ['product_id' => '71', 'allergen_id' => '7'], // Margherita Ruota di Carro: Fior di latte (Latte)
    ['product_id' => '72', 'allergen_id' => '1'], // Vomero Ruota di Carro: Impasto (Glutine), Fior di latte (Latte)
    ['product_id' => '72', 'allergen_id' => '7'], // Vomero Ruota di Carro: Fior di latte (Latte)

    // --- Pizze Gourmet 2 ---
    ['product_id' => '73', 'allergen_id' => '1'], // Mediterranea: Impasto (Glutine), Fior di latte (Latte), Gamberi (Crostacei)
    ['product_id' => '73', 'allergen_id' => '2'], // Mediterranea: Gamberi (Crostacei)
    ['product_id' => '73', 'allergen_id' => '7'], // Mediterranea: Fior di latte (Latte)
    ['product_id' => '74', 'allergen_id' => '1'], // Carbonara Gourmet: Impasto (Glutine), Fior di latte (Latte), Crema carbonara (Uova, Latte)
    ['product_id' => '74', 'allergen_id' => '3'], // Carbonara Gourmet: Crema carbonara (Uova)
    ['product_id' => '74', 'allergen_id' => '7'], // Carbonara Gourmet: Fior di latte, Pecorino (Latte)
    ['product_id' => '75', 'allergen_id' => '1'], // Polpo e Patate (pizza): Impasto (Glutine), Fior di latte (Latte), Polpo (Molluschi), Patate fritte (potenziale glutine per frittura)
    ['product_id' => '75', 'allergen_id' => '7'], // Polpo e Patate (pizza): Fior di latte (Latte)
    ['product_id' => '75', 'allergen_id' => '14'], // Polpo e Patate (pizza): Polpo (Molluschi)
    ['product_id' => '76', 'allergen_id' => '1'], // Romanella: Impasto (Glutine), Fior di latte, Stracciatella (Latte)
    ['product_id' => '76', 'allergen_id' => '7'], // Romanella: Fior di latte, Stracciatella (Latte)
    ['product_id' => '77', 'allergen_id' => '1'], // Tonnara agli Agrumi: Impasto (Glutine), Fior di latte (Latte), Tonno (Pesce)
    ['product_id' => '77', 'allergen_id' => '4'], // Tonnara agli Agrumi: Tonno (Pesce)
    ['product_id' => '77', 'allergen_id' => '7'], // Tonnara agli Agrumi: Fior di latte (Latte)
    ['product_id' => '78', 'allergen_id' => '1'], // Sicciara: Impasto (Glutine), Mozzarella di bufala (Latte), Seppia (Molluschi)
    ['product_id' => '78', 'allergen_id' => '7'], // Sicciara: Mozzarella di bufala (Latte)
    ['product_id' => '78', 'allergen_id' => '14'], // Sicciara: Seppia (Molluschi)
    ['product_id' => '79', 'allergen_id' => '1'], // Montanara: Impasto (Glutine), Fior di latte (Latte)
    ['product_id' => '79', 'allergen_id' => '7'], // Montanara: Fior di latte (Latte)

    // --- Pizze Classiche 2 ---
    ['product_id' => '80', 'allergen_id' => '1'], // 007: Impasto (Glutine), Mozzarella (Latte), Uovo (Uova)
    ['product_id' => '80', 'allergen_id' => '3'], // 007: Uovo (Uova)
    ['product_id' => '80', 'allergen_id' => '7'], // 007: Mozzarella (Latte)
    ['product_id' => '81', 'allergen_id' => '1'], // 4 Stagioni: Impasto (Glutine), Mozzarella (Latte)
    ['product_id' => '81', 'allergen_id' => '7'], // 4 Stagioni: Mozzarella (Latte)
    ['product_id' => '82', 'allergen_id' => '1'], // Affumicata: Impasto (Glutine), Mozzarella, Provola affumicata (Latte)
    ['product_id' => '82', 'allergen_id' => '7'], // Affumicata: Mozzarella, Provola affumicata (Latte)
    ['product_id' => '83', 'allergen_id' => '1'], // Bresaola: Impasto (Glutine), Mozzarella (Latte)
    ['product_id' => '83', 'allergen_id' => '7'], // Bresaola: Mozzarella (Latte)
    ['product_id' => '84', 'allergen_id' => '1'], // Chips: Impasto (Glutine), Mozzarella (Latte), Patatine (potenziale glutine per frittura)
    ['product_id' => '84', 'allergen_id' => '7'], // Chips: Mozzarella (Latte)
    ['product_id' => '85', 'allergen_id' => '1'], // Capricciosa: Impasto (Glutine), Mozzarella (Latte), Uovo (Uova)
    ['product_id' => '85', 'allergen_id' => '3'], // Capricciosa: Uovo (Uova)
    ['product_id' => '85', 'allergen_id' => '7'], // Capricciosa: Mozzarella (Latte)
    ['product_id' => '86', 'allergen_id' => '1'], // Inglese: Impasto (Glutine), Mozzarella (Latte), Uovo (Uova)
    ['product_id' => '86', 'allergen_id' => '3'], // Inglese: Uovo (Uova)
    ['product_id' => '86', 'allergen_id' => '7'], // Inglese: Mozzarella (Latte)
    ['product_id' => '87', 'allergen_id' => '1'], // Margherita: Impasto (Glutine), Mozzarella (Latte)
    ['product_id' => '87', 'allergen_id' => '7'], // Margherita: Mozzarella (Latte)
    ['product_id' => '88', 'allergen_id' => '1'], // Norma: Impasto (Glutine), Mozzarella, Ricotta salata (Latte)
    ['product_id' => '88', 'allergen_id' => '7'], // Norma: Mozzarella, Ricotta salata (Latte)
    ['product_id' => '89', 'allergen_id' => '1'], // Monterosso: Impasto (Glutine), Mozzarella, Grana Padano (Latte)
    ['product_id' => '89', 'allergen_id' => '7'], // Monterosso: Mozzarella, Grana Padano (Latte)
    ['product_id' => '90', 'allergen_id' => '1'], // Parma: Impasto (Glutine), Mozzarella, Grana (Latte)
    ['product_id' => '90', 'allergen_id' => '7'], // Parma: Mozzarella, Grana (Latte)
    ['product_id' => '91', 'allergen_id' => '1'], // Porcini: Impasto (Glutine), Mozzarella (Latte)
    ['product_id' => '91', 'allergen_id' => '7'], // Porcini: Mozzarella (Latte)
    ['product_id' => '92', 'allergen_id' => '1'], // Parmigiana: Impasto (Glutine), Mozzarella, Grana (Latte), Uovo (Uova)
    ['product_id' => '92', 'allergen_id' => '3'], // Parmigiana: Uovo (Uova)
    ['product_id' => '92', 'allergen_id' => '7'], // Parmigiana: Mozzarella, Grana (Latte)
    ['product_id' => '93', 'allergen_id' => '1'], // Ragusana: Impasto (Glutine), Mozzarella, Cacio cavallo (Latte)
    ['product_id' => '93', 'allergen_id' => '7'], // Ragusana: Mozzarella, Cacio cavallo (Latte)
    ['product_id' => '94', 'allergen_id' => '1'], // Vegetariana: Impasto (Glutine), Mozzarella (Latte)
    ['product_id' => '94', 'allergen_id' => '7'], // Vegetariana: Mozzarella (Latte)

    // --- Pizze con Bufala 2 ---
    ['product_id' => '95', 'allergen_id' => '1'], // Bufala: Impasto (Glutine), Mozzarella di bufala (Latte)
    ['product_id' => '95', 'allergen_id' => '7'], // Bufala: Mozzarella di bufala (Latte)
    ['product_id' => '96', 'allergen_id' => '1'], // Bufalata: Impasto (Glutine), Mozzarella di bufala (Latte)
    ['product_id' => '96', 'allergen_id' => '7'], // Bufalata: Mozzarella di bufala (Latte)
    ['product_id' => '97', 'allergen_id' => '1'], // Presidente: Impasto (Glutine), Mozzarella di bufala (Latte)
    ['product_id' => '97', 'allergen_id' => '7'], // Presidente: Mozzarella di bufala (Latte)
    ['product_id' => '98', 'allergen_id' => '1'], // Positano: Impasto (Glutine), Mozzarella di bufala (Latte)
    ['product_id' => '98', 'allergen_id' => '7'], // Positano: Mozzarella di bufala (Latte)
    ['product_id' => '99', 'allergen_id' => '1'], // Terra e Mare: Impasto (Glutine), Mozzarella di bufala (Latte), Gamberi (Crostacei)
    ['product_id' => '99', 'allergen_id' => '2'], // Terra e Mare: Gamberi (Crostacei)
    ['product_id' => '99', 'allergen_id' => '7'], // Terra e Mare: Mozzarella di bufala (Latte)

    // --- Pizze Piccanti ---
    ['product_id' => '100', 'allergen_id' => '1'], // Caliente: Impasto (Glutine), Mozzarella, Provola affumicata (Latte)
    ['product_id' => '100', 'allergen_id' => '7'], // Caliente: Mozzarella, Provola affumicata (Latte)
    ['product_id' => '101', 'allergen_id' => '1'], // Caronte: Impasto (Glutine), Mozzarella, Emmenthal (Latte)
    ['product_id' => '101', 'allergen_id' => '7'], // Caronte: Mozzarella, Emmenthal (Latte)
    ['product_id' => '102', 'allergen_id' => '1'], // Diavola: Impasto (Glutine), Mozzarella (Latte)
    ['product_id' => '102', 'allergen_id' => '7'], // Diavola: Mozzarella (Latte)
    ['product_id' => '103', 'allergen_id' => '1'], // Etna: Impasto (Glutine), Mozzarella, Provola affumicata (Latte)
    ['product_id' => '103', 'allergen_id' => '7'], // Etna: Mozzarella, Provola affumicata (Latte)
    ['product_id' => '104', 'allergen_id' => '1'], // Friariello: Impasto (Glutine), Mozzarella (Latte)
    ['product_id' => '104', 'allergen_id' => '7'], // Friariello: Mozzarella (Latte)

    // --- Pizze Numeriche ---
    ['product_id' => '105', 'allergen_id' => '1'], // N. 1: Impasto (Glutine), Fiordilatte (Latte)
    ['product_id' => '105', 'allergen_id' => '7'], // N. 1: Fiordilatte (Latte)
    ['product_id' => '106', 'allergen_id' => '1'], // N. 2: Impasto (Glutine), Fiordilatte (Latte)
    ['product_id' => '106', 'allergen_id' => '7'], // N. 2: Fiordilatte (Latte)
    ['product_id' => '107', 'allergen_id' => '1'], // N. 3: Impasto (Glutine), Mozzarella di bufala (Latte), Mortadella, Pistacchio (Frutta a guscio)
    ['product_id' => '107', 'allergen_id' => '7'], // N. 3: Mozzarella di bufala (Latte)
    ['product_id' => '107', 'allergen_id' => '8'], // N. 3: Pistacchio (Frutta a guscio)
    ['product_id' => '108', 'allergen_id' => '1'], // N. 4: Impasto (Glutine), Fiordilatte (Latte)
    ['product_id' => '108', 'allergen_id' => '7'], // N. 4: Fiordilatte (Latte)
    ['product_id' => '109', 'allergen_id' => '1'], // N. 5: Impasto (Glutine), Fiordilatte (Latte)
    ['product_id' => '109', 'allergen_id' => '7'], // N. 5: Fiordilatte (Latte)

    // --- Bevande ---
    ['product_id' => '110', 'allergen_id' => '0'], // Acqua Naturale: Nessuno
    ['product_id' => '111', 'allergen_id' => '0'], // Acqua Frizzante: Nessuno
    ['product_id' => '112', 'allergen_id' => '0'], // Coca Cola: Nessuno
    ['product_id' => '113', 'allergen_id' => '0'], // Fanta: Nessuno
    ['product_id' => '114', 'allergen_id' => '0'], // Sprite: Nessuno

    // --- Caffetteria ---
    ['product_id' => '115', 'allergen_id' => '0'], // Caffè Espresso: Nessuno (a meno che non si aggiunga latte)
    ['product_id' => '116', 'allergen_id' => '0'], // Caffè Decaffeinato: Nessuno
    ['product_id' => '117', 'allergen_id' => '0'], // Caffè Lungo: Nessuno

    // --- Vini ---
    ['product_id' => '118', 'allergen_id' => '12'], // Ramà | Catarratto: Solfiti
    ['product_id' => '119', 'allergen_id' => '12'], // Ti vedo Sciupato | Grillo: Solfiti
    ['product_id' => '120', 'allergen_id' => '12'], // Lissandrello | Inzolfa: Solfiti
    ['product_id' => '121', 'allergen_id' => '12'], // Nassa | Grillo DOC, Noto: Solfiti
    ['product_id' => '122', 'allergen_id' => '12'], // Kike | Blend: Solfiti
    ['product_id' => '123', 'allergen_id' => '12'], // Occhi di Ciumi | Etna bianco DOC, Randazzo: Solfiti
    ['product_id' => '124', 'allergen_id' => '12'], // Sant'Agostino Blend: Solfiti
    ['product_id' => '125', 'allergen_id' => '12'], // Cosa Ti Bolle in Testa? Frizzante: Solfiti
    ['product_id' => '126', 'allergen_id' => '12'], // Friscur'è Frizzante: Solfiti
    ['product_id' => '127', 'allergen_id' => '12'], // Planeta Brut: Solfiti
    ['product_id' => '128', 'allergen_id' => '12'], // Ferrari Brut: Solfiti
    ['product_id' => '129', 'allergen_id' => '12'], // Ti Cuntu Frappato: Solfiti
    ['product_id' => '130', 'allergen_id' => '12'], // A Te e Famiglia Nero d’Avola: Solfiti
    ['product_id' => '131', 'allergen_id' => '12'], // Zohra Syrah: Solfiti
    ['product_id' => '132', 'allergen_id' => '12'], // Perricone: Solfiti
    ['product_id' => '133', 'allergen_id' => '12'], // Sant’Agostino Blend | rosso SICILIA DOC: Solfiti
    ['product_id' => '134', 'allergen_id' => '12'], // Feudo di Mezzo Etna Rosso DOC: Solfiti
];
