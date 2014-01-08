<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>continue</title>
</head>

<body>

<?php
    for($count=0; $count<= 10; $count++){
        if($count == 5){
            continue;
        }
        echo $count . ", "; 
    }

?>
</body>
</html>