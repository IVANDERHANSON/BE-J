<?php


// comment
// ini single line-comment di php
// shortcut comment ctrl + /
echo "bagian ini aktif"; // bagian ini tidak aktif

// shortcut run php ctrl + alt + n

/* 
ini multi-line comment
ini multi-line comment
ini multi-line comment
*/

echo "\n"; // bikin newline
echo 1 /* + 2 */;

// Output
echo "\noutput menggunakan echo\n";
print "output menggunakan print\n";

// Variable
$number1 = 2;
$number2 = 4;
echo $number1+$number2;
echo "\n";

// Data Type
$name = "Hanson"; // string
$number1 = 3; // integer
$number2 = 4.0; // double/float
$a = true;
$b = false; // boolean
$array = array("Budi", "Jakarta", 20, 500000.50); // array
// Budi index 0
// Jakarat index 1
/// 20 index 2
// 500000.50 index 3
// accessing array
echo "Nama: ".$array[0]."\n";
echo "Tempat Tinggal: ".$array[1]."\n";
echo "Umur: ".$array[2]."\n";
echo "Uang: ".$array[3]."\n";

$x = NULL; // isi variabel dengan value kosong/null

var_dump($array[0]);
var_dump($array[1]);
var_dump($array[2]);
var_dump($array[3]);
$x = true;
var_dump($x);

// Arithmetic Operator
$number1 = 20;
$number2 = 6;
echo $number1+$number2."\n";
echo $number1-$number2."\n";
echo $number1*$number2."\n";
echo $number1/$number2."\n";
echo $number1%$number2."\n";
echo $number1**$number2."\n";

// Increment & Decrement
$x = 1;
echo ++$x."\n"; // pre-increment = dia bakal increment dulu baru output value nya
echo $x++."\n"; // post-increment = dia output dulu value nya baru dia increment
echo $x."\n";

$x = 3;
echo --$x."\n"; // pre-decrement = dia bakal decrement dulu baru output value nya
echo $x--."\n"; // post-decrement = dia output dulu value nya baru dia decrement
echo $x."\n";

// Assignment Operator
$x = 1;
$y = 2;
$x = $y;
echo $x."\n";
$x += $y; // $x = $x + $y
echo $x."\n";

// Comparsion Operator
$x = 5;
$y = 5.0;
var_dump($x == $y);
var_dump($x === $y);
$x = 4;
$y = 6.0;
var_dump($x != $y);
var_dump($x !== $y);
var_dump($x > $y);
$x = 5;
$y = 5;
var_dump($x >= $y);
$x = 15;
$y = 11;
var_dump($x <=> $y); // output -1 jika x lebih kecil dari y, output 0 jika x = y, output 1 jika x lebih besar dari y

// Logical Operator
echo "Logical Operator\n";
$a = true;
$b = true;
var_dump($a && $b); // dua dua nya harus true supaya output nya true
$a = true;
$b = false;
var_dump($a || $b); // salah satu true output nya true, dua dua nya true output true juga
$a = true;
$b = true;
var_dump($a xor $b); // hanya bakal true kalau salah satu outputnya true
$a = false;
var_dump(!$a);

?>