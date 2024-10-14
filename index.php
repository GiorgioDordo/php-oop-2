<?php
require_once __DIR__ . "/db.php";


$products= [
    $product_1,
    $product_2,
    $product_3,
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- VUE -->
    <script defer src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- AXIOS -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.7/axios.min.js"
        integrity="sha512-DdX/YwF5e41Ok+AI81HI8f5/5UsoxCVT9GKYZRIzpLxb8Twz4ZwPPX+jQMwMhNQ9b5+zDEefc+dcvQoPWGNZ3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- JS -->
    <script defer src="./js/script.js"></script>
</head>

<body>
    <header class="d-flex align-items-center">
        <div class="container">
            <h1 class="text-center">E-COMMERCE WANNABE</h1>
        </div>
    </header>
    <main class="container d-flex gap-5">
        <?php foreach($products as $product) { ?>
        <div class="col-4 card">
            <h5 class="text-center"><?= get_class($product) ?></h5>
            <div class="card-body d-flex flex-column align-items-center">
                <img class="card-img-top" src="<?= $product->imageUrl ?>" alt="image">
                <p><strong>Price:</strong><?= $product->price ?> </p>
                <p><strong>For:</strong><?= $product->animal->animal ?> </p>
                <p><strong>Name:</strong><?= $product->name ?></p>
                <p><strong>Descrizione:</strong><?= $product->description ?> </p>
                <?php if( $product instanceof Food) {?>
                <form action="index.php" method="GET">
                    <label for="foodQuantity">seleziona una quantità:</label>
                    <input type="number" min="1" max="30" name="foodQuantity" id="foodQuantity">
                    <button type="submit">Seleziona</button>
                </form>
                <?php if (isset($_GET["foodQuantity"]) && ($_GET["foodQuantity"]) > 0 ) { ?>
                <p><?php echo $product->getFoodQuantity($_GET["foodQuantity"]); ?></p>
                <?php } else { ?>
                <p class='text-warning'><strong>Inserire una quantià.</strong></p>
                <?php } ?>
                <p><strong>Ingredients:</strong><?= $product->ingredients ?></p>
                <p><strong>Peso:</strong><?= $product->weight ?></p>
                <p><strong>Produttore:</strong><?= $product->producer ?></p>
                <?php } else if ( $product instanceof Toys) { ?>
                <form action="index.php" method="GET">
                    <label for="toyQuantity">seleziona una quantità:</label>
                    <input type="number" min="1" max="10" name="toyQuantity" id="toyQuantity">
                    <button type="submit">Seleziona</button>
                </form>
                <?php if (isset($_GET["toyQuantity"]) && ($_GET["toyQuantity"]) > 0 ) { ?>
                <p><?php echo $product->getToysQuantity($_GET["toyQuantity"]); ?></p>
                <?php } else { ?>
                <p class='text-warning'><strong>Inserire una quantià.</strong></p>
                <?php } ?>
                <p><strong>Materiale</strong><?= $product->material ?></p>
                <?php } else if ( $product instanceof HouseLetters) { ?>
                <form action="index.php" method="GET">
                    <label for="houseLettersQuantity">seleziona una quantità:</label>
                    <input type="number" min="1" max="10" name="houseLettersQuantity" id="houseLettersQuantity">
                    <button type="submit">Seleziona</button>
                </form>
                <?php if (isset($_GET["houseLettersQuantity"]) && ($_GET["houseLettersQuantity"]) > 0 ) { ?>
                <p><?php echo $product->getHouseLettersQuantity($_GET["houseLettersQuantity"]); ?></p>
                <?php } else { ?>
                <p class='text-warning'><strong>Inserire una quantià.</strong></p>
                <?php } ?>
                <p><strong>Materiale:</strong><?= $product->type ?></p>
                <p><strong>Peso:</strong><?= $product->size ?></p>
                <?php } ?>
            </div>
        </div>
        <?php }?>
    </main>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</body>

</html>