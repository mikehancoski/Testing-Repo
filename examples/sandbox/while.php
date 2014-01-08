<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>while</title>
</head>

<body>

<?php
    $count = 0;
    while($count <= 10){
        echo $count . ', ';
        $count++;
    }
    echo '<br/>';
    echo $count;
    echo '<br/>';
    
    
        $count = 0;
    while($count <= 10){
        if($count == 5){
            echo 'five';
        }else{
        echo $count . ', ';
        }
        $count++;
    }
    echo '<br/>';
    
    

?>
</body>
</html>