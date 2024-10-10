<?php
class Products
{
    public string $imageUrl;
    public float $price;
    public string $name;
    public Animal $animal;
    public string $description;

    public function __construct(
        string $_imageUrl,
        float $_price,
        Animal $_animal,
        string $_name,
        string $_description,
    ) {
        $this->imageUrl = $_imageUrl;
        $this->price = $_price;
        $this->name = $_name;
        $this->animal = $_animal;
        $this->description = $_description;
    }
}