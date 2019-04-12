<html>

<head>
<title> Variable function:unset:1 </title>
</head>

<body>
<?php	function unset_val1()

{
global $val1;
echo $val1;

unset($val1);
}
$val1 = "Bipin";
unset_val1();
?>
</body>
</html>
