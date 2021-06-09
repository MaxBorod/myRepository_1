<html>
<head><title>Семейный бюджет</title>
<meta charset="utf-8">
<style>
.SOS{
	font-size:20px;
	width: 292px;
}

</style>
</head>
<body style = "background-color:gray; color: White" >
<div>

<?php
if(isset($_POST['login'])&& isset($_POST['password'])){

	$login = $_POST['login'];
	$password = $_POST['password'];

	echo "Ваш логин:$login<br> Ваш пароль:$password";
}
?>


<form action="Form.php" method="POST" class="SOS">
<fieldset><legend>Авторизация на сайте</legend>
<label for="name">
        login:
        <input type="text" required id="name" name="name" id="login"  />
      </label>
	  </p>
    <p>
      <label for="password">
        Password:
        <input type="password" required
          placeholder="Min 6 characters" id="password" name="password" />
      </label>
    </p>
 <input type="submit" value="Вхад">
 </fieldset>
 </form>
<a href="reg.php">регистрация</a>
</body>
</html> 