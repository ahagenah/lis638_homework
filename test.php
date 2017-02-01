<!DOCTYPE html>
<html>
<body> 
    <h1>This is my awesome page.</h1>
<?php
	$first = "William";
    $middle = "Alexander";
    $last = "Hagenah";
    $age = 30;
    echo "$last, $first $middle ($age)";
    echo "<ul><li>$last, $first $middle ($age)</li></ul>";
    $myname = array($first, "Alexander", "Hagenah");
    print (int) $myname[0];
    print "<h1>New Part</h1>";
    echo $last." ".$first." ".$middle." (".$age.")";
    echo "<p></p>";
    $new_age = $age + 5;
    echo $new_age;
    echo "<p></p>";
    $age_diff = 2034 - 2017;
    $new_new_age = $age + $age_diff;
    echo $new_new_age;
    $age_in_months = $age * 12;
    echo "<br>";
    echo $age_in_months;
    echo "<p></p>";
    echo ++$age;
    echo "<p></p>";
?>
<body>
</html>