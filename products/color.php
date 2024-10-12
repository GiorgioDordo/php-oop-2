<?php
trait Color {
public $getColor;


public function getColor($color) {
    if($color === "viola") {
    return "Il colore $color è disponibile";
    }
}
}
?>