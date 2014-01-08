<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>Numbers Integeres</title>
</head>

<body>

<?php
    
    $var1 = 3;
    $var2 = 4;
    
    echo 'Basic math: ' . (((1 + 2 + $var1) * $var2) / 2 - 5);
    echo '<br/>';
    $var2 += 4;
    echo '+=: ' . $var2;
    echo '<br/>';
    $var2 -= 4;
    echo '-=: ' . $var2;
    echo '<br/>';
    $var2 *= 4;
    echo '*=: ' . $var2;
    echo '<br/>';
    $var2 /= 4;
    echo '/=: ' . $var2;
    echo '<br/>';
    $var2++;
    echo '++: ' . $var2;
    echo '<br/>';
    $var2--;
    echo '--: ' . $var2;
    echo '<br/>';



?>
</body>
</html>