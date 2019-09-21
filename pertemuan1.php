 <?php
//Hello


/*
TEST
*/
echo "Hello World <br>";//menampilkan tulisan

print "hello world<br>";//menampilkan tulisan

print_r("Hello world<br>");//menampilkan tulisan

var_dump("hello World");//ada tambahan string

?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
</head>
<body>
	<h1>Selamat Datang <?php echo "Putri";?></h1>
</body>
</html>

<?php

$nama = "Putri"; //Variable

echo "Halo, nama saya $nama";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
</head>
<body>
	<h1>Selamat Datang <?php echo $nama; ?></h1>
	<h1>Selamat Datang <?= $nama; ?></h1>
</body>
</html>

<?php

$x = 10;
$y = 20;

//+,-, /, *
echo $x * $y ;
echo "<br>";

$nama_depan ="Putri"; //variable 1
$nama_belakang = "Syarifah Tinur<br>"; //variabel 2

$fullname = $nama_depan ." ". $nama_belakang;//gabungan variable 1&2
echo $fullname;
echo "<br>";


//operator Assigment
//=. +=
$x =1;
$x += 5; //artinya x=1, lalu x nya ditambah 5, jadinya 1+5)

//<br> = enter

$y = "Putri";
$y .= " ";
$y .= "Syarifah Tinur <br>";

$y .= $x; 

echo $y;
echo "<br>";

//operator perbandingan
//<, >,  <=, =>, ==

var_dump(1 < 5); echo "<br>";//nilai true
var_dump(1 > 5); echo "<br>";//nilai false


var_dump(1 == "1"); echo "<br>";//nilai true


// logika
// &&, ||, |
$x = 30;
var_dump($x > 20 || $x /12 == 0); echo "<br>";

?>

