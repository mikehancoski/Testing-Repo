<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>basic</title>
</head>

<body>

<?php

    $firststring = 'the Quick brown fox';
    $secondstring = ' Jumped over the lazy dog.';
   
   $thridstring = $firststring;
   $thridstring .=  $secondstring;
   
   echo $thridstring;
   echo '<br/>';
   
   
   echo 'Lowercase: ' . strtolower($thridstring);
   echo '<br/>';
   echo 'Upper case: ' . strtoupper($thridstring);
   echo '<br/>';
   echo 'Upper case first letter: ' . ucfirst($thridstring);
   echo '<br/>';
   echo 'Upper case words: ' . ucwords($thridstring);
   echo '<br/>';
   echo '<br/>';
   echo 'Length: ' . strlen($thridstring);
   echo '<br/>';
   echo 'Trim: ' . $forthstring = $firststring . trim($secondstring);
   echo '<br/>';
   echo 'Find: ' . strstr($thridstring, "brown");
   echo '<br/>';
   echo 'Replace by string: ' . str_replace("quick", "super-fast", $thridstring);
   
   

?>
</body>
</html>