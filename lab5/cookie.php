<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title> PHP </title>
		<meta charset="utf-8" />
	</head>
	<body>
	<?php
		if(!isset($_SESSION['zalogowany']) or $_SESSION['zalogowany'] == 0){
			header("Location: index.php");
		}
		if(isset($_POST['upload'])){
			$currentDir = getcwd();
			$uploadDirectory = "/images/";
			$fileName = $_FILES['myfile']['name'];
			$fileSize = $_FILES['myfile']['size'];
			$fileTmpName = $_FILES['myfile']['tmp_name'];
			$fileType = $_FILES['myfile']['type'];
			if($fileName != "" and ($fileType == "image/png" or $fileType == "image/PNG" or $fileType == "image/jpeg" or $fileType == "image/JPEG")){
				$uploadPath = $currentDir . $uploadDirectory . $fileName;
				if(move_uploaded_file($fileTmpName, $uploadPath))
					;
			}
		}
	?>
	<a href="index.php">Index</a>
	<form action="index.php" method="POST">
		<input type="submit" name="wyloguj" value="Wyloguj"/>
	</form>

	<?php
	
		require_once('functions.php');
		echo "Zalogowano<br/>";
		echo $_SESSION['zalogowanyImie'];
	?>
	<form action="user.php" method="POST" enctype="multipart/form-data">
	<input name="myfile" type="file" required/>
	<input type="submit" name="upload" value="Upload" />
	</form>
	<img src="./images/grej.jpg"alt="Zdjęcie" />
	
	
	</body>
</html>