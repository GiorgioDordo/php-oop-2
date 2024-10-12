<?php 
require_once __DIR__ . "/../Products.php";
require_once __DIR__ . "/../color.php";
class Toys extends Products {
    use Color;
    public string $material;

    function __construct (
        string $imageUrl,
        float $price,
        Animal $animal,
        string $name,
        string $description,
        $color,
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
        $this->color = $color;
    }
}
?>