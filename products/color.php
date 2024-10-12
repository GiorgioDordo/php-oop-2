<?php
trait Color {
public $getColor;


public function getColor($color) {
    if($color === "viola") {
        echo "<p class='text-success'><strong>Il colore $color è disponibile</strong></p>";
    } else if (!$color) {
        echo "<p class='text-warning'><strong>Inserire un colore</strong></p>";
    }else {
        echo "<p class='text-danger'><strong>Il colore $color non è disponibile</strong></p>";
    }
}
}
?>