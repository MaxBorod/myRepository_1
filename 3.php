
<?php
$x="Не известно";
$password="Не известно";
if(isset($_POST['name']))$x=$_POST['name'];
if(isset($_POST['password']))$password=$_POST['password'];
echo "<br><br><br><br><br><br><br><br><br><br>Здравствуйте $x";
?>