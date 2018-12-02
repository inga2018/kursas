<?php

$txt = "";

session_start();

if (isset($_POST['submit']) && (($_POST['ilgis']) && ($_POST['plotis'])!= "")) {
	$_SESSION['number'] = $_POST['ilgis'] * $_POST['plotis'] ;
	header("Location: ". $_SERVER['REQUEST_URI']);
	exit;
} else {
	if(isset($_SESSION['number'])) {
		$txt = $_SESSION['number'];
		unset($_SESSION['number']);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> <!-- Sukurkite formą, kuri leis vartotojui įvesti stačiakampio ilgį ir plotį. -->
	<?php
	if($txt != "") {
		echo "Stačiakampio plotas: $txt";
	} else {
	?>
		<form action="" method="POST">
			Stačiakampio ilgis: <input type="number" name="ilgis" />
			Stačiakampio plotis: <input type="number" name="plotis" />
			<input type="submit" name="submit" value="PATEIKTI"><br>
			<!-- Rezultatą išveskite į naršyklę.  -->

		</form>
	<?php } ?>

</body>
</html>
