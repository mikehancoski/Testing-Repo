<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>logic switch</title>
</head>

<body>

<?php
    $a = 3;
    switch($a){
        case 0: 
            echo 'a equals 0';
            break;
        case 1: 
            echo 'a equals 1';
            break;
        case 2:
            echo 'a equals 2';
            break;
        default:
            echo 'a is not 0 1 2 ';
            break;
            
    }
    
    
    

?>
</body>
</html>