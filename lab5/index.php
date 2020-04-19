<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title> PHP </title>
		<meta charset="utf-8" />
		
	</head>
	<body>
		<?php
			if(isset($_POST['wyloguj'])){
				$_SESSION['zalogowany'] = 0;
				$_SESSION['zalogowanyImie'] = "";
		}
		?>
		<?php
			echo "<h1>Nasz system</h1>"; 
		?>
		<a href="user.php">User</a>
		<fieldset>
			<legend>Formularz logowania</legend>
			<form action="login.php" method="POST">
			<table>
				<tr><td>Login:</td><td><input type="text" name="login"></td></tr>
				<tr><td>Hasło:</td><td><input type="password" name="haslo"></td></tr>
				<tr><td><input type="submit" value="Zaloguj" name="zaloguj"></td></tr>
			</table>
			</form>
		</fieldset>
		<fieldset>
			<legend>Formularz tworzenia zmiennej Cookie</legend>
			<form action="cookie.php" method="GET">
			<table>
				<tr><td>Czas życia zmiennej[s]</td><td><input type="number" name="czas" value=0 min=0 required></td></tr>
				<tr><td><input type="submit" value="Utwórz" name="utworzCookie"></td></tr>
			</table>
			</form>
		</fieldset>
		<?php
			if(isset($_COOKIE['ciastko'])){
				echo "Wartość zmiennej Cookie: " . $_COOKIE['ciastko'];
			}
		?>
	</body>
</html>