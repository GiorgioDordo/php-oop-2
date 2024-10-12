<?php
trait Color {
public $getColor;


public function getColor($color) {
    if($color === "viola") {
        echo "Il colore $color è disponibile";
    } else {
        echo "il colore selezionato non è disponibile";
    }
}
}
?>