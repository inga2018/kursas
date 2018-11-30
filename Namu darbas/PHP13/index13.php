<?php
class Greeting{
	public $vardas;
	public $pavardė;

	public function labas () {
		return 'Sveiki atvykę, ' . $this -> vardas .'&nbsp;' . $this -> pavardė . '<br>';
	}

}

$pirmasŽmogus = new Greeting ();
$antrasŽmogus = new Greeting ();

$pirmasŽmogus -> vardas = "Jonas";
$pirmasŽmogus -> pavardė = "Jonaitis";

$antrasŽmogus -> vardas = "Petras";
$antrasŽmogus -> pavardė = "Petraitis";

echo $pirmasŽmogus -> labas();
echo $antrasŽmogus -> labas();

?>