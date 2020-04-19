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
$osoba1->haslo = "jan2020";
$osoba1->imieNazwisko = "Jan Kowalski";

$osoba2 = new Osoba;
$osoba2->login = "agata";
$osoba2->haslo = "2020agata";
$osoba2->imieNazwisko = "Agata Nowak";

?>