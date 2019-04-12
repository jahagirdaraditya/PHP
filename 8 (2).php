<html>
<head>
<title> Variable function:unset:2 </title>
</head>
<body>
<?php	function unset_val1()
{

global $val1;
echo $val1;
unset($GLOBALS['val1']);
}
$val1 = "Bipin";

unset_val1();
echo isset($val1);
// echo $val1;	?> </body> </html>
 

