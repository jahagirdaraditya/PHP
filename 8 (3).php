<html>
<head>
<title> Variable function:unset:3 </title>
</head>
<body>
<?php	function unset_static()
{
static $val1;
$val1++;

echo "Before unset(): $val1,";
unset($val1);
$val1 = 55;
echo "After unset(): $val1 <br/>";
}

unset_static();
unset_static();
unset_static();
?>
</body>

</html>
