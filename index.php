<?php

// All Product with their COMMON TYPE
require_once "./Models/Product.php";

// This contains all property of PRODUCT + diet
require_once "./Models/Diet.php";

// This contains all property of PRODUCT + accessory
require_once "./Models/Accessory.php";

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
    

    <!-- COMMON CONTAINER -->
    <div class="container-fluid text-center">

        <!-- E-COMMERCE TITLE -->
        <h1 class="pt-4">Shop Online Per Animali</h1>
        <!-- /E-COMMERCE TITLE -->
        

        <!-- DOGS PRODUCT -->
        <h2 class="border-top mt-5 pt-3 pb-3">Prodotti per Cani</h2>

        <div class="d-flex gap-4 flex-wrap mb-5">

            <?php
                foreach($dogsProduct as $singleProduct) {
                    ?>

                    <!-- DOGS CARD -->
                    <div class="card" style="width: 18rem;">

                        <!-- CARD IMG -->
                        <img src="<?php echo $singleProduct->imgString ?>" class="" alt="..." style="height:200px; object-fit:contain">
                        <!-- CARD IMG -->


                        <!-- CARD TITLE + DESCRIPTION -->
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $singleProduct->title ?></h5>
                            <p class="card-text"><?php echo $singleProduct->desc ?></p>
                        </div>
                        <!-- CARD TITLE + DESCRIPTION -->


                        <!-- CARD SUB-CONTENT -->
                        <ul class="list-group list-group-flush">

                            <!-- PRODUCT CATEGORY -->
                            <li class="list-group-item">Categoria: <strong><?php echo $singleProduct->type ?></strong></li>
                            <!-- /PRODUCT CATEGORY -->

                            <?php
                                if($singleProduct->type == "Alimentazione" || $singleProduct->type == "Snack") {
                                    ?>

                                    <!-- EXPIRATION DATA -->
                                    <li class="list-group-item">Data Di Scadenza: <strong><?php echo $singleProduct->expiration_data ?></strong></li>
                                    <!-- /EXPIRATION DATA -->


                                    <!-- DIET + SNACK QUANTITY -->
                                    <li class="list-group-item">
                                        Quantità: 
                                        <strong>
                                            <?php 
                                                try {

                                                    echo $singleProduct->getWeight($singleProduct->weight) . " g";

                                                } catch(Exception $e) {

                                                    echo $e->getMessage();

                                                }
                                            ?> 
                                        </strong>
                                    </li>
                                    <!-- /DIET + SNACK QUANTITY -->

                                    <?php

                                } else if($singleProduct->type == "Accessori" || $singleProduct->type == "Gioco") {
                                    ?>

                                    <!-- ACCESSORY + GAME SIZE -->
                                    <li class="list-group-item">Dimensioni: <strong><?php echo $singleProduct->size ?></strong></li>
                                    <!-- /ACCESSORY + GAME SIZE -->


                                    <!-- ACCESSORY + GAME WEIGHT -->
                                    <li class="list-group-item">
                                        Peso: 
                                        <strong>
                                            <?php 
                                                try {

                                                    echo $singleProduct->getWeight($singleProduct->weight) . " kg";

                                                } catch(Exception $e) {

                                                    echo $e->getMessage();

                                                }
                                            ?> 
                                        </strong>
                                    </li>
                                    <!-- /ACCESSORY + GAME WEIGHT -->

                                    <?php
                                }
                            ?>

                            <!-- PRODUCT PRIZE -->
                            <li class="list-group-item">Prezzo: <strong><?php echo $singleProduct->price ?>€</strong></li>
                            <!-- /PRODUCT PRIZE -->

                        </ul>
                        <!-- /CARD SUB-CONTENT -->


                        <!-- CATEGORY FOR THE ICON -->
                        <div class="card-body">
                            Categoria: <a href="#" class="card-link"><?php echo $singleProduct->getIcon() ?></a>
                        </div>
                        <!-- CATEGORY FOR THE ICON -->

                    </div>
                    <!-- /DOGS CARD -->

                    <?php
                }
            ?>

        </div>
        <!-- /DOGS PRODUCT -->



        <!-- CATS PRODUCT -->
        <h2 class="border-top mt-5 pt-3 pb-3">Prodotti per Gatti</h2>

        <div class="d-flex gap-4 flex-wrap mb-5">

            <?php
                foreach($catsProduct as $singleProduct) {
                    ?>

                    <!-- CATS CARD -->
                    <div class="card" style="width: 18rem;">

                        <!-- CARD IMG -->
                        <img src="<?php echo $singleProduct->imgString ?>" class="" alt="..." style="height:200px; object-fit:contain">
                        <!-- CARD IMG -->


                        <!-- CARD TITLE + DESCRIPTION -->
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $singleProduct->title ?></h5>
                            <p class="card-text"><?php echo $singleProduct->desc ?></p>
                        </div>
                        <!-- CARD TITLE + DESCRIPTION -->


                        <!-- CARD SUB-CONTENT -->
                        <ul class="list-group list-group-flush">

                            <!-- PRODUCT CATEGORY -->
                            <li class="list-group-item">Categoria: <strong><?php echo $singleProduct->type ?></strong></li>
                            <!-- /PRODUCT CATEGORY -->

                            <?php
                                if($singleProduct->type == "Alimentazione" || $singleProduct->type == "Snack") {
                                    ?>

                                    <!-- EXPIRATION DATA -->
                                    <li class="list-group-item">Data Di Scadenza: <strong><?php echo $singleProduct->expiration_data ?></strong></li>
                                    <!-- /EXPIRATION DATA -->


                                    <!-- DIET + SNACK QUANTITY -->
                                    <li class="list-group-item">
                                        Quantità: 
                                        <strong>
                                            <?php 
                                                try {

                                                    echo $singleProduct->getWeight($singleProduct->weight) . " g";

                                                } catch(Exception $e) {

                                                    echo $e->getMessage();

                                                }
                                            ?> 
                                        </strong>
                                    </li>
                                    <!-- /DIET + SNACK QUANTITY -->

                                    <?php

                                } else if($singleProduct->type == "Accessori" || $singleProduct->type == "Gioco") {
                                    ?>

                                    <!-- ACCESSORY + GAME SIZE -->
                                    <li class="list-group-item">Dimensioni: <strong><?php echo $singleProduct->size ?></strong></li>
                                    <!-- /ACCESSORY + GAME SIZE -->


                                    <!-- ACCESSORY + GAME WEIGHT -->
                                    <li class="list-group-item">
                                        Peso: 
                                        <strong>
                                            <?php 
                                                try {

                                                    echo $singleProduct->getWeight($singleProduct->weight) . " kg";

                                                } catch(Exception $e) {

                                                    echo $e->getMessage();

                                                }
                                            ?> 
                                        </strong>
                                    </li>
                                    <!-- /ACCESSORY + GAME WEIGHT -->

                                    <?php
                                }
                            ?>

                            <!-- PRODUCT PRIZE -->
                            <li class="list-group-item">Prezzo: <strong><?php echo $singleProduct->price ?>€</strong></li>
                            <!-- /PRODUCT PRIZE -->

                        </ul>
                        <!-- /CARD SUB-CONTENT -->


                        <!-- CATEGORY FOR THE ICON -->
                        <div class="card-body">
                            Categoria: <a href="#" class="card-link"><?php echo $singleProduct->getIcon() ?></a>
                        </div>
                        <!-- CATEGORY FOR THE ICON -->

                    </div>
                    <!-- /CATS CARD -->

                    <?php
                }
            ?>

        </div>
        <!-- /CATS PRODUCT -->

    </div>
    <!-- COMMON CONTAINER -->

</body>
</html>