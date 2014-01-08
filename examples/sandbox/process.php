<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>form processing</title>
</head>

<body>

    <?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username . ' ' . $password;
    echo '<br/>';

    
    ?>


</body>
</html>