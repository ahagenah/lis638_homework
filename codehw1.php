<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>
<?php
    echo "<h1>Challenge 1: Correct Change</h1>";
    
    $change = 99;
    
    $dollar = 0;
    $qtr = 0;
    $dime = 0;
    $nickel = 0;
    $cent = 0;
    
    echo "<h4>You are due $change cent(s) back in change.</h4>";
    
    while ($change >= 100){
        $change = $change - 100;
        $dollar++;
    }
    while ($change >= 25){
        $change = $change -25;
        $qtr++;
    }
    while ($change >= 10){
        $change = $change -10;
        $dime++;
    }
    while ($change >= 5){
        $change = $change -5;
        $nickel++;
    }
    while ($change >= 1){
        $change = $change -1;
        $cent++;
    }
    
    echo "<h4>You are due back $dollar dollar(s), $qtr quarter(s), $dime dime(s), $nickel nickel(s) and $cent cent(s).</h4>";
    
    //In an Apu Voice.
    echo "<h4>Thank you, come again!</h4>";
    
    echo "<h1>Challenge 2: 99 Bottles of Beer</h1>";
    
    $beerinput = 25;
    
    $bottle = "bottles of beer";
    
    while ($beerinput >= 1){
        echo "$beerinput $bottle on the wall, $beerinput $bottle,<br>";
        --$beerinput;
        if ($beerinput <= 1){
            echo "you take one down and pass it around $beerinput bottle of beer on the wall!<br>";
        }
        else{
            echo "you take one down and pass it around $beerinput $bottle on the wall!<br>";
        }
    }

?>
</body>
</html>