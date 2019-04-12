AIM: - Write a PHP program to create a database using MySQL.

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

$query = "create database std";

$crdb = mysql_query($query,$con);
if(!$crdb)
{

die("not created. .!".mysql_error());
}

echo "database created.. !";

?>

</body>
</html>
