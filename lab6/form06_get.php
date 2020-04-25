<?php
	session_start();
	$link=mysqli_connect("localhost","scott","tiger","instytut");
	if(!$link){
		printf("Connect failed:%s\n",mysqli_connect_error());
		exit();
	}
print<<<KONIEC
		<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		</head>
		<body>
			<a href="form06_post.php">Dodaj</a><br/>
KONIEC;
	if(isset($_SESSION['good'])){
		if($_SESSION['good'] == 1){
			unset($_SESSION['good']);
			echo "New row added"."<br/>";
		}
	}
	$sql="SELECT * FROM pracownicy";
	$result=$link->query($sql);
	foreach($result as $v){
		//echo $v["ID_PRAC"]." ".$v["NAZWISKO"]."<br/>";
		printf("<table border=\"1\">");
		printf("<tr><th>ID_PRAC</th><th>NAZWISKO</th></tr>");
		while ($obj = mysqli_fetch_object($result))
		printf("<tr><td>%d</td><td>%s</td></tr>",
		$obj->ID_PRAC, $obj->NAZWISKO);
		printf("</table>");
	}
	$result->free();
	$link->close();
echo "</body></html>";
?>