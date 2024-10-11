<?php 
require_once __DIR__ . "/../Products.php";
class Toys extends Products {
    public string $material;

    function __construct (
        $_product_category,
        string $imageUrl,
        float $price,
        Animal $animal,
        string $name,
        string $description,
        string $_material,
        
    ) {
        parent::__construct(
            $imageUrl,
            $price,
            $animal,
            $name,
            $description,
        );
        $this->material = $_material;
    }
}
?>