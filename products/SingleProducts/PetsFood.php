<?php 
require_once __DIR__ . "/../Products.php";
class Food extends Products {
    public static $product_category = "Food";
    public string $ingredients;
    public string $weight;
    public string $producer;

    public function __construct (
        $_product_category,
        string $imageUrl,
        float $price,
        Animal $animal,
        string $name,
        string $description,
        string $_ingredients,
        string $_weight,
        string $_producer,
        
    ) {
        parent::__construct(
            $imageUrl,
            $price,
            $animal,
            $name,
            $description,
        );
        $this->product_category = $_product_category;
        $this ->ingredients = $_ingredients;
        $this ->weight = $_weight;
        $this ->producer = $_producer;
    }

    public function staticValue() {
        return self::$product_category;
    }
}
?>