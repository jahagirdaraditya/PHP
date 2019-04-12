<html>

<head>
// AIM: - Write a php program to find maximum of three numbers.

<title> Max out of three </title>
</head>

<body>

<?php

$a = 1;
$b = 4;
$c = 3;

if($a > $b)
{ echo "<br>";
if($a > $c)
echo "Maximum num a = $a";
else
echo "Maximum num c = $c";
echo "<br>";
}
else

{
 echo "<br>";	
if($c > $b)
echo "Maximum num c = $c";
else
echo "Maximum num b = $b";
echo "<br>";
}
?>
</body>
</html>
