<!--  //Įvestus duomenis panaudokite stačiakampio ploto apskaičiavimui. -->
<?php
if( isset($_POST['submit']) )
{
	$ilgis = htmlentities($_POST['ilgis']);
	$plotis = htmlentities($_POST['plotis']);
	$sandauga = $ilgis * $plotis;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> <!-- Sukurkite formą, kuri leis vartotojui įvesti stačiakampio ilgį ir plotį. -->
	<form action="" method="POST">
		Stačiakampio ilgis: <input type="text" name="ilgis" id="ilgis"></input>
		Stačiakampio plotis: <input type="text" name="plotis" id="plotis"></input>
		<input type="submit" name="submit" value="PATEIKTI"><br>
		<!-- Rezultatą išveskite į naršyklę.  -->
		<?php if( isset($sandauga) ) echo  "Stačiakampio, kurio kraštinės yra $ilgis ir $plotis, plotas: $sandauga";
		?>
	</form>

</body>
</html>
