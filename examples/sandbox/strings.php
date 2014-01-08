<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>basic</title>
</head>

<body>

<?php

   echo 'Hello world <br />';
   $my_variable = 'Hello world <br />';
   echo $my_variable;
   echo $my_variable . ' again';
   echo '<br/>';
   
   echo "$my_variable again!";
   echo "{$my_variable} again!";// need to use with spaces
   echo '$my_variable again'; // does not work '' 
   
   

?>
</body>
</html>