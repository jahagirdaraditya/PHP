<html>
<head>

<title>
Variable Function:intval()
</title>
</head>

<body>
<?php

echo intval(102).'<br>';
echo intval(102.22).'<br>';
echo intval('102').'<br>';

echo intval(+102).'<br>';
echo intval(-102).'<br>';
echo intval(0102).'<br>';
echo intval('0002').'<br>';
echo intval(1e20).'<br>';
echo intval(0x1B).'<br>';
echo intval(10200000).'<br>';

echo intval(10200000000000000000).'<br>'; echo intval(10,2).'<br>'; echo intval('10',2).'<br>';
?>
</body>

</html>
