<html>

<head>

<title> Variable function:Settype:1 </title> </head>

<body>

<?php
$var1 ="anil";
$var3 = "1Bipin";
$var4 = "anil1";

$var2 = true;

settype($var1, "integer");
settype($var2, "string");
settype($var3, "integer");
settype($var4, "integer");

echo gettype($var1)."</br>";
echo gettype($var2)."</br>";
echo gettype($var3)."</br>";
echo gettype($var4)."</br>";

echo $var1."</br>";

echo $var2."</br>";
echo $var3."</br>";
echo $var4."</br>";

?>
</body>
</html>
