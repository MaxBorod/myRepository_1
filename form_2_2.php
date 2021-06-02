<html>
<head>
<title>Светафор</title>
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
if(isset($_POST['name'])&&isset($_POST['min'])){
	
     $name =  $_POST['name'];
	  $min = $_POST['min'];
	 if (($min==0)&&($min<=3)){
   
	
	 echo "Горит зелёный свет.";
	}
	if (($min>3)&&($min<=5)){
   
	echo "Горит красный свет.";
	}
	if (($min>5)&&($min<=8)){
   
	echo "Горит зелёный свет.";
	}
	if (($min>8)&&($min<=10)){
   
	echo "Горит красный свет.";
	}
	if (($min>10)&&($min<=13)){
   
	echo "Горит зелёный свет.";
	}
	if (($min>13)&&($min<=15)){
   
	echo "Горит красный свет.";
	}
	if (($min>15)&&($min<=18)){
   
	echo "Горит зелёный свет.";
	}
	if (($min>18)&&($min<=20)){
   
	echo "Горит красный свет.";
	}
	if (($min>20)&&($min<=23)){
   
	echo "Горит зелёный свет.";
	}
	if (($min>23)&&($min<=25)){
   
	echo "Горит красный свет.";
	}
	if (($min>25)&&($min<=28)){
   
	echo "Горит зелёный свет.";
	}
	if (($min>28)&&($min<=30)){
   
	echo "Горит красный свет.";
	}
	if (($min>30)&&($min<=33)){
   
	echo "Горит зелёный свет.";
	}
	if (($min>33)&&($min<=35)){
   
	echo "Горит красный свет.";
	}
	if (($min>35)&&($min<=38)){
   
	echo "Горит зелёный свет.";
	}
	if (($min>38)&&($min<=40)){
   
	echo "Горит красный свет.";
	}
	if (($min>40)&&($min<=43)){
   
	echo "Горит зелёный свет.";
	}
	if (($min>43)&&($min<=45)){
   
	echo "Горит красный свет.";
	}
	if (($min>45)&&($min<=48)){
   
	echo "Горит зелёный свет.";
	}
	if (($min>48)&&($min<=50)){
   
	echo "Горит красный свет.";
	}
	if (($min>50)&&($min<=53)){
   
	echo "Горит зелёный свет.";
	}
	if (($min>53)&&($min<=55)){
   
	echo "Горит красный свет.";
	}
	if (($min>55)&&($min<=58)){
   
	echo "Горит зелёный свет.";
	}
	if (($min>58)&&($min<=60)){
   
	echo "Горит красный свет.";
	}
	
    else{
    echo "Error";
	}
 echo "Сейчас $name:$min.";
}
?>
</div>
<form action="strelki_2.php" method="POST">
 <input type="submit" value="Вернутся">
</body>
</html>