<?php
function test_input($data) 
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

class Osoba{
	public $login;
	public $haslo;
	public $imieNazwisko;
}
$osoba1 = new Osoba;
$osoba1->login = "jan";
$osoba1->haslo = "Kowal123";
$osoba1->imieNazwisko = "Jan Kowalski";

?>
