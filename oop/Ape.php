<?php

class Ape extends Animal {
    // Override jumlah kaki menjadi 2
    public $legs = 2;

    public function yell() {
        echo "Auooo<br>";
    }
}