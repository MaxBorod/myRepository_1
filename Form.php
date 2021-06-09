<html>
<head><title>Семейный бюджет</title>
<meta charset="utf-8">
</head>
<body style = "background-color:gray; color: White" >
<div>
<?php
if(isset($_POST['Transport'])&& isset($_POST['Pitanie'])&& isset($_POST['Razvlecheniya'])){
	$Transport = $_POST['Transport'];
	$Pitanie = $_POST['Pitanie'];
	$Razvlecheniya = $_POST['Razvlecheniya'];
    $Raschodi_deti=$Transport+$Pitanie+$Razvlecheniya;
	echo "На детей: $Raschodi_deti <br>";
}
if(isset($_POST['Budzet'])&& isset($_POST['Raschodi'])){
	$Budzet = $_POST['Budzet'];
	$Raschodi = $_POST['Raschodi'];


	echo "Ваш Месячный бюджет: $Budzet <br> Ваш Общий расход: $Raschodi <br >";
}
if(isset($_POST['Transport_rod'])&& isset($_POST['Kvartplata'])&& isset($_POST['Pitanie_rod'])){
	$Transport_rod = $_POST['Transport_rod'];
	$Pitanie_rod = $_POST['Pitanie_rod'];
	$Kvartplata = $_POST['Kvartplata'];
     $Raschodi_rod=$Transport_rod+$Pitanie_rod+$Kvartplata;
	echo "Расходы родителей : $Raschodi_rod <br>";
}
?>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div align="center">
<form action="form_deti.php" method="POST">
 <input type="submit" value="Фома дети">
 </form>
 <div  align="center">
 <form action="form_obshaya.php" method="POST">
 <input type="submit" value="Общая форма">
</form>
<div  align="center">
 <form action="form_roditeli.php" method="POST">
 <input type="submit" value="Форма родители">
</form>
<a href="vhod.php">Вход</a><br>
<a href="aut.php">Авторизация</a><br>
</body>
</html> 