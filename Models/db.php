<?php

$dogDiet = new DogExtend("Alimentazione", "abdul", "Crocchette con Salmone", "9.39", "diet", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$dogAccessory = new DogExtend("Cucce", "abdul", "Casetta in Legno", "249.99", "accessory", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$dogAccessory1 = new DogExtend("Cucce", "abdul", "Nicchia per Cane KENNY", "43.99", "accessory", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$dogGame = new DogExtend("Gioco", "abdul", "Piscina a getto per cani", "19.99", "game", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$dogGame1 = new DogExtend("Gioco", "abdul", "Pallina ULTRA BALL Chuckit", "14.59", "game", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$dogSnack = new DogExtend("Snack", "abdul", "Biscotti al Tacchino", "3.39", "snack", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$dogSnack1 = new DogExtend("Snack", "abdul", "Bastoncini all'Anatra", "6.49", "snack", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$dogGrooming = new DogExtend("Shampoo", "abdul", "Shampoo Bollicine, mantello nero", "14.99", "grooming", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);

$dogsProduct = [
    $dogDiet, $dogAccessory, $dogAccessory1, $dogGame, $dogGame1, $dogSnack, $dogSnack1, $dogGrooming
];


$catDiet = new CatExtend("Alimentazione", "abdul", "Cibo Secco con Pesce", "20.99", "diet", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$catAccessory = new CatExtend("Graffiatoio", "abdul", "Tiragraffi con pallina per gatto", "9.99", "accessory", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$catAccessory1 = new CatExtend("Fontanella", "abdul", "Fontana d'acqua per gatti", "19.99", "accessory", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$catGame = new CatExtend("Topolino", "abdul", "Topino Vibrante", "5.09", "game", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$catGame1 = new CatExtend("Laser", "abdul", "Puntatore laser per Gatti", "3.59", "game", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);
$catLitter = new CatExtend("Lettiera", "abdul", "Lettiera Silicio per gatti", "5.29", "litter", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",);

$catsProduct = [
    $catDiet, $catAccessory, $catAccessory1, $catGame, $catGame1, $catLitter
];