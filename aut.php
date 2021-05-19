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
$Phone_namber="Не известно";
$password="Не известно";
if(isset($_POST['Phone_namber']))$Phone_namber=$_POST['Phone_namber'];
if(isset($_POST['password']))$password=$_POST['password'];
echo "Ваш Phone_namber: $Phone_namber <br> Ваш password: $password <br >"
?>

<h1>Авторизация</h1>
<form action="3.php" method="POST">
<label for="name">
        Phone_namber:
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
<a href="reg.php">Регистрация</a><br>
<a href="input.php">Вход</a>
</body>
</html>