<?php
class Products
{
    public string $imageURL;
    public int $price;
    public string $name;
    public string $description;

    public function __construct(
        string $_imageURL,
        int $_price,
        string $_name,
        string $_description,
    ) {
        $this->imageURL = $_imageURL;
        $this->price = $_price;
        $this->name = $_name;
        $this->description = $_description;
    }
}