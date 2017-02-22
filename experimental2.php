<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>
<?php
	$mynamearray = array("111" => "95.6",
					 	 "222" => "43.2", 
					 	 "333" => "50.2");
	//print_r($mynamearray);
	echo '<br>';
	foreach ($mynamearray as $id => $grade) {
			echo "Student Id $id received a grade of $grade";
			echo '<br>';
	}

	echo count($mynamearray);
	echo '<br>';
	echo array_sum($mynamearray);
	echo '<br>';
	echo min($mynamearray);
	echo $mynamearray["111"];

/*	$products = array(
				array("apple", "Red", 2.30),
				array('banana' => , );
							 );*/
?>
</body>
</html>