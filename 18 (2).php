AIM: - Write a PHP program to drop a database using MySQL.

<html>

<head>
<title>Drop Database. </title>
</head>

<body>
<?php
$con = mysql_connect("localhost","root","");
if(!$con)

{
die("not opened");
}

echo "Connection open"."</br>";

$query = "drop database std";
$crdb = mysql_query($query,$con);
if(!$crdb)
{
die("not droped. .!" .mysql_error());

}
echo "database droped.. !";
?>
</body>
</html>
