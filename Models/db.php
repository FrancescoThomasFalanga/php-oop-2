<?php

$dogDiet = new DogExtend("Alimentazione", "./img/dogs/crocchette_salmone.webp", "Crocchette con Salmone", "9.39", "diet", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$dogAccessory = new DogExtend("Cucce", "./img/dogs/casetta_legno.jpg", "Casetta in Legno", "249.99", "accessory", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$dogAccessory1 = new DogExtend("Cucce", "./img/dogs/casetta_plastica.webp", "Nicchia per Cane KENNY", "43.99", "accessory", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$dogGame = new DogExtend("Gioco", "./img/dogs/piscina.jpg", "Piscina a getto per cani", "19.99", "game", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$dogGame1 = new DogExtend("Gioco", "./img/dogs/pallina.webp", "Pallina ULTRA BALL Chuckit", "14.59", "game", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$dogSnack = new DogExtend("Snack", "./img/dogs/biscotti_tacchino.webp", "Biscotti al Tacchino", "3.39", "snack", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$dogSnack1 = new DogExtend("Snack", "./img/dogs/filetti_anatra.webp", "Bastoncini all'Anatra", "6.49", "snack", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$dogGrooming = new DogExtend("Shampoo", "./img/dogs/shampoo_bollicine.webp", "Shampoo Bollicine, mantello nero", "14.99", "grooming", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);

$dogsProduct = [
    $dogDiet, $dogAccessory, $dogAccessory1, $dogGame, $dogGame1, $dogSnack, $dogSnack1, $dogGrooming
];


$catDiet = new CatExtend("Alimentazione", "./img/cats/cibo_secco.webp", "Cibo Secco con Pesce", "20.99", "diet", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$catAccessory = new CatExtend("Graffiatoio", "./img/cats/tiragraffi.jpg", "Tiragraffi con pallina per gatto", "9.99", "accessory", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$catAccessory1 = new CatExtend("Fontanella", "./img/cats/fontana_acqua.webp", "Fontana d'acqua per gatti", "19.99", "accessory", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$catGame = new CatExtend("Topolino", "./img/cats/topino.jpg", "Topino Vibrante", "5.09", "game", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$catGame1 = new CatExtend("Laser", "./img/cats/laser.webp", "Puntatore laser per Gatti", "3.59", "game", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$catLitter = new CatExtend("Lettiera", "./img/cats/lettiera_silicio.webp", "Lettiera Silicio per gatti", "5.29", "litter", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);

$catsProduct = [
    $catDiet, $catAccessory, $catAccessory1, $catGame, $catGame1, $catLitter
];