<html>
<head><title>Семейный бюджет</title>
<meta charset="utf-8">
<style>
.SOS{
	font-size:20px;
	width: 292px;
}
input{
	height:20px;
	display: inline-block;
  float: right;
}
}
label{
 display: inline-block;
    float: left;
    clear: left;
    width: 150px;
    text-align: right;	
}
div input{
	margin:6px;
	float: left;
	size:20px;
}
</style>
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
<form action="aut.php" method="POST" class="SOS">
<fieldset><legend>Регистрация на сайте</legend>
 <label>фамилия:</label><input type="text" name="Surname"/>
 <label>имя:</label><input type="text" name="name"/>
 <label>отчество:</label><input type="text" name="otchestvo"/>
 <label>адрес:</label><input type="text" name="adres"/>
 <label>телефон:</label><input type="text" name="phone_namber"/>
 <label>e-mail :</label><input type="text" name="email"/>
 <label>login :</label><input type="text" name="login"/>
 <label>password :</label><input type="password" name="password"/>
 <label>r_password :</label><input type="password" name="repeat_password"/>
 <div><input type="submit" value="Регистрация"></div>
 </fieldset>
</form>
<a href="aut.php">Авторизация</a>

</body>
</html> 