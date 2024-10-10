<?php 
require_once __DIR__ . "/Products.php";
class Animal {
    public string $animal;

    function __contstruct(
        string $_animal,
        ) {
            $this->animal = $_animal; 
        }
}

?>