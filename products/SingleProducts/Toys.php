<?php 
require_once __DIR__ . "/../Products.php";
class Toys extends Products {

    function __construct (
        string $imageUrl,
        float $price,
        Animal $animal,
        string $name,
        string $description,
        
    ) {
        parent::__construct(
            $imageUrl,
            $price,
            $animal,
            $name,
            $description,
        );
    }
}
?>