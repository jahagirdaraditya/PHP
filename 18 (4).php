AIM: - Write a PHP program to insert record into a table using MySQL.

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



$query = "insert into computer values(7009,'Anil J Basantani','Sadhana colony Jamnagar')";

$insrtb = mysql_query($query,$con);
if(!$insrtb)
{
die("Record not inserted.".mysql_error());
}
echo "Record inserted successfully. . .!"."</br>";
?>

</body>
</html>
