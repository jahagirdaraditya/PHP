<html>

<head> <title> String Function:strcmp() </title> </head> <body>

<?php
$str1 = 'a';
$str2 = 'b';

echo strcmp($str1, $str2)."<br/>";

$str3 = 'b';
$str4 = 'a';
echo strcmp($str3, $str4)."<br/>";

$str5 = "Anil";
$str6 = "anil";
echo strcmp($str5, $str6)."<br/>";

?>
</body></html>
