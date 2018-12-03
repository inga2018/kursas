<?php
$cities3 = [//Sukurk ir išvesk naują $cities3 masyvą masyve, kurio duomenys: 
'Tokijas' => [13.6, 1868, 'Japonija'],
'Vasingtonas' => [0.6, 1790, 'JAV'],
'Maskva' => [11.5, 1147, 'Rusija'],
];
print_r($cities3);
 $cities3['Londonas'] = [8.6, 43, 'Anglija']; //Pridėk: Londonas - 8.6, 43, Anglija
?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul> <!-- HTML dalyje, sukurk <ul> ir panaudok <li>, kad išvestum duomenis apie Londoną tokiu formatu: -->
		<li>Gyventojų skaičius: <?php echo $cities3['Londonas'][0]; ?> mln.</li>
		<li>Įkurtas: <?php echo $cities3['Londonas'][1]; ?> m.</li>
		<li>Šalis: <?php echo $cities3['Londonas'][2]; ?> </li>
	</ul>
 </body>
</html>