<?php
trait Quantity {
public $getToysQuantity;


public function getToysQuantity($toyQuantity) {
    if($toyQuantity > 6) {
        echo "<p class='text-danger'><strong>La quantità($toyQuantity) slezionata non è disponibile</strong></p>";
    }else {
        echo "<p class='text-success'><strong>La quantità($toyQuantity) slezionata è disponibile</strong></p>";
    }
}

public function getFoodQuantity($foodQuantity) {
    if($foodQuantity > 20) {
        echo "<p class='text-danger'><strong>La quantità($foodQuantity) slezionata non è disponibile</strong></p>";
    }else {
        echo "<p class='text-success'><strong>La quantità($foodQuantity) slezionata è disponibile</strong></p>";
    }
}

public function getHouseLettersQuantity($houseLettersQuantity) {
    if($houseLettersQuantity > 3) {
        echo "<p class='text-danger'><strong>La quantità($houseLettersQuantity) slezionata non è disponibile</strong></p>";
    }else {
        echo "<p class='text-success'><strong>La quantità($houseLettersQuantity) slezionata è disponibile</strong></p>";
    }
}


//creo metodo per verificare quantity negativa isQuantityNegative()
public function isQuantityNegative($quantity) {
    if($quantity < 0) {
        throw new Exception('La quantità deve essere positiva');
    }
}
}
?>