<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>

<body>
<h1>Berlatih Function PHP</h1>
<?php

echo "<h3> Soal No 1 Greetings </h3>";

function greetings($name) {
    echo "Halo " . ucfirst($name) . ", Selamat Datang di Jabar Coding Camp!<br>";
}


greetings("Bagas");
greetings("Wahyu");
greetings("Abdul");

echo "<br>";

echo "<h3>Soal No 2 Reverse String</h3>";

function reverseString($str) {
    $reversed = "";
    $length = strlen($str);
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    return $reversed;
}


echo reverseString("abduh") . "<br>";
echo reverseString("Bootcamp") . "<br>";
echo reverseString("We Are JCC Developers") . "<br>";
echo "<br>";

echo "<h3>Soal No 3 Palindrome </h3>";

function palindrome($str) {
    $reversed = reverseString($str);
    if ($str === $reversed) {
        echo "true<br>";
        return true;
    } else {
        echo "false<br>";
        return false;
    }
}


palindrome("civic") ; 
palindrome("nababan") ; 
palindrome("jambaban"); 
palindrome("racecar"); 


echo "<h3>Soal No 4 Tentukan Nilai </h3>";

function tentukan_nilai($val) {
    if ($val >= 85 && $val <= 100) {
        return "Sangat Baik<br>";
    } elseif ($val >= 70 && $val < 85) {
        return "Baik<br>";
    } elseif ($val >= 60 && $val < 70) {
        return "Cukup<br>";
    } else {
        return "Kurang<br>";
    }
}


echo tentukan_nilai(98); 
echo tentukan_nilai(76); 
echo tentukan_nilai(67); 
echo tentukan_nilai(43); 

?>

</body>

</html>