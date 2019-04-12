AIM:- Write a PHP program to select data and show into table format.

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

$query = "select * from computer";
$sldt = mysql_query($query,$con);

if(!$sldt)
{
die("data not selected".mysql_error());
}
echo "<table border='1'>

<tr>
<th>ID</th>
<th>Name</th>
<th>Branch</th>
</tr>";

while($row = mysql_fetch_array($sldt))
{
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['branch']."</td>";
echo "</tr>";

}
echo "</table>";

?>
</body>
</html>
