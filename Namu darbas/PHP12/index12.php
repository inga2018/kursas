<?php

$txt = "";
session_start();

if (isset($_POST['submit']) && (($_POST['name']) && ($_POST['surname'])!= "")) {
	$_SESSION['text'] = $_POST['name'] . " " .$_POST['surname'];
	header("Location: ". $_SERVER['REQUEST_URI']);
	exit;
} else {
	if(isset($_SESSION['text'])) {
		$txt = $_SESSION['text'];
		unset($_SESSION['text']);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 
	<?php
	if($txt != "") {
		echo "Jūsų vardas ir pavardė : $txt";
	} else {
	?>
		<form action="<?php $_PHP_SELF; ?>" method="POST"> <!-- Sukurkite formą, kuri leis vartotojui įvesti savo vardą ir pavardę. -->
			Įrašykite savo vardą ir pavardę:<br>
			Vardas: <input type="text" name="name"/>
			Pavardė: <input type="text" name="surname"/>
			<input type="submit" name="submit" value="PATEIKTI"><br>
			<!-- Paspaudus mygtuką, šie duomenys turėtų būti išspausdinti naršyklėje. -->
		</form>
	<?php } ?>
</body>
</html>