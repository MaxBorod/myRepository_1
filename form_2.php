<html>
<head>
<meta charset="utf-8">
</head>
<body>
<div>
<?php
if(isset($_POST['login'])&& isset($_POST['password'])&& isset($_POST['name'])&& isset($_POST['age'])&& isset($_POST['sms'])){
	$name = $_POST['name'];
	 $login = $_POST['login'];
	$password = $_POST['password'];
	$sms = $_POST['sms'];
	if (!is_numeric($_POST['age'])){
   
	$age = $_POST['age'];
	
echo "Привет, $name  $age лет. <br> Твое сообщение $sms";}
else{
	echo "Error";}
}
?>
</div>
<h3></h3>
<form action="" method="POST">
Имя:<input type="text" required name="name"/><br><br>
Логин:<input type="text" required name="login"/><br><br>
Пароль:<input type="password"  required name="password"/><br><br>
Твое сообщение:<textarea type="text" name="sms"> </textarea><br><br>
<input type="submit" value="да">
 
</form>
</body>
</html>