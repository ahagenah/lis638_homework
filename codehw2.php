<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>
    
<h1>ISBN Validation</h1>
    <!--Field for user to enter ISBN number-->
    <h4>Enter an ISBN number and hit Return to see if it is valid:</h4>
    <form name="form" action="" method="get">
    <input type="text" name="subject" id="subject" value="">
    </form>

<?php   
    //
    while ($isbnvalue = (isset($_GET['subject']) ? $_GET['subject'] : null)){
    
    $sum = 0;
    $counter =0;
  
    //Parse through the input  
    for ($multiplier = 10; $multiplier >= 1; $multiplier--){
        $digit = substr($isbnvalue, $counter, 1);
        if ($digit == "X"){
            $digit = 10;
        }
        $newnum = $digit * $multiplier;
        $sum = $sum + $newnum;
        $counter++;
    }
        
    //Boolean to check if an integer
    $valid = is_int($sum/11);    
    echo $valid ? "<p>$isbnvalue is a valid ISBN!</p>" : "<p>$isbnvalue is <em>NOT</em> a valid ISBN!</p>";
    break;   
    }
    
    //Suggestions for user to try
    echo "<p>You can try these out to test:</p>";
    echo "<p><em>To Kill a Mockingbird</em> -- 0446310786</p>";
    echo "<p> Nonexistent Book -- 123456789";
    echo "<p> Book with \"x\" in number -- 156881111X</p>";
    
    ###############
    ## Coin Toss ##
    ###############
    
    echo "<h1>Coin Toss!</h1>";
    
    //Penny Pics
    $headsimage = "<img src=\"https://images.duckduckgo.com/iu/?u=http%3A%2F%2Fuscoinstoday.com%2Fwp-content%2Fuploads%2F2009%2F11%2F2010-Lincoln-Uncirculated-Cent-Obverse.jpg&f=1\" alt=\"Heads\" height=\"100\" width=\"100\">";
    $tailsimage = "<img src=\"https://images.duckduckgo.com/iu/?u=http%3A%2F%2F2.bp.blogspot.com%2F_WYgRT6sJ2GE%2FTKKpSGJ1VnI%2FAAAAAAAAAAM%2Fj9rEPG9UBng%2Fs1600%2Fnew%2Bpenny.jpg&f=1\" alt=\"Heads\" height=\"100\" width=\"100\">";
    
    echo "<h4>Toss it up 1, 3, 5, 7, 9 times...</h4>";
    
    for ($flips = 1; $flips <=9; $flips +=2){
        echo "Flipping a coin $flips times<br>";
        for ($i = 0; $i <$flips; $i++){
        $value = mt_rand(0,1);
        echo $value == 0 ? $headsimage : $tailsimage;
        }
        echo "<br>";
    }
    echo "<h4>How many times for 2 heads in a row?</h4>";
    
    $headcount = 0;
    $tosscount = 0;
    
    while ($headcount <2){
        $value = mt_rand(0,1);
        echo $value == 0 ? $headsimage : $tailsimage;
        if ($value == 0){
            $headcount++;
            }
        else $headcount = 0;
        $tosscount++;
        }
        echo "<p>Flipped two heads in a row in $tosscount tosses!</p>";
?>
</body>
</html>