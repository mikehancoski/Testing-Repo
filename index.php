<html>
<body>
This is a list of examples .... or will be.
</br>
<?php

$testList = array("milk", "eggs", "bread", 
                  "BFG-9000", "scrap metal", "0.4M sulfuric acid");

$l = count($testList);

// echo $l;

 echo "<h2>Shopping List</h2><ol>";

for ($i=0; $i<$l; $i++) {
	echo "<li> " . $testList[$i];
}
?>
</body>
</html>