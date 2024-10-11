<?php 
require_once __DIR__ . "/../Products.php";
class HouseLetters extends Products {
    public string $type;
    public string $size;

    function __construct (
        string $imageUrl,
        float $price,
        Animal $animal,
        string $name,
        string $description,
        string $type,
        string $size,
        
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
}
?>