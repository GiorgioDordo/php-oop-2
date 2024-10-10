<?php
require_once __DIR__ . "/AnimalProducts.php";

class Dogs extends AnimalProduct
{
    public string $food;
    public string $toys;
    public string $dogHouse;

    function __construct(
        string $_food,
        string $_toys,
        string $_dogHouse,
    ) {
        $this->food = $_food;
        $this->toys = $_toys;
        $this->dogHouse = $_dogHouse;
    }
}
