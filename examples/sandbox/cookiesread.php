<?php
        setcookie('test',0,time()-(60*60*24*7));
    
    ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>forms</title>
</head>

<body>


    <?php
        $var1 = 'default';
        if(isset($_COOKIE['test'])){
            $var1 = $_COOKIE['test'];
        }
        echo $var1;
    
    ?>


</body>
</html>