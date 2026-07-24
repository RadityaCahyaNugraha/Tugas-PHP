<?php

// ==========================================
// 1. KODE IMPORT (LIBRARY / CLASS)
// ==========================================
require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

// ==========================================
// 2. RELEASE 0 (Instansiasi Class Animal)
// ==========================================
echo "---- Release 0 ----<br>";

$sheep = new Animal("shaun");

echo "Name : " . $sheep->name . "<br>";          // Output: shaun
echo "legs : " . $sheep->legs . "<br>";          // Output: 4
echo "cold blooded : " . $sheep->cold_blooded . "<br><br>"; // Output: no


// ==========================================
// 3. RELEASE 1 (Instansiasi Class Turunan)
// ==========================================
echo "---- Release 1 ----<br>";

// Kera Sakti (Ape)
$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->name . "<br>";
echo "legs : " . $sungokong->legs . "<br>";      // Output: 2 (karena berkaki 2)
echo "cold blooded : " . $sungokong->cold_blooded . "<br>";
echo "Yell : ";
$sungokong->yell();                              // Output: Auooo

echo "<br>";

// Buduk (Frog)
$kodok = new Frog("buduk");
echo "Name : " . $kodok->name . "<br>";
echo "legs : " . $kodok->legs . "<br>";          // Output: 4
echo "cold blooded : " . $kodok->cold_blooded . "<br>";
echo "Jump : ";
$kodok->jump();                                  // Output: hop hop