<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>Numbers floats</title>
</head>

<body>

<?php
    
    $var1 = 3.14;
    echo '4 / 3: ' . 4/3;
    echo '<br/>';
    echo 'Floating point: ' . $var1;
    echo '<br/>';
    echo 'Round: ' . round($var1,1);
    echo '<br/>';
    echo 'Ceiling: ' . ceil($var1);
    echo '<br/>';
    echo 'Floor: ' . floor($var1);
    echo '<br/>';
    echo 'Absolute: ' . abs(0 - 301);
    echo '<br/>';
    echo 'Expo: ' . pow(2,8);
    echo '<br/>';
    echo 'Square root: ' . sqrt(100);
    echo '<br/>';
    echo 'modulus: ' . fmod(20,7);
    echo '<br/>';
    echo 'Random any: ' . rand();
    echo '<br/>';
    echo 'random range 10 - 30: ' . rand(10,30);
    echo '<br/>';


?>
</body>
</html>