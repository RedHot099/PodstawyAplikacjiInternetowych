<?php
	session_start();
print<<<KONIEC
		<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		</head>
		<body>
			<a href="form06_get.php">Wyświetl</a>
			<form action="form06_redirect.php" method="POST">
				<table>
					<tr>
						<td>id_prac:</td>
						<td><input type="text" name="id_prac"></td>
					</tr><tr>
						<td>nazwisko:</td>
						<td><input type="text" name="nazwisko"></td>
				</tr></table>
				<input type="submit" value="Wstaw">
				<input type="reset" value="Wyczysc">
			</form>
KONIEC;
	if(isset($_SESSION['error'])){
		if($_SESSION['error'] == 1){
			unset($_SESSION['error']);
			echo "Query error: ".$_SESSION['msg']."<br/>";
		}
	}
	echo "</body></html>";
?>