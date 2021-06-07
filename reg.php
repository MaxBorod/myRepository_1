<html>
<head><title>Семейный бюджет</title>
<meta charset="utf-8">
</head>
<body style = "background-color:gray; color: White" >
<div>
<?php
if(isset($_POST['Surname'])&& isset($_POST['name'])&& isset($_POST['otchestvo'])
	&& isset($_POST['work'])&& isset($_POST['town'])&& isset($_POST['streat'])&& isset($_POST['home'])
    && isset($_POST['korpus'])&& isset($_POST['phone_namber'])&& isset($_POST['email'])){
	$Surname = $_POST['Surname'];
	$name = $_POST['name'];
	$otchestvo = $_POST['otchestvo'];
	$adres=$_POST['adres'] ;
	$phone_namber = $_POST['phone_namber'];
	$email = $_POST['email'];
	$login = $_POST['login'];
	$password = $_POST['password'];
	$repeat_password = $_POST['repeat_password'];
	echo "Ваш фамилия: $Surname <br> Ваш имя: $name <br >Ваш отчество: $otchestvo <br>
	Ваш место работы: $work <br>Ваш адресс: $town,$streat,$home,$korpus <br> Ваш телефон: $phone_namber <br> Ваш e-mail: $email
	Ваш логин:$login<br> Ваш пароль:$password";
}
?>
</div>
<h3>Регистрация на сайте</h3>
<form action="aut.php" method="POST">
 фамилия:<input type="text" name="Surname"/><br><br>
 имя:<input type="text" name="name"/><br><br>
 отчество:<input type="text" name="otchestvo"/><br><br>
 адрес:<input type="text" name="adres"/><br><br>
 
 телефон:<input type="text" name="phone_namber"/><br><br>
 e-mail :<input type="text" name="email"/><br><br>
 login :<input type="text" name="login"/><br><br>
 password :<input type="password" name="password"/><br><br>
 repeat password :<input type="password" name="repeat_password"/><br><br>
 <input type="submit" value="Регистрация">
</form>
<a href="aut.php">Авторизация</a>

</body>
</html>