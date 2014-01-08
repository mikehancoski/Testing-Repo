<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>First page</title>
</head>

<body>
<?php
    $linktext = '<click> & you will see';
    
    
    
?>
<a href="secondpage.php?name=<?php echo urlencode('mike&') ?>&id=42"><?php echo htmlspecialchars($linktext); ?></a>

</body>
</html>