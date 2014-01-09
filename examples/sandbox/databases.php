<?php
      // 1. Create a database connection
      $connection = mysql_connect('localhost','root','');
      if(!$connection){
        die('Database connection failed ' . mysql_error());
      }
      
      //2. Select the database to use
      $db_select = mysql_select_db('demo_db', $connection);
      if(!$db_select){
        die('Database Selection failed: ' . mysql_error());
      }
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Michael Hancoski" />

	<title>database</title>
</head>

<body>


    <?php
        // 3. database query 
        $result = mysql_query('SELECT * FROM subjects', $connection);
        if(!$result){
            die('Database query failed: ' . mysql_error());
        }
        
        //4. use returned data
        /*
        while ($row = mysql_fetch_array($result)){
            echo $row['menu_name']. ' ' . $row['position']. '<br/>';
            print_r($row);
            echo ' <br/>';
        }
        */
        echo ' <br/>';
        //$test = mysql_fetch_array($result);
        //print_r($test);
        for($array = mysql_fetch_array($result); isset($array[1]) != false; $array = mysql_fetch_array($result)){
            echo print_r($array);
            echo ' --- This is the array <br/>';
            echo $array['menu_name'] . ' Menu name ' . $array['position'] . ' position <br/>';
        }
        /*
        foreach(mysql_fetch_array($result) AS $key => $value){
            echo $row2['menu_name']. ' ' . $row2['position']. ' Pos and name<br/>';
            print_r($row2);
            echo ' print r <br/>';
        }
        */
        
        
        
        //5. close connection
        mysql_close($connection);
    ?>


</body>
</html>
