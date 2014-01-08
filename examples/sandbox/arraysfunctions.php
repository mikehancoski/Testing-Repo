<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>array functions</title>
</head>

<body>

<?php
    $array1 = array(4,8,15,16,23,42);
    echo 'Count: ' . count($array1);
    echo '<br/>';
    echo 'Max: ' . max($array1);
    echo '<br/>';
    echo 'Min: ' . min($array1);
    echo '<br/>';
    echo 'Sort: ' . sort($array1); print_r($array1);
    echo '<br/>';
    echo 'Rev sort: ' . rsort($array1); print_r($array1);
    echo '<br/>';
    echo 'Implode: ' .  $string1 = implode(' * ', $array1);
    echo '<br/>';
    echo 'explode: '; print_r(explode(' * ',$string1));
    echo '<br/>';
    echo 'In array: ' . in_array(15,$array1); // returns T/F
    echo '<br/>';
    

?>
</body>
</html>