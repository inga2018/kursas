<?php
$temp = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21]; //Sukurk masyvą temp ir patalpink jame Vilniaus balandžio mėnesio oro temperatūras:

// Rask ir išvesk vidutinę mėnesio temperatūrą, penkias šilčiausias ir penkias šalčiausias temperatūras.
$totTemp = 0;

$tempArrayLenght = count($temp);

foreach ($temp as $value) { //Naudok foreach ciklą. 
	$totTemp += $value;
}
$average = $totTemp/$tempArrayLenght;
echo 'Vidutinė mėnesio temperatūra :' . round($average) ."<br>"; //Naudok round( ), kad suapvalintum vidutinę temperatūrą. 

rsort($temp); //Naudok rsort( ), kad surūšiuoti ciklą žemėjančia tvarka. 

$rsortValue1 = array_slice($temp, 0, 5); //Naudok array_slice( ), kad surastum penkias šilčiausias ir penkias šalčiausias temperatūras.
echo 'Penkios šilčiausios temperatūros: <br>';
foreach ($rsortValue1 as $firstFive ) {
	echo $firstFive . "<br>";
}
$rsortValue2 = array_slice($temp, -5, 5);
echo 'Penkios šalčiausios temperatūros: <br>';
foreach ($rsortValue2 as $lastFive ) {
	echo $lastFive . "<br>";
}

?>