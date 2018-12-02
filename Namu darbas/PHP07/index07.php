<?php
$cities4 = ['Tokijas', 'Vašingtonas', 'Maskva', 'Londonas']; //Sukurk ir išvesk masyvą $cities4, kurio turinys yra Tokijas, Vašingtonas, Maskva, Londonas.
print_r($cities4);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
		<?php //Sukurk <ul> ir panaudok for ciklą, kuris pereis visą $cities4 masyvą. Naudok count( ) funkciją, kad nustatytum masyvo elementų kiekį.
		for($i = 0; $i < count($cities4); $i++){
			echo "<li>$cities4[$i]</li>"; //for ciklo viduje, sukurk <li>, kad galėtum išvesti miestų pavadinimus.
		}
		?>
	</ul>
	<ul> 
		<?php //Atskirame <ul>, panaudok foreach ciklą, kad galėtum išvesti miestų pavadinimus.
		foreach ($cities4 as $miestas) {
			echo $miestas . '<br>';
		}
		?>
	</ul>

</body>
</html>