<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>pointers</title>
</head>

<body>

<?php
    $ages = array(4,8,15,16,23,42);
    echo '1: ' . current($ages);
    echo '<br/>';
    next($ages);
    echo '1: ' . current($ages);
    echo '<br/>';
    reset($ages);
    echo '1: ' . current($ages);
    echo '<br/>';
    
    while($age = current($ages)){
        echo $age . ', ';
        next($ages);
    }
    
    echo '<br/>';
    reset($ages);
    
    for($age; $age = current($ages); next($ages)){
        echo $age . ', ';
    }
    

?>
</body>
</html>