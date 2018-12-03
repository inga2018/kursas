<?php
$metai = 1774; //Sukurk kintamąjį $metai, kurio turinys 1774
$cities3 = [
	'Tokijas' => [13.6, 1868, 'Japonija'],
	'Vašingtonas' => [0.6, 1790, 'JAV'],
	'Maskva' => [11.5, 1147, 'Rusija'],
];
$total = true;
 $cities3['Londonas'] = [8.6, 43, 'Anglija'];
 if ($metai >= $cities3['Vašingtonas'][1];) { //Sukurk if sąlygą, kuri patikrina ar $metai yra daugiau arba lygu už Vašingtono įkūrimo metus (panaudok $cities3 masyvo duomenis)
	echo 'Vašingtonas yra ' . $cities3['Vašingtonas'][2]; . ' sostinė.' ; //Jei atsakymas teigiamas, išvesk tekstą: “Vašingtonas yra JAV sostinė.”
} 
elseif ($metai = 1774) { //Sukurk elseif sąlygą patikrinti ar $metai lygu 1774. Jei atsakymas teigiamas, išvesk tekstą: “JAV sostinė vis dar Filadelfijoje.”
	echo $cities3['Vašingtonas'][2]; . ' sostinė vis dar Filadelfijoje.';
}
else { //Sukurk else sąlygą, kuri išveda tekstą: “Liko ... metai (-ų) iki Vašingtono įkūrimo.” Vietoj daugtaškio atlik matematinį veiksmą, kuris iš $cities3[‘Vasingtonas’][1] atima $metai.
	echo 'Liko ' . $total=$cities3['Vašingtonas'][1];-$metai . ' metai (-ų) iki Vašingtono įkūrimo.';
}
