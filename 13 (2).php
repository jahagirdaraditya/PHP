// AIM:- Give the example of string function:strpos():2

<html>
<head>

<title> String Function:strpos():2 </title>
</head>
<body>
<?php
$string = "I am anil";

$pos = strpos($string,"i");
if($pos === false)
{
echo "Not found.";
}
else
{

echo "Found at $pos. .!";
}
?>
</body> </html>
