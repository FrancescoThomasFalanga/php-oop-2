<?php

$dogDiet = new DogDiet("Alimentazione", "./img/dogs/crocchette_salmone.webp", "Crocchette con Salmone", "9.39", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.", "23/05/2023");
$dogAccessory = new DogExtend("Cucce", "./img/dogs/casetta_legno.jpg", "Casetta in Legno", "249.99", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$dogAccessory1 = new DogExtend("Cucce", "./img/dogs/casetta_plastica.webp", "Nicchia per Cane KENNY", "43.99", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$dogGame = new DogExtend("Gioco", "./img/dogs/piscina.jpg", "Piscina a getto per cani", "19.99", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$dogGame1 = new DogExtend("Gioco", "./img/dogs/pallina.webp", "Pallina ULTRA BALL Chuckit", "14.59", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$dogSnack = new DogExtend("Snack", "./img/dogs/biscotti_tacchino.webp", "Biscotti al Tacchino", "3.39", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$dogSnack1 = new DogExtend("Snack", "./img/dogs/filetti_anatra.webp", "Bastoncini all'Anatra", "6.49", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$dogGrooming = new DogExtend("Toelettatura", "./img/dogs/shampoo_bollicine.webp", "Shampoo Bollicine, mantello nero", "14.99", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);

$dogsProduct = [
    $dogDiet, $dogAccessory, $dogAccessory1, $dogGame, $dogGame1, $dogSnack, $dogSnack1, $dogGrooming
];


$catDiet = new CatDiet("Alimentazione", "./img/cats/cibo_secco.webp", "Cibo Secco con Pesce", "20.99", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.", "10/12/2023");
$catAccessory = new CatDiet("Alimentazione", "./img/cats/fontana_acqua.webp", "Fontana d'acqua per gatti", "19.99", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.", "21/07/2024");
$catAccessory1 = new CatExtend("Graffiatoio", "./img/cats/tiragraffi.jpg", "Tiragraffi con pallina per gatto", "9.99", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$catGame = new CatExtend("Gioco", "./img/cats/topino.jpg", "Topino Vibrante", "5.09", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$catGame1 = new CatExtend("Gioco", "./img/cats/laser.webp", "Puntatore laser per Gatti", "3.59", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$catLitter = new CatExtend("Lettiera", "./img/cats/lettiera_silicio.webp", "Lettiera Silicio per gatti", "5.29", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);

$catsProduct = [
    $catDiet, $catAccessory, $catAccessory1, $catGame, $catGame1, $catLitter
];