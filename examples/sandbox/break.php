<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>break</title>
</head>

<body>

<?php
    for($count=0; $count<= 10; $count++){
        
        echo $count;
        if($count == 10){
            break;
        }
        echo ', ';
    }

?>
</body>
</html>