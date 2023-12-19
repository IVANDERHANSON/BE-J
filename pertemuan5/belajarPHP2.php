<?php

// Conditional Statement
$x = 5;
if($x > 5) {
    echo "x lebih besar dari 5\n";
}
else if($x < 5) {
    echo "x lebih kecil dari 5\n";
}
else {
    echo "x sama dengan 5\n";
}

$warna = "Ungu";
switch($warna) {
    case "Ungu":
        echo "warnanya ungu\n";
        // $warna = "Merah";
        break;
    case "Merah":
        echo "warnanya merah\n";
        break;
    default:
        echo "tidak ada kondisi yang memenuhi\n";
        break;
}

// Looping
$x = 0;
while($x <= 5) {
    $x++;
    if($x == 2) {
        break;
    }
    // if($x == 2) {
    //     continue;
    // }
    echo $x;
    echo "\n";
}

$x = 6;
do { // setidaknya dia bakal jalan dulu sekali baru ngecek kondisinya
    echo $x;
    echo "\n";
} while($x < 5);

echo "For Loop\n";
for($i = 0; $i < 5; $i += 2) {
    echo $i;
    echo "\n";
}

echo "Foreach\n";
$buahBuahan = array("Anggur", "Semangka", "Apel", "Melon", "Jeruk");
foreach($buahBuahan as $buah) {
    echo $buah;
    echo "\n";
}

// Built-in Function
$buah = "Melon";
echo strlen($buah)."\n"; // string length = berfungsi untuk mencari panjang sebuah string
$buah = "apel";
echo strtoupper($buah)."\n"; // berfungsi untuk mengubah smeua huruf dalam string menjadi huruf BESAR
$buah = "APEL";
echo strtolower($buah)."\n"; // berfungsi untuk mengubah smeua huruf dalam string menjadi huruf KECIL
$x = "a a a";
echo str_word_count($x)."\n"; // berfungsi untuk mendapatkan jumlah kata dalam string
$nama = "BUDI";
echo strrev($nama)."\n";

$x = 6;
echo abs($x)."\n";
$x = -6;
echo abs($x)."\n"; // abs = absolute berfungsi untuk membuat semua angka menjadi positif

$x = 100;
echo sqrt(100)."\n"; // sqrt = squre root berfungsi mendapatkan akar kuadrat dari sebuah angka

// User-defined Function
function message() {
    echo "Hello World!\n";
}
message();

function max2($a, $b) {
    if($a > $b) {
        echo $a." lebih besar dari ".$b."\n";
    }
    else if($b > $a) {
        echo $b." lebih besar dari ".$a."\n";
    }
    else {
        echo $a." sama dengan ".$b."\n";
    }
}
max2(4, 5);

?>