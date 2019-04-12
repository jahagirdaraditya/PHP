AIM: - Give the example of string function: substr():

<html>
<head>
<title> String Function:Substr():1 </title>
</head>

<body>


<b>If the start is non-negative, the returned string will start at the start'th position in string, start from 0.</b><br/><br/>
<?php

echo "Substring with positive start:".substr("abcdef",2)."<br/>";?><br/> <b>If the start is negative, the returned string will start at the start'th character in

string, from the end of the string.</b><br/><br/> <?php

echo "Substring with negative start:".substr("abcdef",-2)."<br/>";?><br/> <b>If the start is less than or equal to start characters long, false will
return</b><br/><br/>
<?php

echo "start is <= string".substr("abcdef",7)."<br/><br/>"; echo "Finish";

?>
</body>
</html>
