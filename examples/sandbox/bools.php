<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>bools null</title>
</head>

<body>

<?php
    $bool1 = true;
    $bool2 = false;
    $var1 = 3;
    $var2 = 'cat';
    $var4 = '0';
    echo 'var1 is set: ' . isset($var1);
    echo '<br/>';
    echo 'var2 is set: ' . isset($var2);
    echo '<br/>';
    echo 'var3 is set: ' . isset($var3);
    echo '<br/>';
    
    unset($var1);
    
    echo 'var1 is set: ' . isset($var1);
    echo '<br/>';
    echo 'var2 is set: ' . isset($var2);
    echo '<br/>';
    echo 'var3 is set: ' . isset($var3);
    echo '<br/>';
    
    echo 'var1 empty: ' . empty($var1);
    echo '<br/>';
    echo 'var4 empty: ' . empty($var4);
    echo '<br/>';
    
    
    
    

?>
</body>
</html>