<html>
<head>
<meta charset="utf-8">
<style>
body{
background-image:url(https://cdn.fishki.net/upload/post/201507/26/1608622/1343532977_0_62be6_dbe66513_orig.jpg);
background-size:cover ;	
}
</style>
</head>
<body>
<div>
<?php
if(isset($_POST['Surname'])&& isset($_POST['repeat_password'])&& isset($_POST['password'])
	&& isset($_POST['phone_namber'])&& isset($_POST['email'])){
	$Surname = $_POST['Surname'];
	$phone_namber = $_POST['phone_namber'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repeat_password = $_POST['repeat_password'];
	
	if(($password==$repeat_password)&&(preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email))){
	echo "Ваш фамилия: $Surname  <br> Ваш телефон: $phone_namber
	<br> Ваш e-mail: $email<br> Ваш пароль:$password";
	}
	else{
		echo "Не совпадают пароли";
	}
}
?>
</div>
<h3>Регистрация на сайте</h3>
<form action="aut.php" method="POST">
 фамилия:<input type="text" name="Surname"/><br><br>
 телефон:<input type="text" name="phone_namber"/><br><br>
 e-mail :<input type="text" name="email"/><br><br>
 password :<input type="password" name="password"/><br><br>
 repeat password :<input type="password" name="repeat_password"/><br><br>
 <input type="submit" value="Регистрация">
</form>


</body>
</html>