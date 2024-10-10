<?php 
require_once __DIR__ . "/../Products.php";
class HouseLetters extends Products {
    public static $product_category = "DogHouse & Letters";
    public string $type;
    public string $size;

    function __construct (
        string $imageUrl,
        float $price,
        Animal $animal,
        string $name,
        string $type,
        string $size,
        string $description,
        
    ) {
        parent::__construct(
            $imageUrl,
            $price,
            $animal,
            $name,
            $description,
        );
        $this ->type = $type;
        $this ->size = $size;

    }
    public function staticValue() {
        return self::$product_category;
    }
}
?>