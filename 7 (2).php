<html>

<head>
<title>
Variable function:isset:2

</title>
</head>


<body>
<?php

$data = array('$no'=>9,'$name'=>"Bipin",'$marks'=>10.5);

foreach($data as $va1)
{
echo $va1."<br/>";
}

foreach($data as $val2)
{
echo isset($val2)."<br/>";
}

?>
</body>
</html>
