<?php 
require_once __DIR__ . "/../Products.php";
require_once __DIR__ . "/../quantity.php";
class Food extends Products {
    public string $ingredients;
    public string $weight;
    public string $producer;
    use Quantity;

    public function __construct (
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
        $this ->ingredients = $_ingredients;
        $this ->weight = $_weight;
        $this ->producer = $_producer;
    }
}
?>