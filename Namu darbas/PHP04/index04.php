<?php
$cities = ['Berlynas', 'Roma', 'Londonas']; //Sukurk masyvą $cities ir priskirk ‘Berlynas’, ‘Roma’, ‘Londonas’
print_r($cities); //Panaudok print_r funkciją taip, kad ji išvestų masyvo $cities duomenis


$cities[] = 'Tokijas'; //Eilutėje, kuri yra iškart po masyvo deklaracijos, pridėk naują miestą “Tokijas” 

$cities2 =[ //Sukurk ir išvesk asociatyvų masyvą cities2: tokijas - 13.6, vasingtonas - 0.6, maskva - 11.5
'tokijas' => '13.6',
'vasingtonas' => '0.6',
'maskva' => '11.5',
];
print_r($cities2);

$cities2['Londonas'] = 8.6; //Pridėk: londonas - 8.6
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
		<li><?php echo $cities[1]; ?></li>   <!-- HTML dalyje sukurk vieną <ul> ir pirmąjame <li> išvesk masyvo $cities antrąjį miestą. -->
	</ul>

	<ul>
		<li>Gyventojų skaičius: <?php echo $cities2['tokijas'] ?> mln.</li> 
		<!-- HTML dalyje sukurk <ul>, kuriame išvesk duomenis tokiu formatu: “Gyventojų skaičius: 13.6 mln.” -->
	</ul>

</body>
</html>