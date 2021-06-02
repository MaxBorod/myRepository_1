<html>
<head>
<title>Часы</title>
<meta charset="utf-8">
<style>
body{
background-image:url(https://www.ikea.com/ru/ru/images/products/jycke-yukke-nastennye-chasy-belyy-chernyy__0408911_pe570238_s5.jpg);
background-size: cover;	
}
</style>
</head>
<body>
<div>
<?php
if(isset($_POST['name'])){
	
     $name = $_POST['name'];
	 if ($name==0){
   
	$name = 0;
	 echo "Прошло $name часов.";
	}
	if (($name>0)&&($name<=30)){
   
	$name = 1;
	
	echo "Прошёл $name час.";
	}
	if (($name>30)&&($name<=60)){
   
	$name = 2;
	
	echo "Прошло $name часа.";
	}
	if (($name>30)&&($name<=60)){
   
	$name = 2;
	
	echo "Прошло $name часа.";
	}
	if (($name>60)&&($name<=90)){
   
	$name = 3;
	
	echo "Прошло $name часа.";
	}
	if (($name>90)&&($name<=120)){
   
	$name = 4;
	
	echo "Прошло $name часа.";
	}
	if (($name>120)&&($name<=150)){
   
	$name = 5;
	
	echo "Прошло $name часов.";
	}
	if (($name>150)&&($name<=180)){
   
	$name = 6;
	
	echo "Прошло $name часов.";
	}
	if (($name>180)&&($name<=210)){
   
	$name = 7;
	
	echo "Прошло $name часов.";
	}
	if (($name>210)&&($name<=240)){
   
	$name = 8;
	
	echo "Прошло $name часов.";
	}
	if (($name>240)&&($name<=270)){
   
	$name = 9;
	
	echo "Прошло $name часов.";
	}
	if (($name>270)&&($name<=300)){
   
	$name = 10;
	
	echo "Прошло $name часов.";
	}
	if (($name>300)&&($name<=330)){
   
	$name = 11;
	
	echo "Прошло $name часов.";
	}
	if (($name>330)&&($name<=360)){
   
	$name = 12;
	
	echo "Прошло $name часов.";
	}
    else{
    echo "Error";
	}

}
?>
</div>
<form action="strelki.php" method="POST">
 <input type="submit" value="Вернутся">
</body>
</html>