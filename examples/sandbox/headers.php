<?php
       //header('location: basic.html');
       //exit;
       
       //header('HTTP/1.0 404 not found');
       //exit; 
       /*
       ob_start();
       ob_end_flush();
       this will turn on outputbuffer just for that page in the event that my current server settings are not working 
       */
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>headers</title>
</head>

<body>


    <?php
        header('location: basic.html');
       exit;
    
    ?>


</body>
</html>