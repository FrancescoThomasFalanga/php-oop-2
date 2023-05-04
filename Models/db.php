<?php

$dogDiet = new Diet("Alimentazione", "./img/dogs/crocchette_salmone.webp", "Crocchette con Salmone", "9.39", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.", "dog", "23/05/2023");
$dogAccessory = new Accessory("Accessori", "./img/dogs/casetta_legno.jpg", "Casetta in Legno", "249.99", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.", "cat", "100x50 cm");
$dogAccessory1 = new Accessory("Accessori", "./img/dogs/casetta_plastica.webp", "Nicchia per Cane KENNY", "43.99", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.", "cat", "70x70 cm");
$dogGame = new Product("Gioco", "./img/dogs/piscina.jpg", "Piscina a getto per cani", "19.99", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.", "cat");
$dogGame1 = new Product("Gioco", "./img/dogs/pallina.webp", "Pallina ULTRA BALL Chuckit", "14.59", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.", "cat");
$dogSnack = new Product("Snack", "./img/dogs/biscotti_tacchino.webp", "Biscotti al Tacchino", "3.39", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.", "cat");
$dogSnack1 = new Product("Snack", "./img/dogs/filetti_anatra.webp", "Bastoncini all'Anatra", "6.49", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.", "cat");
$dogGrooming = new Product("Toelettatura", "./img/dogs/shampoo_bollicine.webp", "Shampoo Bollicine, mantello nero", "14.99", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.", "cat");

$dogsProduct = [
    $dogDiet, $dogAccessory, $dogAccessory1, $dogGame, $dogGame1, $dogSnack, $dogSnack1, $dogGrooming
];


$catDiet = new Diet("Alimentazione", "./img/cats/cibo_secco.webp", "Cibo Secco con Pesce", "20.99", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.", "cat", "10/12/2023");
$catAccessory = new Diet("Alimentazione", "./img/cats/fontana_acqua.webp", "Fontana d'acqua per gatti", "19.99", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.", "cat", "21/07/2024");
$catAccessory1 = new Product("Graffiatoio", "./img/cats/tiragraffi.jpg", "Tiragraffi con pallina per gatto", "9.99", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.", "cat");
$catGame = new Product("Gioco", "./img/cats/topino.jpg", "Topino Vibrante", "5.09", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.", "cat");
$catGame1 = new Product("Gioco", "./img/cats/laser.webp", "Puntatore laser per Gatti", "3.59", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.", "cat");
$catLitter = new Accessory("Accessori", "./img/cats/lettiera_silicio.webp", "Lettiera Silicio per gatti", "5.29", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.", "cat", "piccole");

$catsProduct = [
    $catDiet, $catAccessory, $catAccessory1, $catGame, $catGame1, $catLitter
];