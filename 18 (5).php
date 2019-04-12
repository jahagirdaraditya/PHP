AIM:- Write a PHP program to drop table using MySQL.

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

$query = "drop table ce";
$crtb = mysql_query($query,$con);
if(!$crtb)

{
die(" table not droped. .!".mysql_error());
}
echo "table droped.. !"."</br>";

?>
</body>
</html>
