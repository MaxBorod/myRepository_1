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

	echo "На дети: $Transport+$Pitanie+$Razvlecheniya <br>";
}

?>
</div>
<h3>Расходы на детей</h3>
<form action="Form.php" method="POST">
На транспорт:<input type="text" name="Transport"/><br><br>
На питание:<input type="text" name="Pitanie"/><br><br>
На развлечения:<input type="text" name="Razvlecheniya"/><br><br>
 <input type="submit" value="Принять">
</form>
<a href="form_obshaya.php">Общая форма</a><br>
<a href="Form.php">Формы</a><br>
<a href="form_roditeli.php">Форма родители</a><br>
</body>
</html> 