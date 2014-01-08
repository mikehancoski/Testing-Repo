<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>logic</title>
</head>

<body>

<?php
    $a = 40;
    $b = 3;
    $c = 20;
    $d = 1;
    if($a > $b){
        echo 'A is greater then b';
        echo '<br/>';
    } elseif($a == $b){
        echo 'a equals b';
        echo '<br/>';
    }else{
        echo 'a is less then b';
        echo '<br/>';
    }
    echo '<br/>';
    
    if(($a > $c) && ($c > $d)){
        echo 'a is larger than b and c is large then d';
        echo '<br/>';
    }
    
    unset($a);
    if(!isset($a)){
        $a = 100;
    }
    echo $a;
    echo '<br/>';
    if(is_int($a)){
        settype($a, 'string');
    }
    echo gettype($a);
    echo '<br/>';
    
    
    

?>
</body>
</html>