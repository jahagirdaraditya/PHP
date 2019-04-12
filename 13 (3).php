// AIM:- Give the example of string function:strpos():3

<html>

<head>
<title>
String Function:strpos():3
</title>
</head>

<body>

<?php
$string = "I am Aditya";
$pos = strpos($string,"a",3);

if($pos === false)
{
echo "<br>";	
echo "Not found.";
}
else
{
	echo "<br>";
echo "Found at $pos. .!";

}
?>
</body>
</html>
