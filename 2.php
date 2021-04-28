<html>
<head>
<meta charset="utf-8">
</head>
<body>
<div>

<?php
$login="Не известно";
$password="Не известно";
if(isset($_POST['login']))$login=$_POST['login'];
if(isset($_POST['password']))$password=$_POST['password'];
echo "Ваш login: $login <br> Ваш password: $password <br >"
?>

<h1>Авторизация</h1>
<form action="3.php" method="POST">
<label for="name">
        login:
        <input type="text" required id="name" name="name" pattern="popp" />
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
 </form>
<a href="1.php">регистрация</a>
</body>
</html>