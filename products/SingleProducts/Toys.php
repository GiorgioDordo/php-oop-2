<?php 
require_once __DIR__ . "/../Products.php";
class Toys extends Products {
    public static $product_category = "Toys";

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
    public function staticValue() {
        return self::$product_category;
    }
}
?>