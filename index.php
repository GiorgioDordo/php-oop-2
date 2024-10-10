<?php
require_once __DIR__ . "/products/AnimalProducts.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="col-4 card">
            <div class="card-body">
                <p>
                    <?php $product = new Products("https://picsum.photos/200/300", 2 , "giocattolo", "pallina che rimbalza");
                    print_r($product);
                    ?>
                </p>
            </div>
        </div>
    </main>
</body>

</html>