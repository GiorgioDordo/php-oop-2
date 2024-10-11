<?php 
require_once __DIR__ . "/Products.php";
class Animal {
    public $animal;

    function __construct(
        $animal,
        ) {
            $this->animal = $animal; 
        }
}

?>