<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {
    border: 1px solid black;
}

table {
    width: 100%;
}
th, td {
    text-align: left;
    padding: 8px;
}

th {
    height: 50px;
    background-color: #f2f2f2;
}
p{
	color: green;
	font-size: 150%;
	text-align: center;
}
</style>
</head>
<body>
<h2>Book List</h2>
<?php



	$pb = "Paperback"; #So i don't have to write paperback a million times.
	$total = 0;
	##############
	##Book Array##
	##############

	$books = array(
			 array("PHP and MySQL Web Development", "Luke", "Welling", 144, "$pb", 31.63),
			 array("Web Design with HTML, CSS, JavaScript and jQuery", "Jon", "Duckett", 135, "$pb",41.23),
			 array("PHP Cookbook: Solutions & Examples for PHP Programmers", "David", "Sklar", 14, "$pb" , 40.88),
			 array("JavaScript and JQuery: Interactive Front-End Web Development", "Jon", "Duckett", "251", "$pb", 22.09),
			 array("Modern PHP: New Features and Good Practices", "Josh", "Lockhart", 7, "$pb", 24.49),
			 array("Programming PHP", "Kevin", "Tatroe", 26, "$pb", 29.96),
		);
?>
	<!--My crazy table with php inside-->
			<table>
			<thead>
  			<tr>
    			<th>Title</th>
    			<th>First Name</th> 
    			<th>Last Name</th>
    			<th>Pages</th>
    			<th>Type</th>
    			<th>Price</th>
 			</tr>
 			</thead>
 			<tbody>
 				<?php foreach ($books as $v1) { 
 								echo "<tr>"; #gets a new row for each element
 								$total = $total + $v1[5];
    							foreach ($v1 as $v2) {
        							echo "<td>$v2</td>"; #makes a cell for each element in nested array
   							 } 
   							 	echo "</tr>";
						}
 				?>
 			</tbody>
 			</table>
 			<p><?php echo "Your total price is $$total";?><p>
 <h2>Coin Toss Revisited</h2>

<?php

#Penny Pics
    $headsimage = "<img src=\"https://images.duckduckgo.com/iu/?u=http%3A%2F%2Fuscoinstoday.com%2Fwp-content%2Fuploads%2F2009%2F11%2F2010-Lincoln-Uncirculated-Cent-Obverse.jpg&f=1\" alt=\"Heads\" height=\"100\" width=\"100\">";
    $tailsimage = "<img src=\"https://images.duckduckgo.com/iu/?u=http%3A%2F%2F2.bp.blogspot.com%2F_WYgRT6sJ2GE%2FTKKpSGJ1VnI%2FAAAAAAAAAAM%2Fj9rEPG9UBng%2Fs1600%2Fnew%2Bpenny.jpg&f=1\" alt=\"Heads\" height=\"100\" width=\"100\">";

#initialize variables
	$hc = 0;
	$tc = 0;	


	cointoss(5);



    function cointoss($ts){

    	echo "Beginning the coin flipping, looking for $ts heads in a row...<br>";
    	echo "<br>";

    	global $hc, $tc;

    	$headsimage = "<img src=\"https://images.duckduckgo.com/iu/?u=http%3A%2F%2Fuscoinstoday.com%2Fwp-content%2Fuploads%2F2009%2F11%2F2010-Lincoln-Uncirculated-Cent-Obverse.jpg&f=1\" alt=\"Heads\" height=\"100\" width=\"100\">";
    	$tailsimage = "<img src=\"https://images.duckduckgo.com/iu/?u=http%3A%2F%2F2.bp.blogspot.com%2F_WYgRT6sJ2GE%2FTKKpSGJ1VnI%2FAAAAAAAAAAM%2Fj9rEPG9UBng%2Fs1600%2Fnew%2Bpenny.jpg&f=1\" alt=\"Heads\" height=\"100\" width=\"100\">";

    	while ($hc < $ts){	
        $value = mt_rand(0,1);
        echo $value == 0 ? $headsimage : $tailsimage;
        if ($value == 0){
            $hc++;
            }
        else $hc = 0;
        $tc++;
        }

        echo "<h4>Flipped $ts heads in a row in $tc tosses!</h4>";
    }
    
?>
</body>
</html>