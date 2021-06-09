<html>
<head><title>Семейный бюджет</title>
<meta charset="utf-8">
</head>
<body style = "background-color:gray; color: White" >
<div>
<?php
if(isset($_POST['Budzet'])&& isset($_POST['Raschodi'])){
	$Budzet = $_POST['Budzet'];
	$Raschodi = $_POST['Raschodi'];


	echo "Ваш Месячный бюджет: $Budzet <br> Ваш Общий расход: $Raschodi <br >";
}
?>
</div>
<h3>Общая форма</h3>
<form action="Form.php" method="POST">
 Месячный бюджет:<input type="text" name="Budzet"/><br><br>
 Общий расход:<input type="text" name="Raschodi"/><br><br>
 <input type="submit" value="Принять">
</form>
<a href="form_deti.php">Форма дети</a><br>
<a href="Form.php">Формы</a><br>
<a href="form_roditeli.php">Форма родители</a><br>

</body>
</html> 