<html>
<head>

<title> Variable function:gettype:2 </title> </head>


<body>
<?php

$data = array(1,1.5,null,"Bipin",new stdclass,true); foreach($data as $value)
{

echo gettype($value)."<br/>";
}
?>
</body>
</html>
