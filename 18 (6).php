AIM:- Write a program to update table:6

<html>

<head>
<title>Create Database. </title>
</head>

<body>
<?php
$con = mysql_connect("localhost","root","");
if(!$con)

{
die("not opened");
}

echo "Connection open"."</br>";

$db = mysql_select_db("studinfo",$con);
if(!$db)
{
die("Database not found".mysql_error());
}

echo "Database is selected"."</br>";


$query = "update computer set id = 09 where id = 7009"; $crtb = mysql_query($query,$con);
if(!$crtb)

{
die(" table not updated. .!".mysql_error());
}
echo "table updated.. !"."</br>";



?>

</body>
</html>
