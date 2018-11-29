
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>  
	<form action="" method="POST"> <!-- Sukurkite formą, kuri leis vartotojui įvesti savo vardą ir pavardę. -->
		Įrašykite savo vardą ir pavardę:<br>
		Vardas: <input type="text" name="name"/>
		Pavardė: <input type="text" name="surname"/>
		<input type="submit" value="PATEIKTI"><br>
		<!-- Paspaudus mygtuką, šie duomenys turėtų būti išspausdinti naršyklėje. -->
		<?php 
			echo $_POST["name"] . "<br>". $_POST["surname"];
		?>
	</form>

</body>
</html>