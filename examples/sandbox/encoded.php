<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>ecoding</title>
</head>

<body>
<?php
    $url_php = 'php/created/page/url.php';
    $param1 = 'this is a string';
    $param2 = '"bad"/<>charcters$';
    $linktext = '<click> & you will see';
    
    $url = 'http://localhost/';
    $url .= rawurldecode($url_php);
    
    $url .= '?param1=' . urldecode($param1);
    $url .= '&param2=' . urlencode($param2);
    
?>
<a href="<?php echo htmlspecialchars($url) ?>"><?php echo htmlspecialchars($linktext); ?></a>

</body>
</html>