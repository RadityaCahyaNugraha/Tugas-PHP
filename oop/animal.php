<?php

class Animal {
    public $name;
    public $legs = 4;
    public $cold_blooded = 'no';

    // Constructor untuk mengisi nama saat object dibuat
    public function __construct($name) {
        $name_clean = trim($name, " "); // Membersihkan spasi berlebih
        $this->name = $name_clean;
    }
}