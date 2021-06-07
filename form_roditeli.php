<html>
<head><title>Семейный бюджет</title>
<meta charset="utf-8">
</head>
<body style = "background-color:gray; color: White" >
<div>
<?php
if(isset($_POST['Transport_rod'])&& isset($_POST['Kvartplata'])&& isset($_POST['Pitanie_rod'])){
	$Transport_rod = $_POST['Transport_rod'];
	$Pitanie_rod = $_POST['Pitanie_rod'];
	$Kvartplata = $_POST['Kvartplata'];
	
	echo "На транспорт (родители): $Transport_rod <br> На питание(родители): $Pitanie_rod <br >На квартплату: $Kvartplata <br>";
}
?>
</div>
<h3>Расходы радителей</h3>
<form action="Form.php" method="POST">
На транспорт:<input type="text" name="Transport_rod"/><br><br>
На квартплату:<input type="text" name="Kvartplata"/><br><br>
На питание:<input type="text" name="Pitanie_rod"/><br><br>
 <input type="submit" value="Принять">
</form>
<a href="form_obshaya.php">Общая форма</a>
<a href="form_deti.php">Форма дети</a><br>
<a href="Form.php">Формы</a><br>
</body>
</html>