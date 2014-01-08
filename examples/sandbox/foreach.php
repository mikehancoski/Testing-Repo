<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>for</title>
</head>

<body>

<?php
    $ages = array(4,8,15,16,23,42);
    foreach($ages AS $age){
        echo $age . ', ';
    }
    echo '<br/>';
    
    foreach($ages AS $position => $age){
        echo $position . ':' . $age;
        echo '<br/>';
    }
    
    $prices = array('new computer'=> 2000,'1 month'=>25,'learn php'=> 'priceless');
    foreach($prices as $key => $value){
        if(is_int($value)){
            echo $key . ': $' . $value;
            echo '<br/>';
        }else{
            echo $key . ': ' . $value;
            echo '<br/>';
        }
    }
    

?>
</body>
</html>