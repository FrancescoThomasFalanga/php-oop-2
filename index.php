<?php

//  common type of things: diet, accessory, game;
//  different: for Dogs(snack, grooming) for Cats(litter);

class Product {

    public $type;
    public $imgString;
    public $title;
    public $price;
    public $categoryIcon;
    public $desc;

    function __construct(string $type, string $imgString, string $title, string $price, string $categoryIcon, string $desc) {
        $this->type = $type;
        $this->imgString = $imgString;
        $this->title = $title;
        $this->price = $price;
        $this->categoryIcon = $categoryIcon;
        $this->desc = $desc;
    }
}

class DogExtend extends Product {

    public $icon= "<i class='fa-solid fa-dog'></i>";

    function __construct(string $type, string $imgString, string $title, string $price, string $categoryIcon, string $desc)
    {
        parent::__construct($type, $imgString, $title, $price, $categoryIcon, $desc);
    }

}

class CatExtend extends Product {

    public $icon = "<i class='fa-solid fa-cat'></i>";

    function __construct(string $type, string $imgString, string $title, string $price, string $categoryIcon, string $desc)
    {
        parent::__construct($type, $imgString, $title, $price, $categoryIcon, $desc);
    }

}

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <div class="container-fluid text-center">

        <h1 class="border-bottom pb-3 pt-3">Shop Online Per Animali</h1>
        

        <h2>Cane</h2>

        <div class="d-flex gap-4 flex-wrap">

            <?php
                foreach($dogsProduct as $singleProduct) {
                    ?>
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $singleProduct->title ?></h5>
                            <p class="card-text"><?php echo $singleProduct->desc ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Categoria: <strong><?php echo $singleProduct->type ?></strong></li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">Prezzo: <?php echo $singleProduct->price ?>€</li>
                        </ul>
                        <div class="card-body">
                            Categoria: <a href="#" class="card-link"><?php echo $singleProduct->icon ?></a>
                        </div>
                    </div>
                    <?php
                }
            ?>

        </div>



        <h2 class="border-top mt-5 pt-3 pb-3">Gatto</h2>

        <div class="d-flex gap-4 flex-wrap">

            <?php
                foreach($catsProduct as $singleProduct) {
                    ?>
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $singleProduct->title ?></h5>
                            <p class="card-text"><?php echo $singleProduct->desc ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Categoria: <strong><?php echo $singleProduct->type ?></strong></li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">Prezzo: <?php echo $singleProduct->price ?>€</li>
                        </ul>
                        <div class="card-body">
                            Categoria: <a href="#" class="card-link"><?php echo $singleProduct->icon ?></a>
                        </div>
                    </div>
                    <?php
                }
            ?>

        </div>


    </div>

</body>
</html>