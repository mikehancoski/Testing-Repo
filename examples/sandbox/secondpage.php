<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>second page</title>
</head>

<body>

<?php 
    print_r($_GET);
    $id = $_GET['id'];
    $name = $_GET['name'];
    echo '<br/>';
    echo $id . ' and ' . $name;
    echo '<br/>';
    $string = 'mike hancoski';
    echo urlencode($string);
    echo '<br/>';
    echo rawurldecode($string);
    echo '<br/>';
    

?>

</body>
</html>