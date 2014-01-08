<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>arrays</title>
</head>

<body>

<?php
    $array1 = array(4,8,16,23,42);
    echo $array1[0];
    echo '<br/>';
    $array2 = array(6,'fox','dog',array('x','y','z'));
    echo $array2[3][1];
    $array2[3] = 'cat';
    echo '<br/>';
    echo $array2[3];
    echo '<br/>';
    $array3 = array('first_name'=> 'mike', 'last_name'=> 'hancoski');
    echo $array3['first_name'];
    echo '<br/>';
    echo $array3['first_name'] . ' ' . $array3['last_name'];
    echo '<br/>';
    $array3['first_name'] = 'bob';
    echo $array3['first_name'] . ' ' . $array3['last_name'];
    echo '<br/>';
    print_r($array2);

?>
</body>
</html>