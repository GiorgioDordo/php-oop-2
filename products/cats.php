<?php
require_once __DIR__ . "/AnimalProducts.php";

class Cats extends AnimalProduct
{
    public string $food;
    public string $toys;
    public string $catLitter;

    function __construct(
        string $_food,
        string $_toys,
        string $_catLitter,
    ) {
        $this->food = $_food;
        $this->toys = $_toys;
        $this->catLitter = $_catLitter;
    }
}
