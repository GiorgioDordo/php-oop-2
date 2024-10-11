<?php
require_once __DIR__ . "/db.php";

$products= [
    [$product_1],
    [$product_2],
    [$product_3],
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
    <main class="container d-flex">
        <?php foreach($products as $product) { ?>
        <div class="col-4 card">
            <h5><?= Food::$product_category; ?></h5>
            <div class="card-body">
                <img src="https://placedog.net/400x400?random" alt="image">
                <p><strong>Price:</strong><?= $product->price ?> </p>
                <p>
                    <strong><?= $product->name ?></strong>
                </p>
                <p><strong>Price:</strong><?= $product->price ?> </p>
                <p><strong>Price:</strong><?= $product->price ?> </p>
                <p><strong>Price:</strong><?= $product->price ?> </p>
                <p><strong>Price:</strong><?= $product->price ?> </p>
            </div>
        </div>
        <?php }?>
    </main>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</body>

</html>