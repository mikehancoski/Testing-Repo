<?php
    session_start();        
    
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>sessions</title>
</head>

<body>


    <?php
        $_SESSION['firstname'] = 'mike';
        $_SESSION['lastname'] = 'hancoski';
        $name = $_SESSION['firstname']. ' ' . $_SESSION['lastname'];
        echo $name;
        echo '<br/>';
        
    
    ?>


</body>
</html>