<!DOCTYPE html>
<html>
<head>
	<title>segitiga</title>
</head>
<body>
<h1>LUAS <?php echo "SEGITIGA";?></h1>
</body>
</html>

<?php
//LUAS SEGITIGA
// a = alas || t = tinggi
echo "alas x tinggi x 1/2 <br>";

$a = 15; echo "alas = 15 <br>";
$t = 20; echo "tinggi = 20 <br>";

$Luas_Segitiga = 1/2 * $a * $t;
	echo $Luas_Segitiga;

?>

<!DOCTYPE html>
<html>
<head>
	<title>segitiga</title>
</head>
<body>
<h1>LUAS <?php echo "LINGKARAN";?></h1>
</body>
</html>

<?php
//LUAS LINGKARAN
echo "phi x r x r <br>";

$phi = 22/7; echo "phi = 22/7 <br>";
$jari2 = 12; echo "jari-jari = 12 <br>";

$luas_lingkaran = $phi * $jari2 * $jari2;
	echo $luas_lingkaran;
?>

<!DOCTYPE html>
<html>
<head>
	<title>segitiga</title>
</head>
<body>
<h1>LUAS <?php echo "JAJAR GENJANG";?></h1>
</body>
</html>

<?php
// LUAS JAJAR GENJANG
// a = alas | t = tinggi
echo "alas x tinggi <br>";

$a = 20; echo "alas = 20 <br>";
$t = 25; echo "tinggi = 25 <br>";

$luas_jajargenjang = $a * $t;
	echo $luas_jajargenjang; 
?>