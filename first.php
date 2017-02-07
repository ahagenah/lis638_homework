<!DOCTYPE html>
<html>
<head>
<style>
    table, td, tr{
        border: 1px solid black;
    }    
    
</style>
</head>
<body>
    <table>
<?php
for ($a=1;$a<=12;++$a){
    echo "<tr>";
    for ($b=1;$b<=12;++$b){
        echo "<td>";
        if ($a==$b){
         echo "<td class='squares'>";   
        }
        echo $a*$b;
        echo "</td>";
    }
    echo "</tr>";
}
?>
</body>
</html>