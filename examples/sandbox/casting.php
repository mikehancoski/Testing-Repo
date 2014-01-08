<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>casting</title>
</head>

<body>

<?php
    
    $var1 = '2b';
    $var2 = $var1 + 3;
    echo  $var1;
    echo '<br/>';
    echo gettype($var1);
    echo '<br/>';
    echo gettype($var2);
    echo '<br/>';
    settype($var2, 'string');
    echo gettype($var2);
    echo '<br/>';
    $var3 = (int) $var1;
    echo gettype($var3);
    echo '<br/>';
    
    
    
    
    

?>
</body>
</html>