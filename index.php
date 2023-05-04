<?php

//  common type of things: diet, accessory, game;
//  different: for Dogs(snack, grooming) for Cats(litter);

// All Product with their COMMON TYPE
require_once "./Models/Product.php";

// This contains all property of PRODUCT and DOGEXTEND or CATEXTEND
require_once "./Models/CatDiet.php";
require_once "./Models/DogDiet.php";

// DB that Contains all the Product
require_once "./Models/db.php";


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

        <h1 class="pt-4">Shop Online Per Animali</h1>
        

        <h2 class="border-top mt-4 pt-3 pb-3">Prodotti per Cani</h2>

        <div class="d-flex gap-4 flex-wrap">

            <?php
                foreach($dogsProduct as $singleProduct) {
                    ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $singleProduct->imgString ?>" class="" alt="..." style="height:200px; object-fit:contain">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $singleProduct->title ?></h5>
                            <p class="card-text"><?php echo $singleProduct->desc ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Categoria: <strong><?php echo $singleProduct->type ?></strong></li>
                            <?php
                                if($singleProduct->type == "Alimentazione") {
                                    ?>
                                    <li class="list-group-item">Data Di Scadenza: <strong><?php echo $singleProduct->expiration_data ?></strong></li>
                                    <?php
                                }
                            ?>
                            <li class="list-group-item">Prezzo: <strong><?php echo $singleProduct->price ?>€</strong></li>
                        </ul>
                        <div class="card-body">
                            Categoria: <a href="#" class="card-link"><?php echo $singleProduct->getIcon() ?></a>
                        </div>
                    </div>
                    <?php
                }
            ?>

        </div>



        <h2 class="border-top mt-5 pt-3 pb-3">Prodotti per Gatti</h2>

        <div class="d-flex gap-4 flex-wrap">

            <?php
                foreach($catsProduct as $singleProduct) {
                    ?>
                    <div class="card" style="width: 18rem;">
                    <img src="<?php echo $singleProduct->imgString ?>" class="" alt="..." style="height:200px; object-fit:contain">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $singleProduct->title ?></h5>
                            <p class="card-text"><?php echo $singleProduct->desc ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Categoria: <strong><?php echo $singleProduct->type ?></strong></li>
                            <?php
                                if($singleProduct->type == "Alimentazione") {
                                    ?>
                                    <li class="list-group-item">Data Di Scadenza: <strong><?php echo $singleProduct->expiration_data ?></strong></li>
                                    <?php
                                }
                            ?>
                            <li class="list-group-item">Prezzo: <strong><?php echo $singleProduct->price ?>€</strong></li>
                        </ul>
                        <div class="card-body">
                            Categoria: <a href="#" class="card-link"><?php echo $singleProduct->getIcon() ?></a>
                        </div>
                    </div>
                    <?php
                }
            ?>

        </div>


    </div>

</body>
</html>