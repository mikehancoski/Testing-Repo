<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>functions</title>
</head>

<body>

<?php
    function say_hello(){
        echo 'hello world <br/>';
    }
    say_hello();
    
    function say_hello2($word){
        echo 'hello world <br/> ' . $word . '<br/>' ;
    }
    
    say_hello2('word here');
    say_hello2('more wards');
    
    $name = 'Mike';
    
    say_hello2($name);
    
    function say_hello3($greeting, $target, $punct){
        echo $greeting . ', ' . $target . $punct . '<br/>';
    }
    say_hello3('hello', $name, '!');
    echo '<br/>';
    
    function addition($val1, $val2){
        $sum = $val1 + $val2;
        return $sum;
    }
    $new_vaule = addition(4,5);
    echo $new_vaule;
    
    echo '<br/>';
    
    function add_sub($val1, $val2){
        $sum = $val1 + $val2;
        $subt = $val1 - $val2;
        $result = array($sum, $subt);
        return $result;
    }
    
    $result = add_sub(10,5);
    echo 'Add: ' . $result[0];
    echo '<br/>';
    echo 'Sub: ' . $result[1];
    echo '<br/>';
    
    $bar = 'outside';
    function foo(){
        global $bar;
        $bar = 'inside';
    }
    
    echo $bar;
    echo '<br/>';
    function paint($color = 'red', $room = 'office'){
        echo 'the '. $room . ' is ' .$color;
        echo '<br/>';
    }
    paint();
    
    
?>
</body>
</html>