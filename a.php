<?php 
	/* Принимаем данные из формы */ 
	  $Surname = $_POST["Surname"];  
	  $Name = $_POST["Name"]; 
	  $Patr = $_POST["Patr"]; 
	  $Univer = $_POST["Univer"]; 
	  $Kours = $_POST["Kours"]; 
	 
	/* Подключаемся к базе данных */ 
	  $link = mysqli_connect("localhost", "root", ""); 
	  mysqli_select_db($link, "base"); 
	 
	/* Записывает данные */  
	$sql = "INSERT INTO first(Surname, Name, Patr, Univer, Kours) VALUES ('$Surname', '$Name', '$Patr', '$Univer', '$Kours')"; 
	$result=mysqli_query($link, $sql); 
	 
	/* Делаем редирект обратно */ 
	header("Location: ".$_SERVER["HTTP_REFERER"]);  
	exit; 
?>